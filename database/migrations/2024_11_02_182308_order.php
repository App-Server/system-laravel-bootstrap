<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $ordertable) {
            $ordertable->id();
            $ordertable->string('person')->nullable();
            $ordertable->string('product_name')->nullable();
            $ordertable->string('quantity')->nullable();
            $ordertable->string('delivery_time')->nullable();
            $ordertable->string('priority')->nullable();
            $ordertable->string('observations')->nullable();
            $ordertable->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
