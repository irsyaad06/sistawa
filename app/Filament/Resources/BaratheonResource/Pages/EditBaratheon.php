<?php

namespace App\Filament\Resources\BaratheonResource\Pages;

use App\Filament\Resources\BaratheonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBaratheon extends EditRecord
{
    protected static string $resource = BaratheonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
