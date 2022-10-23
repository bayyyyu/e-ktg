<?php

namespace App\Models;


use App\Models\Traits\Attributes\WisataBudayaAttributes;
use Illuminate\Database\Eloquent\Model;

class WisataBudaya extends Model
{

    use WisataBudayaAttributes;
    protected $table = 'wisata_budaya';

    // protected $casts = [
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
}
