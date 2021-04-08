<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'dateStart', 'dateEnd', 'city','content','id_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
