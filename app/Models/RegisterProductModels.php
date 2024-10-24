<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterProductModels extends Model
{
    use HasFactory;

    protected $table = 'product_registration_table';

    protected $fillable = [
        'product_name',
        'category',
        'subcategory',
        'description',
    ];

    public function stockEntries()
    {
        return $this->hasMany(StockEntryModels::class, 'id');
    }

    public function stockOutputs()
    {
        return $this->hasMany(StockOutputModels::class, 'id');
    }
}
