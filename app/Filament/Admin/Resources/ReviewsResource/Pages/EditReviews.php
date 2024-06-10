<?php

namespace App\Filament\Admin\Resources\ReviewsResource\Pages;

use App\Filament\Admin\Resources\ReviewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReviews extends EditRecord
{
    protected static string $resource = ReviewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
