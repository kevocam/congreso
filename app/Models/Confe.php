<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'photo',            
        'facebook',
        'twitter',
        'linkedin'


    ];

    
}
