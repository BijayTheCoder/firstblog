<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() { 
        User::truncate();
        $users = [ 
         [ 
           'name' => 'Admin',
           'email' => 'admin@gmail.com',
           'password' => '123456',
           'is_admin' => '1',
         ],
         [
            'name' => 'Bijay',
            'email' => 'bijayadhakal579@gmail.com',
            'password' => 'bijay123',
            'is_admin' => '1',
         ],
         [
           'name' => 'User',
           'email' => 'user@gmail.com',
           'password' => '13456',
           'is_admin' => '0',
         ],
          [
           'name' => 'Client',
           'email' => 'client@gmail.com',
           'password' => '13456',
           'is_admin' => '0',
         ] 
       ];

       foreach($users as $user)
       {
           User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password'])
          ]);
        }

 }
}
