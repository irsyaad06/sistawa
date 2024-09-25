<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangDothrakiDay1Resource\Pages;
use App\Filament\Resources\BarangDothrakiDay1Resource\RelationManagers;
use App\Models\BarangDothrakiDay1;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BarangDothrakiDay1Resource extends Resource
{
    protected static ?string $model = BarangDothrakiDay1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Barang Dothraki Day 1';

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
                CheckboxColumn::make('barang_1_day_1')->label('Biskuit Argentina Putih')->alignCenter(),
                CheckboxColumn::make('barang_2_day_1')->label('Snack Kerikil')->alignCenter(),
                CheckboxColumn::make('barang_3_day_1')->label('Air Pucat')->alignCenter(),
                CheckboxColumn::make('barang_4_day_1')->label('Nasi Ketombe + Lauk Upin Ipin')->alignCenter(),
                CheckboxColumn::make('barang_5_day_1')->label('Tepung Ngembang')->alignCenter(),
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
            'index' => Pages\ListBarangDothrakiDay1s::route('/'),
            'create' => Pages\CreateBarangDothrakiDay1::route('/create'),
            'edit' => Pages\EditBarangDothrakiDay1::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Dothraki');
    }
}
