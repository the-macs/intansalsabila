<?php

namespace App\Filament\Resources\PackageUmrahResource\Pages;

use App\Filament\Resources\PackageUmrahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackageUmrah extends EditRecord
{
    protected static string $resource = PackageUmrahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
