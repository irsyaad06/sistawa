<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LannisterResource\Pages;
use App\Filament\Resources\LannisterResource\RelationManagers;
use App\Models\DataMahasiswa;
use App\Models\Lannister;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LannisterResource extends Resource
{
    protected static ?string $model = DataMahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Absensi Mahasiswa';
    public static ?string $pluralModelLabel = 'Absensi - Lannister';

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
                TextColumn::make('index')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('nim')->searchable()->sortable(),
                TextColumn::make('nama')->searchable(),
                CheckboxColumn::make('day_1'),
                CheckboxColumn::make('day_2'),
                CheckboxColumn::make('day_3')
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
            'index' => Pages\ListLannisters::route('/'),
            'create' => Pages\CreateLannister::route('/create'),
            'edit' => Pages\EditLannister::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Lannister');
    }
}
