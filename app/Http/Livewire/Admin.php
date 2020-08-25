<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\pasaldarta;
use App\product;
use Illuminate\Support\Facades\Storage;
class Admin extends Component
{

    public function render()
    {
        $pasalharu=pasaldarta::orderBy("id","desc")->get();
        return view('livewire.admin',["pasalharu"=>$pasalharu]);
    }
}
