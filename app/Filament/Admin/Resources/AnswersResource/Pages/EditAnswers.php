<?php

namespace App\Filament\Admin\Resources\AnswersResource\Pages;

use App\Filament\Admin\Resources\AnswersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnswers extends EditRecord
{
    protected static string $resource = AnswersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
