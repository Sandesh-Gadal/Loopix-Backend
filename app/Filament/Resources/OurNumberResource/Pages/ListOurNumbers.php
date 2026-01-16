<?php

namespace App\Filament\Resources\OurNumberResource\Pages;

use App\Filament\Resources\OurNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurNumbers extends ListRecords
{
    protected static string $resource = OurNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
