<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Investment;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investments = [
            ['name' => 'SBN Ritel', 'type' => 'Government Bond', 'current_return_rate' => 6.5],
            ['name' => 'RDPU Bareksa', 'type' => 'Mutual Fund', 'current_return_rate' => 4.2],
            ['name' => 'BBCA Stock', 'type' => 'Equity', 'current_return_rate' => 8.5],
        ];
        
        foreach ($investments as $inv) {
            Investment::create($inv);
        }
    }
}
