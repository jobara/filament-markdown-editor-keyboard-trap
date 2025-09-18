<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Course title')
                    ->required(),
                MarkdownEditor::make('description')
                    ->label('Description')
                    ->columnSpan(2)
                    ->required(),
                Toggle::make('available')
                    ->label('Available to register')
                    ->required(),
                MarkdownEditor::make('syllabus')
                    ->label('Syllabus')
                    ->columnSpan(2)
                    ->requiredIf('available', true),
                MarkdownEditor::make('notes')
                    ->label('Notes')
                    ->columnSpan(2),
            ]);
    }
}
