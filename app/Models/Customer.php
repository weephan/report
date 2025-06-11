<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'customer_name',
        'phone',
        'email',
    ];

    protected $casts = [
        'customer_id' => 'integer',
        'customer_name' => 'string',
        'phone' => 'string',
        'email' => 'string',
    ];
}
