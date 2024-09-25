<?php

namespace App\Filament\Resources\BarangFreyDay1Resource\Pages;

use App\Filament\Resources\BarangFreyDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangFreyDay1 extends EditRecord
{
    protected static string $resource = BarangFreyDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
