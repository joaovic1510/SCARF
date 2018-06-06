<?php

use App\Models\permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      permission::create([
        'id'            => '10',
        'description'   => 'root',
      ]);
      permission::create([
        'id'            => '11',
        'description'   => 'administrador',
      ]);
      permission::create([
        'id'            => '12',
        'description'   => 'editor',
      ]);
      permission::create([
        'id'            => '13',
        'description'   => 'operador',
      ]);
      permission::create([
        'id'            => '14',
        'description'   => 'visualizador',
      ]);
    }
}
