<?php

namespace App\Http\Controllers;

use App\mdInvestasi;
use Illuminate\Http\Request;

class investasiControl extends Controller
{

    function index(Request $r){
        $type = $r->get("type");

        if($type == 'realisasi'){
            return self::realisasi($r);
        }
    }

    function realisasi(Request $r){
        $chartType = $r->get('chartType');
        $pma = mdInvestasi::where("kategori","pma")
                    ->orderBy("tahun","ASC")
                    ->get();
        
        foreach($pma as $p){
            $pmaLabel[] = (float)$p->tahun;
            $pmaSeries[] = (float)$p->investasi;
        }
        $seriesPMA[] = array("values" => $pmaSeries); 
        $pmdn = mdInvestasi::where("kategori","pmdn")
            ->orderBy("tahun","ASC")
            ->get();
        
        foreach($pmdn as $pn){
            $pmdnLabel[] = (float)$pn->tahun;
            $pmdnSeries[] = (float)$pn->investasi;
        }
        $seriesPMDN[] = array("values" => $pmdnSeries); 
        $pmaArray =  array(
                 "title" => array("text" => "Provinsi Kepulauan Riau Tahun 2017 s/d 2019 (Dalam US$.Ribu)"),
                 "type"  => $chartType,
                 "scale-x" => array("labels" => $pmaLabel),
                 "scale-y" => array("thousands-separator" => ". "),
                 "plot" => array("value-box" => array("thousands-separator" => ".")),
                 "series" => $seriesPMA
                );

        $pmdnArray =  array(
            "title" => array("text" => "Provinsi Kepulauan Riau Tahun 2017 s/d 2019 (Dalam US$.Ribu)"),
            "type"  => $chartType,
            "scale-x" => array("labels" => $pmdnLabel),
            "scale-y" => array("thousands-separator" => ". "),
            "plot" => array("value-box" => array("thousands-separator" => ".")),
            "series" => $seriesPMDN
            );

        
         

        return array(
            "pma" => array( "grafik" => $pmaArray, "table" => $pma),
            "pmdn" => array( "grafik" => $pmdnArray, "table" => $pmdn)
        );
            
    }
}
