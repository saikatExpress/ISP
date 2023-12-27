<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now      = Carbon::now();
        $password = Hash::make('123456');

        User::insert([
            [
                'id'       => 1,
                'name'     => 'Admin',
                'email'    => 'admin@gmail.com',
                'password' => $password,
                'status'   => '1',
            ],
            [
                'id'       => 2,
                'name'     => 'Re Seller',
                'email'    => 'seller@gmail.com',
                'password' => $password,
                'status'   => '1',
            ],
            [
                'id'       => 3,
                'name'     => 'Customer',
                'email'    => 'customer@gmail.com',
                'password' => $password,
                'status'   => '1',
            ],
        ]);
    }
}
