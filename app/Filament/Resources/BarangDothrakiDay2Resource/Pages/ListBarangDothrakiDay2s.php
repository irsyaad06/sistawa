<?php

namespace App\Filament\Resources\BarangDothrakiDay2Resource\Pages;

use App\Filament\Resources\BarangDothrakiDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangDothrakiDay2s extends ListRecords
{
    protected static string $resource = BarangDothrakiDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
