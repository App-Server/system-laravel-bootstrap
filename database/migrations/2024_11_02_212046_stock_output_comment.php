<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StockOutputComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_output_comment', function (Blueprint $table) {
            $table->id();
            $table->text('person')->nullable();
            $table->text('quatinty')->nullable();
            $table->text('reason_of_exit')->nullable();
            $table->foreignId('product_registration_id')->constrained('product_registration')->onDelete('cascade'); // Correct table name
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
        //
    }
}
