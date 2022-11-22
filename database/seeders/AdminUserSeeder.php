<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\new_register;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        new_register::create([
            'fname'=>'kallingal',
            'lname' => 'Hardik',
            'email' => 'admin@.com',
            'password' => 123,
        ]);
    }
}
