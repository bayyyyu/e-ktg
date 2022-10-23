<?php

namespace App\Models;

use App\Models\Traits\Attributes\AtraksiWisataAttributes;
use Illuminate\Database\Eloquent\Model;

class AtraksiWisata extends Model
{

    use AtraksiWisataAttributes;
    protected $table = 'atraksi_wisata';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
