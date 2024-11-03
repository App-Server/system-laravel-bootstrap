<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRegistrationModels extends Model
{
    use HasFactory;

    protected $table = 'service_registration';

    protected $fillable = [
        'service_name',
        'description',
    ];
}
