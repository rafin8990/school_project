<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate([
            'name' => "Rafin Hossain",
            'email' => 'admin@gmail.com',
            'phone_number' => '01984419614',
            'role' => 'super_admin',
            'school_code' => '100',
            'password' => Hash::make('password')
        ]);
    }
}
