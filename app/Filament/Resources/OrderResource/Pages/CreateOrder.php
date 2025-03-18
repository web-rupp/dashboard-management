<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    protected function afterCreate(): void
    {
        $this->disableDefaultNotifications();
        $orderCount = Order::count();

        Notification::make()
            ->success()
            ->title('Order Created')
            ->body("A new order has been placed. Total orders: {$orderCount}")
            ->send();
    }
    
}
