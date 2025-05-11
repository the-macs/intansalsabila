<?php

namespace App\Filament\Resources\BannerResource\Pages;

use Illuminate\Support\Str;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BannerResource;

class EditBanner extends EditRecord
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // 
        ];
    }

    public function getTitle(): string
    {
        $data = $this->data;
        $slug = $data['slug'];
        $slug  = Str::of($slug)->replace('-', ' ')->title();

        return 'Edit Banner - ' . $slug;
    }
}
