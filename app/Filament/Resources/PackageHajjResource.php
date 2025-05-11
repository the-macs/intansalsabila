<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PackageHajj;
use Filament\Resources\Resource;
use App\Filament\Resources\PackageHajjResource\Pages;
use App\Models\CompanyInfo;
use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Eloquent\Builder;

class PackageHajjResource extends Resource
{
    protected static ?string $model = PackageHajj::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Packages';

    protected static ?string $navigationLabel = 'Hajj';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Package Information')
                    ->schema([
                        Forms\Components\FileUpload::make('brochure')
                            ->label('Brochure Image')
                            ->image()
                            ->directory('uploads/packages/haji')
                            ->preserveFilenames()
                            ->imageEditor()
                            ->columnSpanFull()
                            ->required(),

                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('embarkation')
                            ->label('Keberangkatan')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('starting_price')
                            ->label('Harga Mulai')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('sub_info')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('whatsapp_number')
                            ->required()
                            ->default(fn() => CompanyInfo::first()->whatsapp),

                        Forms\Components\TextInput::make('sort_order')
                            ->label('Sort Order (Diurutkan dari terbesar)')
                            ->numeric()
                            ->default(function () {
                                return (PackageHajj::max('sort_order') ?? 0) + 1;
                            }),

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

                Tables\Columns\TextColumn::make('starting_price')
                    ->label('Price'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),

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
            ->defaultSort('sort_order', 'desc');
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
            'index' => Pages\ListPackageHajjs::route('/'),
            'create' => Pages\CreatePackageHajj::route('/create'),
            'edit' => Pages\EditPackageHajj::route('/{record}/edit'),
        ];
    }
}
