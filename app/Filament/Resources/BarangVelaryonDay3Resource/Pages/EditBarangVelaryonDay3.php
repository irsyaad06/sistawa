<?php

namespace App\Filament\Resources\BarangVelaryonDay3Resource\Pages;

use App\Filament\Resources\BarangVelaryonDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangVelaryonDay3 extends EditRecord
{
    protected static string $resource = BarangVelaryonDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
