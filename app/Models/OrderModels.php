<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModels extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'person',
        'product_name',
        'quantity',
        'delivery_time',
        'priority',
        'observations',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
