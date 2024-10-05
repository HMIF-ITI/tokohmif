<?php

namespace App\Filament\Resources\ConsumptionResource\Pages;

use App\Filament\Resources\ConsumptionResource;
use App\Models\Consumption;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateConsumption extends CreateRecord
{
    protected static string $resource = ConsumptionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Ambil ID maksimum dari tabel dan tambahkan 1
        $maxId = Consumption::max('id') ?? 0; // Menggunakan 0 jika tidak ada entri
        $data['id'] = $maxId + 1; // Set ID menjadi maksimum + 1

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
