<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('customer_table', function (Blueprint $customerTable) {
        //     $customerTable->id();
        //     $customerTable->string('customer')->nullable();
        //     $customerTable->string('email')->nullable();
        //     $customerTable->string('type_of_person')->nullable();
        //     $customerTable->string('address')->nullable();
        //     $customerTable->string('cnpj')->nullable();
        //     $customerTable->string('cpf')->nullable();
        //     $customerTable->string('cep')->nullable();
        //     $customerTable->string('telephone')->nullable();
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
