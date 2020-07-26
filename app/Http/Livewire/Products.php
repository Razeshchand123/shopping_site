<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\product;
class Products extends Component
{




public $c1;
public $c2;
public $c3;
protected $listeners = ['postAdded'=>"cloth","twocata"=>"twocata","threest"=>"threest"];


public function cloth($c1){
    $this->c1=$c1;
}


public function twocata($c1,$c2){
    $this->c1=$c1;
    $this->c2=$c2;

}
public function threest($c1,$c2,$c3){
    $this->c1=$c1;
    $this->c2=$c2;
    $this->c3=$c3;
}



    public function render()
    { 
        if($this->c1){
        $std=new product;
        $data=$std->where("twoth","=",$this->c1)->get();
        return view('livewire.products',["data"=>$data]);
    }
    elseif($this->c1 && $this->c2){
        $std=new product;
        $data=$std->where("twoth","=",$this->c1)
                   ->where("cata","=",$this->c2)->get();
        return view('livewire.products',["data"=>$data]);
    }

    elseif($this->c1 && $this->c2 && $this->c3){
        $std=new product;
        $data=$std->where("twoth","=",$this->c1)
                  ->where("cata","=",$this->c2)
                   ->where("third","=",$this->c3)->get();
        return view('livewire.products',["data"=>$data]);
    }


    else{
        $std=new product;
        $data=$std->all();
        return view('livewire.products',["data"=>$data]);
    }











    }
}
