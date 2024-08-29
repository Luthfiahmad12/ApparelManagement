<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ['id'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function scopeFilter(Builder $query): void
    {
        $query->whereAny(['name', 'price'], 'like', '%' . request('search') . '%');
    }

    public function getImage()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }

        return null;
    }
}
