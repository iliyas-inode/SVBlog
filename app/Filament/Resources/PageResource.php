<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $slug = 'pages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    TextInput::make('title')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->disabled()
                        ->unique(Page::class, 'slug', fn($record) => $record),

                    Textarea::make('meta.description')
                        ->required()
                        ->columnSpan('full'),

                    RichEditor::make('content')
                        ->columnSpan('full'),

                    Toggle::make('published')->required(),
                ])
                    ->columns(['lg' => 2]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                BooleanColumn::make('published'),
            ])
            ->actions([
//                Action::make('preview')
//                    ->url(fn(Page $record) => self::getUrl('preview', ['record' => $record->getRouteKey()]))
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
            'preview' => Pages\PreviewPage::route('/{record}/preview'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug'];
    }
}
