<?php

namespace App\Filament\Resources\BarangDothrakiDay3Resource\Pages;

use App\Filament\Resources\BarangDothrakiDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangDothrakiDay3s extends ListRecords
{
    protected static string $resource = BarangDothrakiDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
