<?php

namespace App\Filament\Resources\BarangLannisterDay2Resource\Pages;

use App\Filament\Resources\BarangLannisterDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangLannisterDay2s extends ListRecords
{
    protected static string $resource = BarangLannisterDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
