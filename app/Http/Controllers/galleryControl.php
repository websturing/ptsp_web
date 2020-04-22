<?php

namespace App\Http\Controllers;

use App\model\mdGallery;
use Illuminate\Http\Request;

class galleryControl extends Controller
{
    function index(Request $r){
        $type = $r->get("type");

        if($type == 'galleryAll'){
            return self::galleryAll($r);
        }
    }

    function galleryAll(Request $r){
        $gallery = mdGallery::with('detail')
                            ->orderBy('tanggal','DESC')->get();

        return $gallery;
    }
}
