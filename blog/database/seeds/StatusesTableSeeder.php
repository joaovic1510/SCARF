<?php

use Illuminate\Database\Seeder;
use App\Models\status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      status::create([
        'id'            => '19',
        'description'   => 'teste',
      ]);
    }
}
