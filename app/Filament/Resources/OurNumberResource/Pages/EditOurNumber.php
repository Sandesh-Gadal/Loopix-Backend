<?php

namespace App\Filament\Resources\OurNumberResource\Pages;

use App\Filament\Resources\OurNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurNumber extends EditRecord
{
    protected static string $resource = OurNumberResource::class;

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
