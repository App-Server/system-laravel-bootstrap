<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModels extends Model
{
    use HasFactory;

    protected $table = 'customer_table';

    protected $fillable = [
        'customer',
        'email',
        'type_of_person',
        'address' ,
        'cnpj',
        'cpf',
        'cep' ,
        'telephone',
    ];
}
