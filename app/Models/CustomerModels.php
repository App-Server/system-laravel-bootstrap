<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModels extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $fillable = [
        'name',
        'email',
        'taxpayer_identification_number',
        'address' ,
        'postal',
        'phone_number',
    ];
}
