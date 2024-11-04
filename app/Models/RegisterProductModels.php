<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StockEntryComment;
use App\Models\StockOutputComment;

class RegisterProductModels extends Model
{
    use HasFactory;

    protected $table = 'product_registration';

    protected $fillable = [
        'product_name',
        'description',
    ];

    public function comments()
    {
        return $this->hasMany(ProductStockModel::class, 'product_registration_model_id');
    }

    

}
