<?php

namespace App\Filament\Resources\OrderDetailResource\Pages;

use App\Filament\Resources\OrderDetailResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateOrderDetail extends CreateRecord
{
    protected static string $resource = OrderDetailResource::class;

    protected function afterCreate(): void
    {
        Notification::make()
            ->success()
            ->title('A new order detail has been successfully created.')
            ->send();
    }
}
