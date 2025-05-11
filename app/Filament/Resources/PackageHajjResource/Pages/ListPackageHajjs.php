<?php

namespace App\Filament\Resources\PackageHajjResource\Pages;

use App\Filament\Resources\PackageHajjResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackageHajjs extends ListRecords
{
    protected static string $resource = PackageHajjResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
