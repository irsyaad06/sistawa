<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StarkResource\Pages;
use App\Filament\Resources\StarkResource\RelationManagers;
use App\Models\DataMahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StarkResource extends Resource
{
    protected static ?string $model = DataMahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static ?string $pluralModelLabel = 'Stark - Absensi';

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
            ->columns(components: [
                TextColumn::make('index')
                ->label('No')
                ->rowIndex(),
                TextColumn::make('nim')->searchable(),
                TextColumn::make('nama')->searchable(),
                CheckboxColumn::make('day_1'),
                CheckboxColumn::make('day_2'),
                CheckboxColumn::make('day_3')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStarks::route('/'),
            'create' => Pages\CreateStark::route('/create'),
            'edit' => Pages\EditStark::route('/{record}/edit'),
        ];
    }
}
