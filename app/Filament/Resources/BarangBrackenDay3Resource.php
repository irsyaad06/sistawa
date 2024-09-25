<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangBrackenDay3Resource\Pages;
use App\Filament\Resources\BarangBrackenDay3Resource\RelationManagers;
use App\Models\BarangBrackenDay3;
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

class BarangBrackenDay3Resource extends Resource
{
    protected static ?string $model = BarangBrackenDay3::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Barang Bracken Day 3';

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
                CheckboxColumn::make('barang_1_day_3')->label('Permen Hitam Putih')->alignCenter(),
                CheckboxColumn::make('barang_2_day_3')->label('Biskuit Putih Kejepit')->alignCenter(),
                CheckboxColumn::make('barang_3_day_3')->label('nasi Ketombe + Kebebasan')->alignCenter(),
                CheckboxColumn::make('barang_4_day_3')->label('Susu Olahraga')->alignCenter(),
                CheckboxColumn::make('barang_5_day_3')->label('Roti Lumpur')->alignCenter(),
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
            'index' => Pages\ListBarangBrackenDay3s::route('/'),
            'create' => Pages\CreateBarangBrackenDay3::route('/create'),
            'edit' => Pages\EditBarangBrackenDay3::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Bracken');
    }
}
