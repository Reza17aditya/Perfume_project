<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contactus;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contactus::create([
            'first_name' => 'reza',
            'last_name' => 'bukan',
            'email' => 'adityareza523@gmail.com',
            'phone_number' => '0123456789',
            'message' => 'test',
        ]);
    }
}
