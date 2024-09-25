<?php

namespace App\Filament\Resources\BarangStarkDay2Resource\Pages;

use App\Filament\Resources\BarangStarkDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangStarkDay2 extends EditRecord
{
    protected static string $resource = BarangStarkDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
