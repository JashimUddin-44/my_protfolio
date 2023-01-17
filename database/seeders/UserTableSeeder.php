<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            
            ['name' => 'Maya','email' => 'maya@gmail.com','password' => Hash::make ('16681314'),'role' => 'admin'],
            

        ];

        User::insert($users);
    }
}
