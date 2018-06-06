<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'          => 'admin',
          'email'         => 'joaovic1510@gmail.com',
          'password'      => bcrypt('84219200'),
          'permission_id' => '10',
        ]);
    }
}
