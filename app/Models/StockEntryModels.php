<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockEntryModels extends Model
{
    use HasFactory;

    protected $table = 'stock_entry';

    protected $fillable = [
        'product_name',
        'quantity',
        'product_cost',
    ];

    public function product()
    {
        return $this->belongsTo(RegisterProductModels::class, 'sku', 'sku');
    }
}
