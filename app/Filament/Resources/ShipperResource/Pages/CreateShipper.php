<?php

namespace App\Filament\Resources\ShipperResource\Pages;

use App\Filament\Resources\ShipperResource;
use App\Models\Shipper;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateShipper extends CreateRecord
{
    protected static string $resource = ShipperResource::class;

    protected function afterCreate(): void
    {
        $shipperCount = Shipper::count(); // Get the total number of shippers

        Notification::make()
            ->success()
            ->title('Shipper Added')
            ->body("A new shipper has been registered. Total shippers: {$shipperCount}")
            ->send();
    }
}
