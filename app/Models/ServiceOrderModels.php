<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ServiceOrderModels extends Model
{
    use HasFactory;

    protected $table = 'service_order';

    protected $fillable = [
        'customer',
        'service',
        'price',
        'date',
        'time',
        'observations',
    ];

    public function comments()
    {
        return $this->hasMany(ServiceOrderCommentModel::class);
    }    
}
