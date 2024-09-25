<?php

namespace App\Filament\Resources\BarangMartellDay2Resource\Pages;

use App\Filament\Resources\BarangMartellDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangMartellDay2s extends ListRecords
{
    protected static string $resource = BarangMartellDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
