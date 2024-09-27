<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangSitaanResource\Pages;
use App\Filament\Resources\BarangSitaanResource\RelationManagers;
use App\Models\BarangSitaan;
use App\Models\DataMahasiswa;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BarangSitaanResource extends Resource
{
    protected static ?string $model = BarangSitaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';

    protected static ?string $pluralModelLabel = 'Barang Sitaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Mahasiswa')
                    ->schema([
                       DatePicker::make('tanggal')->native(false),
                        Select::make('kelompok')
                            ->label('Kelompok')
                            ->options(DataMahasiswa::distinct()->pluck('kelompok', 'kelompok'))
                            ->searchable()
                            ->afterStateUpdated(fn(callable $set) => $set('nim', null)),
                        Select::make('nim')
                            ->label('Nama Mahasiswa')
                            ->options(function (callable $get) {
                                $kelompok = $get('kelompok');
                                return DataMahasiswa::when($kelompok, function ($query) use ($kelompok) {
                                    return $query->where('kelompok', $kelompok);
                                })
                                    ->pluck('nama', 'nim')
                                    ->toArray();
                            })
                            ->searchable(),


                        TextInput::make('barang_sitaan')->label('Barang Sitaan'),
                        Section::make('Bukti Barang Sitaan')
                            ->description('Wajib Melampirkan Bukti!!')
                            ->schema([
                                Fieldset::make('Maximum Ukuran Foto 5 MB !!')
                                    ->schema([
                                        FileUpload::make('foto')
                                            ->label('')
                                            ->image()
                                            ->preserveFilenames()
                                            ->disk('public')
                                            ->openable()
                                            ->previewable()
                                            ->downloadable()
                                            ->columnSpanFull(),
                                    ])
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')
                    ->rowIndex(),
                TextColumn::make('nim')->label('Nim Mahasiswa'),

		TextColumn::make('dataMahasiswa.nama')->label('Nama Mahasiswa'),
		TextColumn::make('dataMahasiswa.kelompok'),

                TextColumn::make('barang_sitaan'),
                ImageColumn::make('foto')
                    ->label('Bukti Pelanggaran')
                    ->disk('public')
                    ->width(120)
                    ->height(70)
                    ->square()
                    ->visibility('private')
                    ->extraImgAttributes(['loading' => 'lazy'])
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangSitaans::route('/'),
            'create' => Pages\CreateBarangSitaan::route('/create'),
            'edit' => Pages\EditBarangSitaan::route('/{record}/edit'),
        ];
    }
}
