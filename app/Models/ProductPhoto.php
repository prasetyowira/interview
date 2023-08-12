<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPhoto extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'product_id', 'path'
    ];

    protected static $unguarded = true;

    /**
     * Get the product that owns the photo.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
