<?php

namespace App\Models;

use App\Models\Traits\Attributes\WisataAttributes;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{

    use WisataAttributes;
    protected $table = 'wisata';

    function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }

}
