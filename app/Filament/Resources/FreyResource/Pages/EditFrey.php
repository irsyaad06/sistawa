<?php

namespace App\Filament\Resources\FreyResource\Pages;

use App\Filament\Resources\FreyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrey extends EditRecord
{
    protected static string $resource = FreyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
