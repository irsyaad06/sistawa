<?php

namespace App\Filament\Resources\BarangTargaryenDay2Resource\Pages;

use App\Filament\Resources\BarangTargaryenDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangTargaryenDay2 extends EditRecord
{
    protected static string $resource = BarangTargaryenDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
