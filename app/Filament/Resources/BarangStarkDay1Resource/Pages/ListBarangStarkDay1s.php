<?php

namespace App\Filament\Resources\BarangStarkDay1Resource\Pages;

use App\Filament\Resources\BarangStarkDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangStarkDay1s extends ListRecords
{
    protected static string $resource = BarangStarkDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
