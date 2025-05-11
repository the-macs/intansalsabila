<?php

namespace App\Filament\Resources\PackageHajjResource\Pages;

use App\Filament\Resources\PackageHajjResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackageHajj extends EditRecord
{
    protected static string $resource = PackageHajjResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
