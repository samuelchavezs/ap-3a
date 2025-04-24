<?php

namespace App\Filament\Resources\FinaceiroResource\Pages;

use App\Filament\Resources\FinaceiroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFinaceiros extends ListRecords
{
    protected static string $resource = FinaceiroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
