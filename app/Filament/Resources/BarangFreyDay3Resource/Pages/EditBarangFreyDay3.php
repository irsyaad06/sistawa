<?php

namespace App\Filament\Resources\BarangFreyDay3Resource\Pages;

use App\Filament\Resources\BarangFreyDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangFreyDay3 extends EditRecord
{
    protected static string $resource = BarangFreyDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
