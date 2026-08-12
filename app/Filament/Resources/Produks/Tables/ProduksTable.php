<?php

namespace App\Filament\Resources\Produks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProduksTable
{
    public static function configure(Table $table): Table
    {
    return $table
        ->columns([
    ImageColumn::make('gambar_utama')
        ->label('Gambar')
        ->square(),

    TextColumn::make('nama_produk')
        ->label('Nama Produk')
        ->searchable()
        ->sortable(),

    TextColumn::make('created_at')
        ->label('Dibuat')
        ->date('d M Y')
        ->sortable(),

    TextColumn::make('updated_at')
        ->label('Diubah')
        ->date('d M Y')
        ->sortable(),
    ])
        ->filters([
            //
        ])
        ->recordActions([
        EditAction::make(),
            DeleteAction::make(),
        ])
        ->toolbarActions([
            BulkActionGroup::make([
            DeleteBulkAction::make(),
            ]),
        ]);
    }
}
