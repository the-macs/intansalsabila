<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyInfoResource\Pages;
use App\Models\CompanyInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyInfoResource extends Resource
{
    protected static ?string $model = CompanyInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $modelLabel = 'Company Information';

    protected static ?string $navigationLabel = 'Company Info';

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\FileUpload::make('company_logo.icon')
                        ->label('Icon')
                        ->image()
                        ->preserveFilenames()
                        ->directory('uploads/logo'),

                    Forms\Components\FileUpload::make('company_logo.main_logo')
                        ->label('Company Logo')
                        ->image()
                        ->preserveFilenames()
                        ->directory('uploads/logo'),

                    Forms\Components\FileUpload::make('company_logo.alt_logo')
                        ->label('Alternative Logo')
                        ->image()
                        ->preserveFilenames()
                        ->directory('uploads/logo'),
                ])
                    ->columns(3),
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Company Name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('address')
                            ->label('Company Address (Head Office)')
                            ->required()
                            ->maxLength(255),
                    ])->columns(1),

                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\Repeater::make('phone')
                            ->schema([
                                Forms\Components\TextInput::make('number')
                                    ->tel()
                                    ->required()
                            ])
                            ->columnSpanFull(),
                        Forms\Components\Repeater::make('fax')
                            ->schema([
                                Forms\Components\TextInput::make('number')
                                    ->tel()
                                    ->required()
                            ])
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('whatsapp')
                            ->tel()
                            ->columnSpanFull()
                            ->required(),
                        Forms\Components\Repeater::make('email')
                            ->schema([
                                Forms\Components\TextInput::make('address')
                                    ->email()
                                    ->required()
                            ])
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Working Hours')
                    ->schema([
                        Forms\Components\Repeater::make('working_hours')
                            ->schema([
                                Forms\Components\TextInput::make('day')
                                    ->required(),
                                Forms\Components\TextInput::make('hours')
                                    ->required(),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Social Media')
                    ->schema([
                        Forms\Components\TextInput::make('instagram')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('facebook')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tiktok')
                            ->url()
                            ->maxLength(255),
                    ])->columns(1),

                Forms\Components\Section::make('Company Details')
                    ->schema([
                        // Forms\Components\Group::make([
                        Forms\Components\FileUpload::make('regulation.umrah')
                            ->label('Persyaratan Umrah')
                            ->image()
                            ->preserveFilenames()
                            ->directory('uploads/regulation'),

                        Forms\Components\FileUpload::make('regulation.hajj')
                            ->label('Persyaratan Haji')
                            ->image()
                            ->preserveFilenames()
                            ->directory('uploads/regulation'),
                        // ])
                        //     ->columns(1),
                        Forms\Components\RichEditor::make('about_us')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('vision')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('mission')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('map_embed')
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('company_profile')
                            ->downloadable()
                            ->directory('company-profile')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // 
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
            'index' => Pages\ListCompanyInfos::route('/'),
            'edit' => Pages\EditCompanyInfo::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
