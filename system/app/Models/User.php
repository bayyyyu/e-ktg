<?php

namespace App\Models;

use App\Models\Traits\Attributes\UserAttributes;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\DesaWisata;

class User extends Authenticatable
{
    use UserAttributes;
    protected $table = 'admin';
    use HasApiTokens, HasFactory, Notifiable;

    function desawisata()
    {
        return $this->hasMany(DesaWisata::class, 'id_user');
    }

}
