<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_name',
        'address',
        'city',
        'region',
        'postal_code',
        'country',
        'phone',
        'email',
        'website',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
