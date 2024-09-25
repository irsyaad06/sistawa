<?php

namespace App\Filament\Resources\BarangFreyDay1Resource\Pages;

use App\Filament\Resources\BarangFreyDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangFreyDay1s extends ListRecords
{
    protected static string $resource = BarangFreyDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
