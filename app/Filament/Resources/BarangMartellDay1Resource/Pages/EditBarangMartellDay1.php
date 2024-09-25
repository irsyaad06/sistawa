<?php

namespace App\Filament\Resources\BarangMartellDay1Resource\Pages;

use App\Filament\Resources\BarangMartellDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangMartellDay1 extends EditRecord
{
    protected static string $resource = BarangMartellDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
