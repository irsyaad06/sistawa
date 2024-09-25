<?php

namespace App\Filament\Resources\BarangLannisterDay1Resource\Pages;

use App\Filament\Resources\BarangLannisterDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangLannisterDay1s extends ListRecords
{
    protected static string $resource = BarangLannisterDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
