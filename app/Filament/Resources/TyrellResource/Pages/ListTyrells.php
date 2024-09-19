<?php

namespace App\Filament\Resources\TyrellResource\Pages;

use App\Filament\Resources\TyrellResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTyrells extends ListRecords
{
    protected static string $resource = TyrellResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
