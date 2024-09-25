<?php

namespace App\Filament\Resources\BarangTargaryenDay1Resource\Pages;

use App\Filament\Resources\BarangTargaryenDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangTargaryenDay1 extends EditRecord
{
    protected static string $resource = BarangTargaryenDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
