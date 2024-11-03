<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockEntryComment extends Model
{
    use HasFactory;

    protected $table = 'stock_entry_comment';

    protected $fillable = [
        'quantity',
        'purchase_cost',
        'reason_for_purchase',
    ];

    public function productregistration()
    {
        return $this->belongsTo(RegisterProductModels::class, 'product_registration_models_id');
    }
}
