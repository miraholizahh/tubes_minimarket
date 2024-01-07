<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = User::insert([
            [
                'name' => 'Jayusman',
                'email' => 'jayusman@gmail.com',
                'password' => bcrypt('jayus123'),
                'level' => 1
            ],
            [
                'name' => 'Kasir 1',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('kasir123'),
                'level' => 5
            ],
            [
                'name' => 'Manager 1',
                'email' => 'manager1@gmail.com',
                'password' => bcrypt('manager123'),
                'level' => 2
            ],
            [
                'name' => 'Supervisor 1',
                'email' => 'supervisor1@gmail.com',
                'password' => bcrypt('supervisor123'),
                'level' => 3
            ],
            [
                'name' => 'gudang1',
                'email' => 'gudang1@gmail.com',
                'password' => bcrypt('gudang123'),
                'level' => 4
            ],
        ]);

    }
}
