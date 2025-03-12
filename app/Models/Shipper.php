<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipper extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'phone',
        'email',
        'website',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
