<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderModels extends Model
{
    use HasFactory;

    protected $table = 'service_order_table';

    protected $fillable = [
        'service_name',
        'service_cost',
        'observations',
    ];
}
