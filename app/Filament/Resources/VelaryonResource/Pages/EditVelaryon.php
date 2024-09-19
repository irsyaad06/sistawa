<?php

namespace App\Filament\Resources\VelaryonResource\Pages;

use App\Filament\Resources\VelaryonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVelaryon extends EditRecord
{
    protected static string $resource = VelaryonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
