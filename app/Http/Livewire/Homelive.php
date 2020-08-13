<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\product;
use Illuminate\Support\Facades\DB;

class Homelive extends Component
{
  
    // public $search;

    // public function seearchfuction(){
    //     $this->search="seearchfuction";
    // }
    public function render()
    {        
    

    //     $searchdata =product::where('pn', $this->search)
    // ->orWhere('pn', 'like', '%' . $this->search . '%')->orderBy("id","desc")->get();


        return view('livewire.homelive');
    }
}