<?php

namespace App\Filament\Resources\BaratheonResource\Pages;

use App\Filament\Resources\BaratheonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaratheons extends ListRecords
{
    protected static string $resource = BaratheonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
