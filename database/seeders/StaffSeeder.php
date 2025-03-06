<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::factory()->create([
            'name' => 'Demo Staff',
            'email' => 'demo@manta.website',
            'password' => Hash::make('Ihitro2024!'),
        ]);
    }
}
