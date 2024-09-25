<?php

namespace App\Filament\Resources\BarangTyrellDay3Resource\Pages;

use App\Filament\Resources\BarangTyrellDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangTyrellDay3 extends EditRecord
{
    protected static string $resource = BarangTyrellDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
