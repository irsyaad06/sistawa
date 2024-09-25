<?php

namespace App\Filament\Resources\BarangBaratheonDay2Resource\Pages;

use App\Filament\Resources\BarangBaratheonDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangBaratheonDay2 extends EditRecord
{
    protected static string $resource = BarangBaratheonDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
