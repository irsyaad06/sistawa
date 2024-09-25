<?php

namespace App\Filament\Resources\BarangVelaryonDay2Resource\Pages;

use App\Filament\Resources\BarangVelaryonDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangVelaryonDay2s extends ListRecords
{
    protected static string $resource = BarangVelaryonDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
