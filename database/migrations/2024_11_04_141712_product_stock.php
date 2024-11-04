<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stock', function (Blueprint $table) {
            $table->id();
            $table->text('quantity_entry')->nullable();
            $table->text('purchase_cost_entry')->nullable();
            $table->text('reason_for_purchase_entry')->nullable();
            $table->foreignId('product_registration_model_id')->constrained('product_registration')->onDelete('cascade');
            $table->text('person_output')->nullable();
            $table->text('quantity_output')->nullable();
            $table->text('reason_of_exit_output')->nullable();
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
