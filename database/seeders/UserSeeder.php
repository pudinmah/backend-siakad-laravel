<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create otomatis
        User::factory(200)->create();

        // create static
        User::create([
            'name'=>'Mahpudin',
            'email'=>'pudinmah4@gmail.com',
            'email_verified_at'=> now(),
            'password'=> Hash::make('12341234'),
            'roles'=> 'admin',
        ]);
    }
}
