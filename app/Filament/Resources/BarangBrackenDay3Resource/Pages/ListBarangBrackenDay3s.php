<?php

namespace App\Filament\Resources\BarangBrackenDay3Resource\Pages;

use App\Filament\Resources\BarangBrackenDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangBrackenDay3s extends ListRecords
{
    protected static string $resource = BarangBrackenDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
