<?php

namespace App\Filament\Resources\UserApps\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserAppForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                Toggle::make('role')
                    ->required(),
            ]);
    }
}
