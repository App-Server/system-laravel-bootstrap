<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModels extends Model
{
    use HasFactory;

    protected $table = 'employees_table';

    protected $fillable = [
        'employee_name',
        'salary',
        'admission',
        'cpf',
        'pis_pasep',
        'ctps',
        'date_of_birth',
        'marital_status',
        'place_of_birth',
        'sex',
        'job',
        'sector',

    ];
}
