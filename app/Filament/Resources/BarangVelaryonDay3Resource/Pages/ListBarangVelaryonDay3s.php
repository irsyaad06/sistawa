<?php

namespace App\Filament\Resources\BarangVelaryonDay3Resource\Pages;

use App\Filament\Resources\BarangVelaryonDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangVelaryonDay3s extends ListRecords
{
    protected static string $resource = BarangVelaryonDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
