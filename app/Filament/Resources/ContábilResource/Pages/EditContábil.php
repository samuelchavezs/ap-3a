<?php

namespace App\Filament\Resources\ContábilResource\Pages;

use App\Filament\Resources\ContábilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContábil extends EditRecord
{
    protected static string $resource = ContábilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
