<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_order_table', function (Blueprint $serviceordertable) {
            $serviceordertable->id();
            $serviceordertable->string('service_name')->nullable();
            $serviceordertable->string('service_cost')->nullable();
            $serviceordertable->string('observations')->nullable();
            $serviceordertable->timestamps();
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
