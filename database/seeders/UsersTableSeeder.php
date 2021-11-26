<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
       	'first_name' => 'super',
       	'last_name' => 'admin',
       	'email' => 'super@store.com',
       	'password' => bcrypt('123123123'),
       	'first_name' => 'super',
       ]);
       $user->attachRole('super_admin');
    }
}
