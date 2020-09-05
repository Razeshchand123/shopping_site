<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App;
use App\product;

class makepdf extends Controller
{
  function generatepdf(){
   $lists= session()->get("nuberofids");

        $arry_of_ids=explode("++",$lists);
        $totalproduct= count($arry_of_ids);
         $pdata=product::find($arry_of_ids);
 

    $pdf=PDF::loadview('livewire.cart',$pdata);
    return $pdf->stream();
    


  }





}
