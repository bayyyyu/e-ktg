<?php

namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;

trait DesaWisataAttributes
{

    function handleUploadFoto()
    {

        $this->handleDelete();
        if (request()->hasFile('foto_1')) {
            $foto_1 = request()->file('foto_1');
            $destination = "images/desa wisata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto_1->extension();
            $url = $foto_1->storeAs($destination, $filename);
            $this->foto_1 = "app/" . $url;
            $this->save();
        }
        if (request()->hasFile('foto_2')) {
            $foto_2 = request()->file('foto_2');
            $destination = "images/desa wisata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto_2->extension();
            $url = $foto_2->storeAs($destination, $filename);
            $this->foto_2 = "app/" . $url;
            $this->save();
        }
        if (request()->hasFile('foto_3')) {
            $foto_3 = request()->file('foto_3');
            $destination = "images/desa wisata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto_3->extension();
            $url = $foto_3->storeAs($destination, $filename);
            $this->foto_3 = "app/" . $url;
            $this->save();
        }
        if (request()->hasFile('foto_4')) {
            $foto_4 = request()->file('foto_4');
            $destination = "images/desa wisata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto_4->extension();
            $url = $foto_4->storeAs($destination, $filename);
            $this->foto_4 = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto_1 = $this->foto_1;
        if ($foto_1) {
            $path = public_path($foto_1);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $foto_2 = $this->foto_2;
        if ($foto_2) {
            $path = public_path($foto_2);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $foto_3 = $this->foto_3;
        if ($foto_3) {
            $path = public_path($foto_3);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $foto_4 = $this->foto_4;
        if ($foto_4) {
            $path = public_path($foto_4);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        return true;
    }
}
