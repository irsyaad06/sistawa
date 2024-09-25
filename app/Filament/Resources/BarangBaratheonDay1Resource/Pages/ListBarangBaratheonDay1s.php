<?php

namespace App\Filament\Resources\BarangBaratheonDay1Resource\Pages;

use App\Filament\Resources\BarangBaratheonDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangBaratheonDay1s extends ListRecords
{
    protected static string $resource = BarangBaratheonDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
