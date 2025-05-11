<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchOfficeResource\Pages;
use App\Models\BranchOffice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BranchOfficeResource extends Resource
{
    protected static ?string $model = BranchOffice::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pic')
                    ->label('Person in Charge')
                    ->maxLength(255),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('pic'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListBranchOffices::route('/'),
            'create' => Pages\CreateBranchOffice::route('/create'),
            'edit' => Pages\EditBranchOffice::route('/{record}/edit'),
        ];
    }
}
