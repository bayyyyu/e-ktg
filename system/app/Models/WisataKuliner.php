<?php

namespace App\Models;


use App\Models\Traits\Attributes\WisataKulinerAttributes;
use Illuminate\Database\Eloquent\Model;

class WisataKuliner extends Model
{

    use WisataKulinerAttributes;
    protected $table = 'wisata_kuliner';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
