<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Imports\WithChunkReading;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithChunkReading as ConcernsWithChunkReading;

class ProductImport implements ToModel, WithBatchInserts, WithHeadingRow, ConcernsWithChunkReading
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $filteredRow = Arr::only($row, ['name', 'quantity', 'price']);


        return new Product([
            'name' => $filteredRow['name'] ?? 'Default Name', // Valor predeterminado si es null
            'quantity' => $filteredRow['quantity'] ?? 0,
            'price' => $filteredRow['price'] ?? 0.0,
        ]);
    }
    public function batchSize(): int
    {
        return 200;
    }
    public function chunkSize(): int
    {
        return 200;
    }
}
