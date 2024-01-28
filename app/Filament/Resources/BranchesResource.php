<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchesResource\Pages;
use App\Filament\Resources\BranchesResource\RelationManagers;
use App\Models\Branches;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class BranchesResource extends Resource
{
    protected static ?string $navigationGroup = 'Pages';

    protected static ?string $model = Branches::class;

    protected static ?string $navigationIcon = 'heroicon-o-share';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('blocation')->label('Branch Location'),
                TextInput::make('bheadname')->label('Branch Head'),
                TextInput::make('bheademail')->label('Email Address'),
                TextInput::make('bheadphone')->label('Phone'),
                TextInput::make('blongitude')->label('Londitude'),
                TextInput::make('blatitude')->label('Latitude'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('blocation')->label('Branch Location')->searchable(),
                TextColumn::make('bheadname')->label('Branch Head'),
                TextColumn::make('blongitude')->label('Longitude'),
                TextColumn::make('blatitude')->label('Latitude'),
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
            'index' => Pages\ListBranches::route('/'),
            // 'create' => Pages\CreateBranches::route('/create'),
            // 'edit' => Pages\EditBranches::route('/{record}/edit'),
        ];
    }
}
