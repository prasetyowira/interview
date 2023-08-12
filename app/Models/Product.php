<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'description', 'price'
    ];
    protected static $unguarded = true;

    /**
     * Get the photos for the product photo.
     */
    public function photos(): HasMany
    {
        return $this->hasMany(ProductPhoto::class);
    }
}
