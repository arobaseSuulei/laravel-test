<?php

namespace App\Filament\Resources\UserApps\Pages;

use App\Filament\Resources\UserApps\UserAppResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserApp extends EditRecord
{
    protected static string $resource = UserAppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
