<?php

namespace App\Filament\Resources\TextWigetResource\Pages;

use App\Filament\Resources\TextWigetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextWigets extends ListRecords
{
    protected static string $resource = TextWigetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
