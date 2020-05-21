<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=User::where('email','rian@gmail.com')->first();

       if(!$user)
       {
           User::create([
               'name'=>'Rian',
               'email'=>'rian@gmail.com',
               'role'=>'admin',
               'about'=>'This is Admin Here',
               'password'=>Hash::make('password')

           ]);
       }
    }
}
