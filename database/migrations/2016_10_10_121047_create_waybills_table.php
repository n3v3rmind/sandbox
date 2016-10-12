<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaybillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waybills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dr_number');
            $table->integer('consignee');
            $table->integer('consignor');
            $table->string('payment_terms');
            $table->text('notes');
            $table->string('loading_status');
            $table->string('payment_status');
            $table->integer('is_backload');
            $table->integer('total');
            $table->integer('processed_by');
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
        Schema::drop('waybills');
    }
}
