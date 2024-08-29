<?php

namespace App\Filament\Resources\TextWigetResource\Pages;

use App\Filament\Resources\TextWigetResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTextWiget extends CreateRecord
{
    protected static string $resource = TextWigetResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
