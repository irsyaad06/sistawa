<?php

namespace App\Filament\Resources\BarangBrackenDay1Resource\Pages;

use App\Filament\Resources\BarangBrackenDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangBrackenDay1s extends ListRecords
{
    protected static string $resource = BarangBrackenDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
