<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StockEntry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('stock_entry_table', function (Blueprint $stockentrytable) {
        //     $stockentrytable->id();
        //     $stockentrytable->string('product_name')->nullable();
        //     $stockentrytable->string('quantity')->nullable();
        //     $stockentrytable->string('product_cost')->nullable();
        //     $stockentrytable->string('observations')->nullable();
        //     $stockentrytable->timestamps();
        // });
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
