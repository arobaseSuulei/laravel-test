<?php

namespace App\Filament\Resources\UserApps;

use App\Filament\Resources\UserApps\Pages\CreateUserApp;
use App\Filament\Resources\UserApps\Pages\EditUserApp;
use App\Filament\Resources\UserApps\Pages\ListUserApps;
use App\Filament\Resources\UserApps\Schemas\UserAppForm;
use App\Filament\Resources\UserApps\Tables\UserAppsTable;
use App\Models\UserApp;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserAppResource extends Resource
{
    protected static ?string $model = UserApp::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'UserApp';

    public static function form(Schema $schema): Schema
    {
        return UserAppForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserAppsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUserApps::route('/'),
            'create' => CreateUserApp::route('/create'),
            'edit' => EditUserApp::route('/{record}/edit'),
        ];
    }
}
