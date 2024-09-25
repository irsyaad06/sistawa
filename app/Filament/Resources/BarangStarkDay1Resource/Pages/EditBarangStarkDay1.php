<?php

namespace App\Filament\Resources\BarangStarkDay1Resource\Pages;

use App\Filament\Resources\BarangStarkDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangStarkDay1 extends EditRecord
{
    protected static string $resource = BarangStarkDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
