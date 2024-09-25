<?php

namespace App\Filament\Resources\BarangLannisterDay3Resource\Pages;

use App\Filament\Resources\BarangLannisterDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangLannisterDay3 extends EditRecord
{
    protected static string $resource = BarangLannisterDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
