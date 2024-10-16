<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceOrderComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('service_order_comments', function (Blueprint $table) {
            $table->id();
            $table->text('body')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('service_order_models_id')->constrained('service_order_table')->onDelete('cascade'); // Correct table name
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
