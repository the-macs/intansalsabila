<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CompanyInfo;
use App\Models\PackageUmrah;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PackageUmrahResource\Pages;
use App\Filament\Resources\PackageUmrahResource\RelationManagers;

class PackageUmrahResource extends Resource
{
    protected static ?string $model = PackageUmrah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Packages';

    protected static ?string $navigationLabel = 'Umrah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Package Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\FileUpload::make('brochure')
                            ->label('Brochure Image')
                            ->image()
                            ->directory('uploads/packages/umrah')
                            ->preserveFilenames()
                            ->imageEditor()
                            ->required(),

                        Forms\Components\DatePicker::make('embarkation')
                            ->label('Keberangkatan')
                            ->required()
                            ->format('Ymd') // This sets the display format for the picker
                            ->displayFormat('d F Y') // Optional: how it looks in the UI
                            ->native(false) // Use flatpickr UI instead of native date picker
                            ->closeOnDateSelection(true),

                        Forms\Components\TextInput::make('starting_price')
                            ->label('Harga Mulai')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Package Details')
                    ->schema([
                        Forms\Components\RichEditor::make('detail_package')
                            ->label('Detail Paket')
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('incl_package')
                            ->label('Paket Termasuk')
                            ->nullable()
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('excl_package')
                            ->label('Paket Tidak Termasuk')
                            ->nullable()
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('incl_equipment')
                            ->label('Perlengkapan')
                            ->nullable()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('brochure')
                    ->label('Image')
                    ->disk('public'),

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('embarkation')
                    ->label('Embarkation Date')
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->translatedFormat('d F Y'); // e.g., 10 Desember 2025
                    }),

                Tables\Columns\TextColumn::make('starting_price')
                    ->label('Price'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('active')
                    ->query(fn(Builder $query): Builder => $query->where('is_active', true)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('embarkation', 'desc');
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
            'index' => Pages\ListPackageUmrahs::route('/'),
            'create' => Pages\CreatePackageUmrah::route('/create'),
            'edit' => Pages\EditPackageUmrah::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderBy('embarkation', 'desc');
    }
}
