<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\pasaldarta;
use App\product;
use Image;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Aproduct extends Component
{
    use WithFileUploads;


public $l;
public $m;
public $xl;
public $xxl;
public $k;


public $red;
public $green;
public $black;
public $grey;
public $white;
public $other;


public $cata;
public $twoth;
public $third;
public $catagory;

public $totalimg;
public $path1;
public $path2;
public $path3;

public $pname;
public $productimg=[];
public $price;
public $pdetail;

public $paslname;
public $pasladress;
public $paslowner;
public $paslnumber;
public $paslemail;

public $temp;
public function mount(){
    //  shopdata section
$std= new pasaldarta;
$shopdata=$std->where("oname","=",Auth()->User()->name)->where("oemail","=",Auth()->User()->email)
->where("oemail","=",Auth()->User()->email)->get();

foreach($shopdata as $value){
    $this->paslname=$value->sname;
    $this->pasladress=$value->saddress;
    $this->paslowner=$value->oname;
    $this->paslnumber=$value->omobile;
    $this->paslemail=$value->oemail;
}

   
}



public function updated($field){
    // unset($this->productimg);
   

    $this->validateOnly($field,[
    "pname"=>"required|min:3|max:25",
      "productimg.*"=>"required|image",
      "price"=>'required|numeric|min:2',
      "pdetail"=>"required|max:500|min:150",
    ],[
        "pname.required"=>"समान को नाम लेख्‍न बाकी छ|",
        "pname.min"=>"समान को नाम  धेरै सानो भयो |",
        "pname.max"=>"समान को नाम  धेरै लामो भयो |",

        "productimg.required"=>"समान को फोटो  खाली भयो|",
        "productimg.image"=>"तपाई ले दिएको फोटो सपोर्ट गरेन |अर्को फोटो दिनुस|",

        "price.required"=>"समान को मुल्य दिनुस |",
        "price.min"=>"समान को मुल्य धेरै सानो भयो |",
        "price.max"=>"समान को मुल्य धेरै ठुलो भयो |",

        "pdetail.required"=>"समान को  डीटेल खाली  छ |",
        "pdetail.min"=>"समान को  डीटेल 30 सब्द भन्दा सानो भयो |",
        "pdetail.max"=>"समान को  डीटेल 200 सब्द भन्दा ठूलो भयो |",

    ]);
 
    }

public function addproduct(){
//  $this->test="addproduct";


$this->validate([
    "pname"=>"required|min:3|max:25",
    "productimg.*"=>"required|image",
    "price"=>"required|min:1",
    "pdetail"=>"required|max:500|min:150",
  
  ]);

 $std=new product;
 $std->m=$this->m;
 $std->l=$this->l;
 $std->xl=$this->xl;
 $std->xxl=$this->xxl;
 $std->k=$this->k;

 $std->r=$this->red;
 $std->g=$this->green;
 $std->b=$this->black;
 $std->gry=$this->grey;
 $std->w=$this->white;
 $std->o=$this->other;

 
 $std->cata=$this->cata;
 $std->twoth=$this->twoth;
 $std->third=$this->third;
 $std->catagory=$this->catagory;
// 
// ->resize(1920, 1080)
//  $img1=ImageManagerStatic::make($this->productimg)
//                          ->fit(1920,1080)
//                          ->encode("jpeg");
//  $imgpath="/product/".Str::random(10).rand().".jpeg";   
//  Storage::disk("public")->put("$imgpath",$img1);                      
// $this->productimg as $photo

    // $imgpath0=$this->productimg[0]->store("public/product");
    // $imgpath1=$this->productimg[1]->store("public/product");
    // $imgpath2=$this->productimg[2]->store("public/product");
    // $totalimg=$imgpath0."##".$imgpath1."##".$imgpath2;
    
    // $totalimg=$this->productimg->store("public/product");
    

 foreach($this->productimg as $photo){
    $a = $photo->store("public/product");
 
    $this->totalimg .="##".$a;


 }


$std->pi=$this->totalimg;


 $std->pn=$this->pname;


   





 $std->pp=$this->price;
 $std->pd=$this->pdetail;




$std->psln=$this->paslname;
$std->psla=$this->pasladress;
$std->pslo=$this->paslowner;
$std->pslno=$this->paslnumber;
$std->psle=$this->paslemail;


$result=$std->save();
if($result){
    session()->put("addproducet","product added successfully");
     return redirect('/aproduct');
    
}






}

 public function removepic($index){
     array_splice($this->productimg,$index,1);
 }

    public function render()
    {
        $a=Auth()->user()->name;
        $b=Auth()->user()->email;
        $std= new pasaldarta;
       $shopdata=$std->where("oname","=",$a)
                    ->where("oemail","=",$b)->get();
        return view('livewire.aproduct',["data"=>$shopdata]);
    }
}
