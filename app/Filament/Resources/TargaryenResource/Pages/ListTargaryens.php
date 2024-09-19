<?php

namespace App\Filament\Resources\TargaryenResource\Pages;

use App\Filament\Resources\TargaryenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTargaryens extends ListRecords
{
    protected static string $resource = TargaryenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
