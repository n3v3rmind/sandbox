<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaybillItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waybill_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('waybill_id');
            $table->integer('product_category_id');
            $table->text('description');
            $table->integer('quantity');
            $table->string('item');
            $table->decimal('price', 10, 2);
            $table->decimal('subtotal', 10, 2);
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
        Schema::drop('waybill_items');
    }
}
