<?php

namespace App\Filament\Resources\BarangBrackenDay2Resource\Pages;

use App\Filament\Resources\BarangBrackenDay2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangBrackenDay2 extends EditRecord
{
    protected static string $resource = BarangBrackenDay2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
