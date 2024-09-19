<?php

namespace App\Filament\Resources\MartellResource\Pages;

use App\Filament\Resources\MartellResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMartell extends EditRecord
{
    protected static string $resource = MartellResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
