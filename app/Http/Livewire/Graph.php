<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\product;
class Graph extends Component
{
public $shoes;
public $cloth;
public $accessories;
public $electronics;
public $sports;
// ............... 
public $jan;
public $fab;
public $march;
public $april;
public $may;
public $june;
public $july;
public $agust;
public $sept;
public $oct;
public $nov;
public $desc;

public function mount(){
    $this->electronics=product::where("cata","=","electronics")->count();
    $this->sports=product::where("cata","=","sports")->count();

   $this->shoes=product::where("twoth","=","shoes")->count();
   $this->cloth=product::where("twoth","=","cloth")->count();
   $this->accessories=product::where("twoth","=","accesrrios")->count();
}

    public function render()
    {
       
        $this->jan = product::whereBetween('created_at',['2020-00-1','2020-01-1'])->count();
         $this->fab =product::whereBetween('created_at',['2020-01-1','2020-02-1'])->count();
         $this->march =product::whereBetween('created_at',['2020-02-1','2020-03-1'])->count();
         $this->april =product::whereBetween('created_at',['2020-03-1','2020-04-1'])->count();
         $this->may =product::whereBetween('created_at',['2020-04-1','2020-05-1'])->count();
         $this->june =product::whereBetween('created_at',['2020-05-1','2020-06-1'])->count();
         $this->july =product::whereBetween('created_at',['2020-06-1','2020-07-1'])->count();
         $this->agust =product::whereBetween('created_at',['2020-07-1','2020-08-1'])->count();
         $this->sept =product::whereBetween('created_at',['2020-08-1','2020-09-1'])->count();
         $this->oct =product::whereBetween('created_at',['2020-09-1','2020-10-1'])->count();
         $this->nov =product::whereBetween('created_at',['2020-10-1','2020-11-1'])->count();
         $this->desc =product::whereBetween('created_at',['2020-11-1','2020-11-30'])->count();
    
    
        return view('livewire.graph');
    }
}
