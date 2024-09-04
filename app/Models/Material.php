<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ['id'];

    public function scopeFilter(Builder $query)
    {
        $query->whereAny(['name', 'type'], 'like', '%' . request('search') . '%');
    }
}
