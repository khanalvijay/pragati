<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BoardResource\Pages;
use App\Filament\Resources\BoardResource\RelationManagers;
use App\Models\Board;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BoardResource extends Resource
{
    
    protected static ?string $navigationGroup = 'Director
    Committee';
    protected static ?string $model = Board::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Board of Directors';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Member Name'),
                Select::make('position')->options(Board::BOD_ROLES),
           
                FileUpload::make('photo')->label('Member Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->searchable(),
                TextColumn::make('position')->label('Position')->searchable()->translateLabel(),
                ImageColumn::make('photo')->width(100)->label('Member Image'),
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
            'index' => Pages\ListBoards::route('/'),
            // 'create' => Pages\CreateBoard::route('/create'),
            // 'edit' => Pages\EditBoard::route('/{record}/edit'),
        ];
    }
}
