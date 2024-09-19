<?php

namespace App\Filament\Resources\BrackenResource\Pages;

use App\Filament\Resources\BrackenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrackens extends ListRecords
{
    protected static string $resource = BrackenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
