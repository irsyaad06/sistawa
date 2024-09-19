<?php

namespace App\Filament\Resources\FreyResource\Pages;

use App\Filament\Resources\FreyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFreys extends ListRecords
{
    protected static string $resource = FreyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
