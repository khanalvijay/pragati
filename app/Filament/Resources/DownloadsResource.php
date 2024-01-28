<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DownloadsResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Downloads;
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


class DownloadsResource extends Resource
{
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $model = Downloads::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([                
                TextInput::make('id')->label('S.N'),
                TextInput::make('description')->label('Description'),
                FileUpload::make('uploadedfile')->label('File Upload')->preserveFilenames(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('S.N'),
                TextColumn::make('description')->label('Description'),
                TextColumn::make('uploadedfile')->label('File Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDownloads::route('/'),
            // 'create' => Pages\CreateDownloads::route('/create'),
            // 'edit' => Pages\EditDownloads::route('/{record}/edit'),
        ];
    }
}
