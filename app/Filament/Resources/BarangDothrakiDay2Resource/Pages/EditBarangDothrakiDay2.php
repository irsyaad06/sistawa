<?php

namespace App\Filament\Resources\BarangDothrakiDay2Resource\Pages;

use App\Filament\Resources\BarangDothrakiDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangDothrakiDay2 extends EditRecord
{
    protected static string $resource = BarangDothrakiDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
