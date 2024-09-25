<?php

namespace App\Filament\Resources\BarangVelaryonDay1Resource\Pages;

use App\Filament\Resources\BarangVelaryonDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangVelaryonDay1s extends ListRecords
{
    protected static string $resource = BarangVelaryonDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
