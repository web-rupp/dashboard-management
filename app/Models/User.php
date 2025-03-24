<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser, HasName
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessPanel(Panel $panel): bool 
    {
        // allow access to all user , simply return true
        return true;
        // Or restrict to a specific user type, e.g. admin:
        // return $this->is_admin === 1;
    }

    // create a new panel object
    public function canAccessFilament(): bool
    {
        $panel = new Panel();
        return $this->canAccessPanel($panel);
    }

    public function getFilamentName(): string
    {
        return $this->name;
    }
}