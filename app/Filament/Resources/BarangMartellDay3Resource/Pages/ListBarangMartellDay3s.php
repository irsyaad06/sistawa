<?php

namespace App\Filament\Resources\BarangMartellDay3Resource\Pages;

use App\Filament\Resources\BarangMartellDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangMartellDay3s extends ListRecords
{
    protected static string $resource = BarangMartellDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
