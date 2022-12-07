<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesaWisataResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Nama' => $this->nama_desa_wisata,
            'Deskripsi' => $this->deskripsi,
            'Link Jadesta' => $this->link_jadesta,
            'Foto 1' => $this->foto_1,
            'Foto 2' => $this->foto_2,
            'Foto 3' => $this->foto_3,
            'Foto 4' => $this->foto_4
        ];
    }
}