<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\product;
use Illuminate\Support\Facades\Storage;

class Oneproduct extends Component
{

    public $tid;
    public function mount($id){
        $this->tid=$id;

    }
    public function render()
    {
        $std=new product;
        $dataone=$std->where("id","=",$this->tid)->get();
        return view('livewire.oneproduct',["dataone"=>$dataone]);
    }
}
