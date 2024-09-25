<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangMartellDay2Resource\Pages;
use App\Filament\Resources\BarangMartellDay2Resource\RelationManagers;
use App\Models\BarangMartellDay1;
use App\Models\BarangMartellDay2;
use App\Models\DataMahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BarangMartellDay2Resource extends Resource
{
    protected static ?string $model = BarangMartellDay2::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Barang Martell Day 2';

    protected static ?string $navigationGroup = 'Barang Bawaan';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')->label('No')->rowIndex(),
                TextColumn::make('nim'),
                TextColumn::make('nama'),
                TextColumn::make('kelompok'),
                CheckboxColumn::make('barang_1_day_2')->label('Susu Abe Cekut')->alignCenter(),
                CheckboxColumn::make('barang_2_day_2')->label('Roti Tukul')->alignCenter(),
                CheckboxColumn::make('barang_3_day_2')->label('Makaroni Roni Dua Kelinci')->alignCenter(),
                CheckboxColumn::make('barang_4_day_2')->label('Nasi Betadine + Protein Murah')->alignCenter(),
                CheckboxColumn::make('barang_5_day_2')->label('Coklat Lebih Baik')->alignCenter(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListBarangMartellDay2s::route('/'),
            'create' => Pages\CreateBarangMartellDay2::route('/create'),
            'edit' => Pages\EditBarangMartellDay2::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Martell');
    }
}
