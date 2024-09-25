<?php

namespace App\Filament\Resources\BarangBrackenDay3Resource\Pages;

use App\Filament\Resources\BarangBrackenDay3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangBrackenDay3 extends EditRecord
{
    protected static string $resource = BarangBrackenDay3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
