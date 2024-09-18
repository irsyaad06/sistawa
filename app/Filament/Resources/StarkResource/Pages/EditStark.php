<?php

namespace App\Filament\Resources\StarkResource\Pages;

use App\Filament\Resources\StarkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStark extends EditRecord
{
    protected static string $resource = StarkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
