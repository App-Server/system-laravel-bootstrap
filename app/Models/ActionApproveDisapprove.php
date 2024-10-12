<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionApproveDisapprove extends Model
{
    use HasFactory;
    
    protected $table = 'action_approve_disapprove';

    protected $fillable = [
        'status',
        'observation',
        'order_id', // Ensure you have 'order_id' in your fillable array if it's a foreign key
    ];

    
}
