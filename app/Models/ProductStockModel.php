<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStockModel extends Model
{
    use HasFactory;

    protected $table = 'product_stock';

    protected $fillable = [
        'quantity_entry',
        'purchase_cost_entry',
        'reason_for_purchase_entry',
        //---------------------------
        'person_output',
        'quantity_output',
        'reason_of_exit_output',
    ];

    public function productregistration()
    {
        return $this->belongsTo(RegisterProductModels::class, 'product_registration_model_id');
    }
}
