<?php

namespace App\Filament\Resources\MarkdownBugResource\Pages;

use App\Filament\Resources\MarkdownBugResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMarkdownBugs extends ListRecords
{
    protected static string $resource = MarkdownBugResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
