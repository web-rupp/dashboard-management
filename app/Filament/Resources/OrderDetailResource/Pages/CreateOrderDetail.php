<?php

namespace App\Filament\Resources\OrderDetailResource\Pages;

use App\Filament\Resources\OrderDetailResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderDetail extends CreateRecord
{
    protected static string $resource = OrderDetailResource::class;

    protected function getCreatedNotificationTitle(): string|null
    {
        return 'Order detail created';
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Order detail created')
            ->body('The Order detail created successfuly');
    }
}
