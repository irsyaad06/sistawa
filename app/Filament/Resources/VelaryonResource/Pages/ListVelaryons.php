<?php

namespace App\Filament\Resources\VelaryonResource\Pages;

use App\Filament\Resources\VelaryonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVelaryons extends ListRecords
{
    protected static string $resource = VelaryonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
