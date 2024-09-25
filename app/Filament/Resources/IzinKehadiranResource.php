<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IzinKehadiranResource\Pages;
use App\Filament\Resources\IzinKehadiranResource\RelationManagers;
use App\Models\DataMahasiswa;
use App\Models\IzinKehadiran;
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

class IzinKehadiranResource extends Resource
{
    protected static ?string $model = IzinKehadiran::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $pluralModelLabel = 'Izin Kehadiran Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Diri')
                    ->schema([
                        DatePicker::make('tanggal')
                            ->label('Tanggal')
                            ->native(false),
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
                        Select::make('keterangan')
                            ->options([
                                'Izin' => 'Izin',
                                'Sakit' => 'Sakit'
                            ]),
                        Section::make('Surat izin')
                            ->description('Wajib Melampirkan Surat!!!')
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
                            ])
                    ])
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')
                    ->rowIndex(),
                TextColumn::make('tanggal'),
                TextColumn::make('dataMahasiswa.nama')->label('Nama Mahasiswa'),
                TextColumn::make('keterangan'),
                ImageColumn::make('foto')
                    ->label('Bukti Surat Izin')
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
            'index' => Pages\ListIzinKehadirans::route('/'),
            'create' => Pages\CreateIzinKehadiran::route('/create'),
            'edit' => Pages\EditIzinKehadiran::route('/{record}/edit'),
        ];
    }
}
