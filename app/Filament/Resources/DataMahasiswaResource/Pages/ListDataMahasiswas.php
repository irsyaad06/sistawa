<?php

namespace App\Filament\Resources\DataMahasiswaResource\Pages;

use App\Filament\Resources\DataMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataMahasiswas extends ListRecords
{
    protected static string $resource = DataMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
                ->color("primary")
                ->label('Import ')
                ->validateUsing([
                    'nim' => 'required',
                    'nama' => 'required',
                    'kelompok' => 'required',
                ])
                ->slideOver()
                ->uploadField(
                    fn ($upload) => $upload
                    ->label("Masukkan file : xls/csv/xlsx")
                ),
            Actions\CreateAction::make(),
        ];
    }
}
