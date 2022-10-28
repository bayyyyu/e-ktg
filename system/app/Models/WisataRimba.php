<?php

namespace App\Models;


use App\Models\Traits\Attributes\WisataRimbaAttributes;
use Illuminate\Database\Eloquent\Model;

class WisataRimba extends Model
{

    use WisataRimbaAttributes;
    protected $table = 'wisata_rimba';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
