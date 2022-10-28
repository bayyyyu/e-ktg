<?php

namespace App\Models;


use App\Models\Traits\Attributes\WisataReligiAttributes;
use Illuminate\Database\Eloquent\Model;

class WisataReligi extends Model
{

    use WisataReligiAttributes;
    protected $table = 'wisata_religi';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
