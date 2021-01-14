<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_name', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('platform',25);
            $table->string('p_name',30);
            $table->integer('price')->unsigned();
            $table->integer('company')->unsigned();
            $table->foreign('company')
                ->references('id')->on('company')
                ->onDelete('cascade');
            $table->integer('inventory')->unsigned();
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
        Schema::dropIfExists('product_name');
    }
}
