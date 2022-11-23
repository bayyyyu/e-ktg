<?php

namespace App\Models;

use App\Models\Traits\Attributes\KalenderWisataAttributes;
use Illuminate\Database\Eloquent\Model;

class KalenderWisata extends Model
{

    use KalenderWisataAttributes;
    protected $table = 'kalender_wisata';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
