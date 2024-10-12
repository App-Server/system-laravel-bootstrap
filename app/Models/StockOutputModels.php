<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOutputModels extends Model
{
    use HasFactory;

    protected $table = 'stock_output_table';

    protected $fillable = [
        'person',
        'product_name',
        'quantity',
        'observations',
    ];
}
