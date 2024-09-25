<?php

namespace App\Filament\Resources\BarangVelaryonDay1Resource\Pages;

use App\Filament\Resources\BarangVelaryonDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangVelaryonDay1 extends EditRecord
{
    protected static string $resource = BarangVelaryonDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
