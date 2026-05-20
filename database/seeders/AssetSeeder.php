<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = [
            ['name' => 'Antam Gold 1g', 'type' => 'Precious Metal', 'current_market_value' => 1350000],
            ['name' => 'Honda Vario 160', 'type' => 'Vehicle', 'current_market_value' => 26000000],
            ['name' => 'MacBook Pro M2', 'type' => 'Electronics', 'current_market_value' => 20000000],
        ];
        
        foreach ($assets as $asset) {
            Asset::create($asset);
        }
    }
}
