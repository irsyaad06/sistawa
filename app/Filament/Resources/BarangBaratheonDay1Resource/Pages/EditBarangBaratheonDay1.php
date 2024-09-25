<?php

namespace App\Filament\Resources\BarangBaratheonDay1Resource\Pages;

use App\Filament\Resources\BarangBaratheonDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangBaratheonDay1 extends EditRecord
{
    protected static string $resource = BarangBaratheonDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
