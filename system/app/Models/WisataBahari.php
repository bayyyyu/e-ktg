<?php

namespace App\Models;

use App\Models\Traits\Attributes\WisataBahariAttributes;
use Illuminate\Database\Eloquent\Model;

class WisataBahari extends Model
{

    use WisataBahariAttributes;
    protected $table = 'wisata_bahari';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
