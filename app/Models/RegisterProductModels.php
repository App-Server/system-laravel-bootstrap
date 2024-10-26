<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterProductModels extends Model
{
    use HasFactory;

    protected $table = 'product_registration';

    protected $fillable = [
        'product_name',
        'sku',
        'description',
    ];

    public function stockEntries()
    {
        return $this->hasMany(StockEntryModels::class, 'sku');
    }

    public function stockOutputs()
    {
        return $this->hasMany(StockOutputModels::class, 'sku');
    }
}
