<?php

namespace App\Filament\Resources\BarangMartellDay2Resource\Pages;

use App\Filament\Resources\BarangMartellDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangMartellDay2 extends EditRecord
{
    protected static string $resource = BarangMartellDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
