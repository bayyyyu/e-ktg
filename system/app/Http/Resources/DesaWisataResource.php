<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesaWisataResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id' => $this->id,
            'Nama' => $this->nama_desa_wisata,
            'Deskripsi' => $this->deskripsi,
            'Link Jadesta' => $this->link_jadesta,
            'Foto 1' => $this->foto_1,
            
        ];
    }
}