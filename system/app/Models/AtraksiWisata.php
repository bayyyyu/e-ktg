<?php

namespace App\Models;

use App\Models\Traits\Attributes\AtraksiWisataAttributes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;


class AtraksiWisata extends Model
{

    use AtraksiWisataAttributes;
    protected $table = 'atraksi_wisata';


}
