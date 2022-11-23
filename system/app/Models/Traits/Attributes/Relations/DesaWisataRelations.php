<?php

namespace App\Models\Traits\Relations;

use App\Models\User;

trait DesaWisataRelations
{
    function seller()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
   
    
}
