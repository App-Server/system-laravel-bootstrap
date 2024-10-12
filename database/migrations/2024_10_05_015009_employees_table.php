<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('employees_table', function (Blueprint $employees_table) {
        //     $employees_table->id();
        //     $employees_table->string('employee_name');
        //     $employees_table->string('salary');
        //     $employees_table->string('admission');
        //     $employees_table->string('pis_pasep');
        //     $employees_table->string('cpf');
        //     $employees_table->string('ctps');
        //     $employees_table->string('date_of_birth');
        //     $employees_table->string('marital_status');
        //     $employees_table->string('place_of_birth');
        //     $employees_table->string('sex');
        //     $employees_table->string('job');
        //     $employees_table->string('sector');
        //     $employees_table->timestamps();
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
