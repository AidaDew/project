<?php

namespace App\Filament\Admin\Resources\QuestionsResource\Pages;

use App\Filament\Admin\Resources\QuestionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuestions extends ListRecords
{
    protected static string $resource = QuestionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
