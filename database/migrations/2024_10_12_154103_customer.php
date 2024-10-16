<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('customer', function (Blueprint $customerTable) {
        //     $customerTable->id();
        //     $customerTable->string('customer')->nullable();
        //     $customerTable->string('email')->nullable();
        //     $customerTable->string('taxpayer_identification_number')->nullable();
        //     $customerTable->string('address')->nullable();
        //     $customerTable->string('postal')->nullable();
        //     $customerTable->string('phone_number')->nullable();
        //     $customerTable->timestamps();
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
