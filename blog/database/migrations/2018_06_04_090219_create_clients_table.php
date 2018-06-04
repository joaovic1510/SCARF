<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('address');
          $table->integer('number_address');
          $table->string('bairro_address');
          $table->string('city_address');
          $table->string('RG', 10);
          $table->string('CPF', 11);
          $table->date('born_date');
          $table->string('work_local')->nullable();
          $table->string('spouse')->nullable();
          $table->string('email')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
