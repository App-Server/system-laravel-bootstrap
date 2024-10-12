<?php

namespace App\Models;

use App\Http\Controllers\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
