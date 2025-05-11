<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Activities';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('cover_image')
                    ->label('Cover Image')
                    ->image()
                    ->columnSpanFull()
                    ->directory('uploads/articles')
                    ->required()
                    ->saveUploadedFileUsing(function ($file, $livewire, $set) {
                        // Try to use slug from current state, fallback to title or timestamp
                        $title = $livewire->data['title'] ?? 'article';
                        $slug = Str::slug($title);

                        $extension = $file->getClientOriginalExtension();
                        $filename = $slug . '.' . $extension;

                        $path = $file->storeAs('uploads/articles', $filename, 'public');

                        // Set the value to be stored in the DB
                        $set('cover_image', $path);

                        return $path;
                    }),
                Forms\Components\TextInput::make('slug')
                    ->readOnly()
                    ->unique(),  // Optional: completely hide
                Forms\Components\TextInput::make('title')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    })
                    ->unique()
                    ->required(),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(function () {
                        return (Article::max('sort_order') ?? 0) + 1;
                    }),
                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->numeric(),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
