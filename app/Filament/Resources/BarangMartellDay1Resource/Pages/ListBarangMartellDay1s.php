<?php

namespace App\Filament\Resources\BarangMartellDay1Resource\Pages;

use App\Filament\Resources\BarangMartellDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangMartellDay1s extends ListRecords
{
    protected static string $resource = BarangMartellDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
