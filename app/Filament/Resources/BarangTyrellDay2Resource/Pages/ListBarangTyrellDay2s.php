<?php

namespace App\Filament\Resources\BarangTyrellDay2Resource\Pages;

use App\Filament\Resources\BarangTyrellDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangTyrellDay2s extends ListRecords
{
    protected static string $resource = BarangTyrellDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
