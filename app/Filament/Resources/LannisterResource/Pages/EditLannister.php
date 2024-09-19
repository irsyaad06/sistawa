<?php

namespace App\Filament\Resources\LannisterResource\Pages;

use App\Filament\Resources\LannisterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLannister extends EditRecord
{
    protected static string $resource = LannisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
