<?php

namespace App\Filament\Resources\Produks\Schemas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;

class ProdukForm
{
    public static function configure(Schema $schema): Schema
{
    return $schema
        ->components([

                    TextInput::make('nama_produk')
                        ->label('Nama Produk')
                        ->required()
                        ->maxLength(255),

                    Textarea::make('deskripsi')
                        ->label('Deskripsi')
                        ->rows(5)
                        ->required(),

                    FileUpload::make('gambar_utama')
                        ->label('Gambar Utama')
                        ->image()
                        ->disk('public')
                        ->directory('produk')   
                        ->required(),

                    FileUpload::make('galeri')
                        ->label('Galeri Produk')
                        ->multiple()
                        ->image()
                        ->disk('public')
                        ->directory('produk/galeri')
                        ->reorderable()
                        ->nullable(),

                    RichEditor::make('penggunaan')
                        ->label('Penggunaan')
                        ->toolbarButtons([
                            'attachFiles',
                            'bold',
                            'italic',
                            'underline',
                            'bulletList',
                            'orderedList',
                            'h2',
                            'h3',
                            'link',
                            'undo',
                            'redo',
                        ])
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('produk')
                        ->columnSpanFull(),
                    Repeater::make('spesifikasi')
                        ->label('Spesifikasi Produk')
                        ->schema([
                            TextInput::make('ukuran')
                                ->label('Ukuran')
                                ->placeholder('Contoh: 1220 x 2440 mm')
                                ->required(),

                            TextInput::make('berat')
                                ->label('Berat')
                                ->placeholder('Contoh: 18 kg')
                                ->required(),

                            TextInput::make('tebal')
                                ->label('Tebal')
                                ->placeholder('Contoh: 12 mm')
                                ->required(),
                        ])
                        ->columns(3)
                        ->addActionLabel('Tambah Spesifikasi')
                        ->collapsible()
                        ->columnSpanFull(),
        ]);
}
}
