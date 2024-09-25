<?php

namespace App\Filament\Resources\BarangBaratheonDay2Resource\Pages;

use App\Filament\Resources\BarangBaratheonDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangBaratheonDay2s extends ListRecords
{
    protected static string $resource = BarangBaratheonDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
