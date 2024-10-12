<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_registration_table', function (Blueprint $serviceregistration) {
            $serviceregistration->id();
            $serviceregistration->string('service_name')->nullable();
            $serviceregistration->string('description')->nullable();
            $serviceregistration->timestamps();
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
