<?php

namespace App\Filament\Resources\BarangTyrellDay1Resource\Pages;

use App\Filament\Resources\BarangTyrellDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangTyrellDay1s extends ListRecords
{
    protected static string $resource = BarangTyrellDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
