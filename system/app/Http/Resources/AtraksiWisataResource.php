<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AtraksiWisataResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Nama' => $this->nama,
            'Foto' => $this->foto,
            
        ];
    }
}