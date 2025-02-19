<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\QuestionsResource\Pages;
use App\Filament\Admin\Resources\QuestionsResource\RelationManagers;
use App\Models\Questions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionsResource extends Resource
{
    protected static ?string $model = Questions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('имя'),
                Forms\Components\TextInput::make('email')
                    ->label('электронная почта')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('номер телефона')
                    ->tel()
                    ->required(),
                Forms\Components\MarkdownEditor::make('question')
                    ->label('вопрос')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestions::route('/create'),
            'edit' => Pages\EditQuestions::route('/{record}/edit'),
        ];
    }
}
