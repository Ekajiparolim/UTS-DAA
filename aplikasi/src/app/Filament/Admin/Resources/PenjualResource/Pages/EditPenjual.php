<?php

namespace App\Filament\Admin\Resources\PenjualResource\Pages;

use App\Filament\Admin\Resources\PenjualResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenjual extends EditRecord
{
    protected static string $resource = PenjualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
