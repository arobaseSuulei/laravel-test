<?php

namespace App\Filament\Resources\UserApps\Pages;

use App\Filament\Resources\UserApps\UserAppResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUserApp extends CreateRecord
{
    protected static string $resource = UserAppResource::class;
}
