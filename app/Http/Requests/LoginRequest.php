<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.exists' => 'Email does not exists',
            'password.required' => 'Password is required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ];
    }

    public function authenticate()
    {
        $throttleKey = Str::lower($this->input('email')) . '|' . $this->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 3)) {
            $seconds = RateLimiter::availableIn($throttleKey);

            Log::info("Too many attempts: " . RateLimiter::tooManyAttempts($throttleKey, 3));

            throw ValidationException::withMessages([
                'throttle' => ["Too many login attempts. Please try again in {$seconds} seconds."],
                'seconds' => $seconds,
            ]);
        }

        // If credentials are incorrect, increment the throttle attempt count
        if (!Auth::attempt($this->only('email', 'password'))) {
            Log::info('Throttle error message', ['throttle' => $throttleKey]);
            Log::info("Login failed for user", ['email' => $this->input('email')]);
            RateLimiter::hit($throttleKey);

            throw ValidationException::withMessages([
                'password' => 'Password is incorrect',
            ]);
        }

        // Clear throttle attempts on successful login
        RateLimiter::clear($throttleKey);
    }
}
