<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@nexus-peruvian.com';
        $user->password = \Hash::make('secret');
        $user->save();

        $faker = Factory::create();
        for($i = 0; $i < 5; $i++) {
        	$user = new User;
        	$user->name = $faker->name;
        	$user->email = $faker->email;
        	$user->password = \Hash::make('secret');
        	$user->save();
        }
    }
}
