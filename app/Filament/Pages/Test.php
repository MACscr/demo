<?php

namespace App\Filament\Pages;

use App\Http\Livewire\Traits\InlineHelp;
use Filament\Pages\Page;

class Test extends Page
{
    use InlineHelp;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test';
}
