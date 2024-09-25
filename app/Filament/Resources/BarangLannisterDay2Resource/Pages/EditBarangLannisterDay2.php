<?php

namespace App\Filament\Resources\BarangLannisterDay2Resource\Pages;

use App\Filament\Resources\BarangLannisterDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangLannisterDay2 extends EditRecord
{
    protected static string $resource = BarangLannisterDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
