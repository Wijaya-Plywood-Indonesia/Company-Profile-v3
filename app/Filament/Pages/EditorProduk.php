<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

use Filament\Notifications\Notification;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Assets\Js;


class EditorProduk extends Page
{
    protected string $view = 'filament.pages.editor-produk';

    public string $content = '';

    public function save(): void
    {
        Notification::make()
            ->title('Berhasil')
            ->success()
            ->send();
    }

    public function mount()
{
    FilamentAsset::register([
        Js::make(
            'tiptap',
            resource_path('js/tiptap.js')
        ),
    ]);
}
}
