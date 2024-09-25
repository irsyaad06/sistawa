<?php

namespace App\Filament\Resources\BarangVelaryonDay2Resource\Pages;

use App\Filament\Resources\BarangVelaryonDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangVelaryonDay2 extends EditRecord
{
    protected static string $resource = BarangVelaryonDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
