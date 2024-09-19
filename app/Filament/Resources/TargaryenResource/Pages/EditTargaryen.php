<?php

namespace App\Filament\Resources\TargaryenResource\Pages;

use App\Filament\Resources\TargaryenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTargaryen extends EditRecord
{
    protected static string $resource = TargaryenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
