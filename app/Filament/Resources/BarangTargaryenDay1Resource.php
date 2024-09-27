<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangTargaryenDay1Resource\Pages;
use App\Filament\Resources\BarangTargaryenDay1Resource\RelationManagers;
use App\Models\BarangTargaryenDay1;
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

class BarangTargaryenDay1Resource extends Resource
{
    protected static ?string $model = BarangTargaryenDay1::class;

    protected static ?string $pluralModelLabel = 'Barang Targaryen Day 1';

    protected static ?string $navigationGroup = 'Barang Bawaan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            ->defaultPaginationPageOption('all')
            ->columns([
                TextColumn::make('index')->label('No')->rowIndex(),
                TextColumn::make('nim')->searchable()->sortable(),
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('kelompok')->searchable(),
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
                // Tables\Actions\EditAction::make(),
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

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangTargaryenDay1s::route('/'),
            'create' => Pages\CreateBarangTargaryenDay1::route('/create'),
            'edit' => Pages\EditBarangTargaryenDay1::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Targaryen');
    }
}
