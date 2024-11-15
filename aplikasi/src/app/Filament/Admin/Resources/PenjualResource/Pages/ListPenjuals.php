<?php

namespace App\Filament\Admin\Resources\PenjualResource\Pages;

use App\Filament\Admin\Resources\PenjualResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenjuals extends ListRecords
{
    protected static string $resource = PenjualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
