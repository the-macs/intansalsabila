<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GalleryResource\RelationManagers;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Activities';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Gallery Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                if ($operation === 'edit') {
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->readOnly()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\DatePicker::make('date')
                            ->required(),

                        Forms\Components\TextInput::make('location')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Gallery Images')
                    ->schema([
                        // Forms\Components\FileUpload::make('images')
                        //     ->directory(function ($get) {
                        //         return 'uploads/galleries/' . $get('slug');
                        //     })
                        //     ->image()
                        //     ->multiple()
                        //     ->reorderable()
                        //     ->appendFiles()
                        //     ->downloadable()
                        //     ->openable()
                        //     ->preserveFilenames()
                        //     ->panelLayout('grid')
                        //     ->helperText('Upload multiple images for this gallery')

                        Forms\Components\FileUpload::make('media.images')
                            ->label('Upload Images')
                            ->directory(fn($get) => 'uploads/galleries/' . $get('slug') . '/images')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->appendFiles()
                            ->downloadable()
                            ->openable()
                            ->preserveFilenames()
                            ->panelLayout('grid')
                            ->helperText('Upload multiple images for this gallery'),

                        Forms\Components\FileUpload::make('media.videos')
                            ->label('Upload Videos')
                            ->directory(fn($get) => 'uploads/galleries/' . $get('slug') . '/videos')
                            ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mov'])
                            ->multiple()
                            ->appendFiles()
                            ->downloadable()
                            ->openable()
                            ->preserveFilenames()
                            ->panelLayout('grid')
                            ->helperText('Upload multiple videos for this gallery'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('images')
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(isSeparate: true)
                    ->getStateUsing(function ($record) {
                        // Convert ArrayObject to array if needed
                        $images = $record->images;
                        if ($images instanceof \Illuminate\Database\Eloquent\Casts\ArrayObject) {
                            $images = $images->toArray();
                        }

                        return array_map(function ($image) use ($record) {
                            return asset('storage/' . $image);
                        }, $images ?? []);
                    }),

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (Gallery $record) {
                        // Delete associated images when gallery is deleted
                        $storagePath = 'public/galleries/' . $record->slug;
                        Storage::deleteDirectory($storagePath);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records) {
                            foreach ($records as $record) {
                                $storagePath = 'public/galleries/' . $record->slug;
                                Storage::deleteDirectory($storagePath);
                            }
                        }),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
