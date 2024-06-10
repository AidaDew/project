<?php

namespace App\Filament\Admin\Resources\AnswersResource\Pages;

use App\Filament\Admin\Resources\AnswersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnswers extends ListRecords
{
    protected static string $resource = AnswersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
