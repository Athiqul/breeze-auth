<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users=collect([
            [
                'name'=>'Athiqul Hasan',
               'username'=>'Athiq007',
               'password'=>Hash::make('password'),
               'contact_number'=>'01632241032',
               'address'=>'Uttara,Dhaka',
               'email'=>'athiqulhasan.4@gmail.com',
               'role'=>'admin',

            ],

            [
                'name'=>'Momin Hasan',
               'username'=>'Momin007',
               'password'=>Hash::make('password'),
               'contact_number'=>'01632241031',
               'address'=>'Uttara,Dhaka',
               'email'=>'mominhasan.4@gmail.com',
               'role'=>'vendor',

            ],

            [
                'name'=>'Testing',
               'username'=>'Test',
               'password'=>Hash::make('password'),
               'contact_number'=>'01632241033',
               'address'=>'Uttara,Dhaka',
               'email'=>'momingpay@gmail.com',
               'role'=>'user',

            ],
        ]);

        $users->each(function($item){
            User::create($item);
        }) ;
    }
}
