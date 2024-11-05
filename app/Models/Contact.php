<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'message',
        'donation_type',
        'location',
        'birthday_date',
        'food_items',
    ];

    protected $casts = [
        'food_items' => 'array', // Automatically cast to an array when retrieved
    ];
}
