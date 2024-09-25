<?php

namespace App\Filament\Resources\BarangTyrellDay1Resource\Pages;

use App\Filament\Resources\BarangTyrellDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangTyrellDay1 extends EditRecord
{
    protected static string $resource = BarangTyrellDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
