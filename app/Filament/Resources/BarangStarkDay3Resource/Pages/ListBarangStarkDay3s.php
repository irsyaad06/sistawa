<?php

namespace App\Filament\Resources\BarangStarkDay3Resource\Pages;

use App\Filament\Resources\BarangStarkDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangStarkDay3s extends ListRecords
{
    protected static string $resource = BarangStarkDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
