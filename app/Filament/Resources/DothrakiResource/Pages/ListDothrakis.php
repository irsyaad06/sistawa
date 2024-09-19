<?php

namespace App\Filament\Resources\DothrakiResource\Pages;

use App\Filament\Resources\DothrakiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDothrakis extends ListRecords
{
    protected static string $resource = DothrakiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
