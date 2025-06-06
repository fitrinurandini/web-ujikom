<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'website_description',
        'website_logo',
        'email',
        'phone',
        'address',
        'maps',
        'facebook',
        'youtube',
        'instagram',
        'twitter',
    ];
}
