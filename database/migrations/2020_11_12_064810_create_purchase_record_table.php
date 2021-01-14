<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_record', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('b_number');
            $table->date('b_date');
            $table->string('serial_number',40);
            $table->integer('a_id')->unsigned();
            $table->foreign('a_id')
                ->references('id')->on('member')
                ->onDelete('cascade');
            $table->integer('p_id')->unsigned();
            $table->foreign('p_id')
                ->references('id')->on('product_name')
                ->onDelete('cascade');
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
        Schema::dropIfExists('purchase_record');
    }
}
