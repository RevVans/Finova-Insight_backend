<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Category;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create your Admin account so you can log in later
        User::create([
            'name' => 'Admin Finova', 
            'email' => 'admin@finova.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'kyc_status' => true,
        ]);

        $users = User::factory(10)->create();

        $allCategories = Category::all();

        if ($allCategories->count() > 0) {
            foreach ($users as $user) {
                Transaction::factory(5)->create([
                    'user_id' => $user->id,
                    'category_id' => $allCategories->random()->id,
                ]);
            }
        }
    }
}
