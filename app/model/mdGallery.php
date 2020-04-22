<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class mdGallery extends Model
{
    protected $table        = "gallery";
    protected $primaryKey   = "gallery_id";


    protected $appends = [
        'Folder',
    ];

    function getFolderAttribute() {
        $crypt = date("Ymd", strtotime($this->tanggal));
        return $crypt;
    }

    function detail(){
        return $this->hasMany(mdGalleryDetail::class, "gallery_id");
    }

}
