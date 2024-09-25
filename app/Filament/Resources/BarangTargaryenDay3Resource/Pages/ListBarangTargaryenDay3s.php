<?php

namespace App\Filament\Resources\BarangTargaryenDay3Resource\Pages;

use App\Filament\Resources\BarangTargaryenDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangTargaryenDay3s extends ListRecords
{
    protected static string $resource = BarangTargaryenDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
