<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'id_user',
    ];

    public function chats()
    {
        return $this->belongsTo(Chat::class);
    }
}
