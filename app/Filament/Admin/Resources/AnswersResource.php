<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AnswersResource\Pages;
use App\Filament\Admin\Resources\AnswersResource\RelationManagers;
use App\Models\Answers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnswersResource extends Resource
{
    protected static ?string $model = Answers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->label('имя')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('электронная почта')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('номер телефона')
                    ->tel()
                    ->required(),
                Forms\Components\MarkdownEditor::make('answer')
                    ->label('ответ ')
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
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswers::route('/create'),
            'edit' => Pages\EditAnswers::route('/{record}/edit'),
        ];
    }
}
