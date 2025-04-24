<?php

namespace App\Filament\Resources\FinaceiroResource\Pages;

use App\Filament\Resources\FinaceiroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFinaceiro extends EditRecord
{
    protected static string $resource = FinaceiroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
