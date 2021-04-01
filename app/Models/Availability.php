<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'date_from' => 'datetime',
        'date_to' => 'datetime',
    ];

    protected $fillable = ['date_from', 'date_to', 'available'];

    protected $attributes = [
        'available' => true,
    ];
}
