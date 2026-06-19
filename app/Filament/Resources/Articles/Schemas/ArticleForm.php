<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),

                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                    
                    Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        ])
                    ->default('draft')
                    ->required(),

                    // TextInput::make('views')
                    //     ->numeric()
                    //     ->default(0),
                    
                DateTimePicker::make('published_at'),
                
                RichEditor::make('content')
                    ->required(),
            ]);
    }
    }
