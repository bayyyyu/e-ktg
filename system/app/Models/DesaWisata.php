<?php

namespace App\Models;

use App\Models\Traits\Attributes\DesaWisataAttributes;
use Illuminate\Database\Eloquent\Model;

class DesaWisata extends Model
{

    use DesaWisataAttributes;
    protected $table = 'desa_wisata';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
