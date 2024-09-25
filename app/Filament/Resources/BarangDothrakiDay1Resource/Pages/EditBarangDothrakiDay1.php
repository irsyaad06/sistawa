<?php

namespace App\Filament\Resources\BarangDothrakiDay1Resource\Pages;

use App\Filament\Resources\BarangDothrakiDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangDothrakiDay1 extends EditRecord
{
    protected static string $resource = BarangDothrakiDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
