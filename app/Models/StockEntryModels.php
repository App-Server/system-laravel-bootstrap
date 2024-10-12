<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockEntryModels extends Model
{
    use HasFactory;

    protected $table = 'stock_entry_table';

    protected $fillable = [
        'product_name',
        'quantity',
        'product_cost',
    ];
}
