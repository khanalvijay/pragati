<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlidersResource\Pages;
use App\Filament\Resources\SlidersResource\RelationManagers;
use App\Models\Sliders;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SlidersResource extends Resource
{
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $model = Sliders::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              TextInput::make('title')->label('Slider Image Title'),

              Select::make('status')->options([
                1 => 'Enabled',
                0 => 'Disabled'
              ]),
              FileUpload::make('slideimage')->label('Slider Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                ImageColumn::make('slideimage')->width(100)->label('Website Logo'),
                SelectColumn::make('status')->label('Slider Status')->options([
                  1 => 'Enabled',
                  0 => 'Disabled'
                ]),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSliders::route('/create'),
            'edit' => Pages\EditSliders::route('/{record}/edit'),
        ];
    }
}
