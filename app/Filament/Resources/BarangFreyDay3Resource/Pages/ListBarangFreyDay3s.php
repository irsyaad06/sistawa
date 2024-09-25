<?php

namespace App\Filament\Resources\BarangFreyDay3Resource\Pages;

use App\Filament\Resources\BarangFreyDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangFreyDay3s extends ListRecords
{
    protected static string $resource = BarangFreyDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
