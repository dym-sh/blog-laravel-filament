<?php

namespace App\Filament\Resources\TextWigetResource\Pages;

use App\Filament\Resources\TextWigetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextWiget extends EditRecord
{
    protected static string $resource = TextWigetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
