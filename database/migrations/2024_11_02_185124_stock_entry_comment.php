<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StockEntryComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_entry_comment', function (Blueprint $table) {
            $table->id();
            $table->text('quantity')->nullable();
            $table->text('purchase_cost')->nullable();
            $table->text('reason_for_purchase')->nullable();
            $table->foreignId('product_registration_models_id')->constrained('product_registration')->onDelete('cascade'); // Correct table name
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
