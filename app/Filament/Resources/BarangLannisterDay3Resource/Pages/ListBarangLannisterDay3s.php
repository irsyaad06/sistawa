<?php

namespace App\Filament\Resources\BarangLannisterDay3Resource\Pages;

use App\Filament\Resources\BarangLannisterDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangLannisterDay3s extends ListRecords
{
    protected static string $resource = BarangLannisterDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
