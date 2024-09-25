<?php

namespace App\Filament\Resources\BarangDothrakiDay3Resource\Pages;

use App\Filament\Resources\BarangDothrakiDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangDothrakiDay3 extends EditRecord
{
    protected static string $resource = BarangDothrakiDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
