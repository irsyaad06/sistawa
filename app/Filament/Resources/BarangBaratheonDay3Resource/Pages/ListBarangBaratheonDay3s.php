<?php

namespace App\Filament\Resources\BarangBaratheonDay3Resource\Pages;

use App\Filament\Resources\BarangBaratheonDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangBaratheonDay3s extends ListRecords
{
    protected static string $resource = BarangBaratheonDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
