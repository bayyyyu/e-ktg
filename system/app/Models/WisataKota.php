<?php

namespace App\Models;


use App\Models\Traits\Attributes\WisataKotaAttributes;
use Illuminate\Database\Eloquent\Model;

class WisataKota extends Model
{

    use WisataKotaAttributes;
    protected $table = 'wisata_kota';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
