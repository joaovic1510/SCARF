<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->double('rental_price', 7, 2);
            $table->double('sale_price', 8, 2);
            $table->enum('size', ['PP', 'P', 'M', 'G', 'GG']);
            $table->string('decote')->nullable();
            $table->string('bordado')->nullable();
            $table->string('color')->nullable();
            $table->string('comprimento')->nullable();
            $table->string('extras')->nullable();
            $table->string('modelo')->nullable();
            $table->string('manga')->nullable();
            $table->string('tecido')->nullable();
            $table->boolean('available');
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
        Schema::dropIfExists('products');
    }
}
