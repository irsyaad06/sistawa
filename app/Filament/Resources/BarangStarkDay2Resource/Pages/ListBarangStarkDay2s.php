<?php

namespace App\Filament\Resources\BarangStarkDay2Resource\Pages;

use App\Filament\Resources\BarangStarkDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangStarkDay2s extends ListRecords
{
    protected static string $resource = BarangStarkDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
