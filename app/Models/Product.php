<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'supplier_id',
        'description',
        'unit_price',
        'quantity_per_unit',
        'units_in_stock',
        'units_on_order',
        'reorder_level',
        'is_discontinued',
    ];

    protected $casts = [
        'unit_price' => 'decimal:2',
        'units_in_stock' => 'integer',
        'units_on_order' => 'integer',
        'reorder_level' => 'integer',
        'is_discontinued' => 'boolean',
    ];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }
}
