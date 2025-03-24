<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Forms\Components\TextInput;

class Register extends BaseRegister
{
  protected function getFormSchema(): array
  {
    return [
      TextInput::make('name')
        ->label('Name')
        ->required(),

      TextInput::make('email')
        ->label('Email')
        ->email()
        ->required(),

      TextInput::make('password')
        ->label('Password')
        ->password()
        ->required(),

      TextInput::make('passwordConfirmation')
        ->label('Confirm Password')
        ->password()
        ->required(),
    ];
  }
}
