<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function afterCreate(): void
    {
        $this->disableDefaultNotifications();
        Notification::make()
            ->success()
            ->title('Category Created')
            ->body('The category has been added successfully.')
            ->send();
    }
    
}
