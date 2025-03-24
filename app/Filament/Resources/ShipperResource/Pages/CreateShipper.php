<?php

namespace App\Filament\Resources\ShipperResource\Pages;

use App\Filament\Resources\ShipperResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateShipper extends CreateRecord
{
    protected static string $resource = ShipperResource::class;

    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Shipper created';
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Shipper created')
            ->body('The Shipper created successfuly');
    }
}
