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
        return $this->hasMany(StockEntryComment::class, 'product_registration_models_id');
    }

    public function output()
    {
        return $this->hasMany(StockOutputComment::class, 'product_registration_id');
    }

}
