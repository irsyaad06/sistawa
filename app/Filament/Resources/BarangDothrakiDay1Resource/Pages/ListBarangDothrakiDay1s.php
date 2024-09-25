<?php

namespace App\Filament\Resources\BarangDothrakiDay1Resource\Pages;

use App\Filament\Resources\BarangDothrakiDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangDothrakiDay1s extends ListRecords
{
    protected static string $resource = BarangDothrakiDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
