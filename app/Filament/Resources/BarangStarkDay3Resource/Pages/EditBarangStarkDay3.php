<?php

namespace App\Filament\Resources\BarangStarkDay3Resource\Pages;

use App\Filament\Resources\BarangStarkDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangStarkDay3 extends EditRecord
{
    protected static string $resource = BarangStarkDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
