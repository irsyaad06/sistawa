<?php

namespace App\Filament\Resources\BarangFreyDay2Resource\Pages;

use App\Filament\Resources\BarangFreyDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangFreyDay2s extends ListRecords
{
    protected static string $resource = BarangFreyDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
