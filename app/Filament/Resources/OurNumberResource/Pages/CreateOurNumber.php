<?php

namespace App\Filament\Resources\OurNumberResource\Pages;

use App\Filament\Resources\OurNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOurNumber extends CreateRecord
{
    protected static string $resource = OurNumberResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
