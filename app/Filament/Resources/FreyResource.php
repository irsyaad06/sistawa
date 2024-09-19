<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FreyResource\Pages;
use App\Filament\Resources\FreyResource\RelationManagers;
use App\Models\DataMahasiswa;
use App\Models\Frey;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FreyResource extends Resource
{
    protected static ?string $model = Frey::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Absensi - Frey';

    protected static ?string $navigationGroup = 'Absensi Mahasiswa';

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
            'index' => Pages\ListFreys::route('/'),
            'create' => Pages\CreateFrey::route('/create'),
            'edit' => Pages\EditFrey::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Frey');
    }
}
