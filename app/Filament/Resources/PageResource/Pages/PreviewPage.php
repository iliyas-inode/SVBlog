<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\ViewRecord;

class PreviewPage extends ViewRecord
{
    protected static string $resource = PageResource::class;

    protected static string $view = 'filament.resources.page-resource.pages.preview-page';
}
