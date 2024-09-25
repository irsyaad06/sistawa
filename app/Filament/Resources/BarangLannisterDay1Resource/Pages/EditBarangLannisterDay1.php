<?php

namespace App\Filament\Resources\BarangLannisterDay1Resource\Pages;

use App\Filament\Resources\BarangLannisterDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangLannisterDay1 extends EditRecord
{
    protected static string $resource = BarangLannisterDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
