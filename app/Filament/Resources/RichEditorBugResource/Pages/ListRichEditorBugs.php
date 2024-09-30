<?php

namespace App\Filament\Resources\RichEditorBugResource\Pages;

use App\Filament\Resources\RichEditorBugResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRichEditorBugs extends ListRecords
{
    protected static string $resource = RichEditorBugResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->slideOver(),
        ];
    }
}
