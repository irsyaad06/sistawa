<?php

namespace App\Filament\Resources\StarkResource\Pages;

use App\Filament\Resources\StarkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStarks extends ListRecords
{
    protected static string $resource = StarkResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
