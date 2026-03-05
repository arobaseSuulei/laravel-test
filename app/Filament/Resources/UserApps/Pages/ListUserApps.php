<?php

namespace App\Filament\Resources\UserApps\Pages;

use App\Filament\Resources\UserApps\UserAppResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserApps extends ListRecords
{
    protected static string $resource = UserAppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
