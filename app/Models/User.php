<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Question;
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'name', 'email', 'password','lastName', 'address', 'phone','about', 'description', 'facebook','twitter','linkedin','rateSpanish','rateEnglish','OtherLanguaje','rateOther',

    ];
    public function paths()
    {
        return $this->hasMany(Path::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function publications()
    {
        return $this->hasMany(Publications::class);
    }
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    
}
