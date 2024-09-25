<?php

namespace App\Filament\Resources\BarangBrackenDay1Resource\Pages;

use App\Filament\Resources\BarangBrackenDay1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangBrackenDay1 extends EditRecord
{
    protected static string $resource = BarangBrackenDay1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
