<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Storage;


class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('address')->label('Office Address'),
                TextInput::make('phone')->label('Office Phone Number'),
                TextInput::make('email')->label('Office Email Address'),
                TextInput::make('map')->label('Google Map'),
                TextInput::make('fb_url')->label('Facebook Profile'),
                TextInput::make('tw_url')->label('Twitter Profile'),
                TextInput::make('in_url')->label('Instagram Profile'),
                FileUpload::make('logo')->label('Website Logo')->preserveFilenames(),
                FileUpload::make('anniversarylogo')->label('Anniversary Logo ')->preserveFilenames(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('address'),
                TextColumn::make('phone'),
                TextColumn::make('email'),
                ImageColumn::make('logo')->width(100)->label('Website Logo'),
                ImageColumn::make('anniversarylogo')->width(100)->label('Anniversary Logo '),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSettings::route('/'),
            
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
