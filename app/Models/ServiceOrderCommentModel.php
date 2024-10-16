<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderCommentModel extends Model
{
    use HasFactory;

    // Explicitly define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'service_order_comments'; // Change this to your actual table name

    protected $fillable = [
        'body',
        'status',
    ];

    // Define the inverse relationship with ServiceOrderModels
    public function order()
    {
        return $this->belongsTo(ServiceOrderModels::class);
    }
}
