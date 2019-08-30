<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();

        \App\User::create([
            'name' => 'Daniel Do',
            'email' => 'dotiendiep@gmail.com',
            'password' => bcrypt('asecret'),
            'is_admin' => true,
            'remember_token' => str_random(10),
        ]);
    }
}
