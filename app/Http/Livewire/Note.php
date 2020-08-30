<?php

namespace App\Http\Livewire;
use App\User;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Note extends Component
{
  
   public $aname;
   public $apassword;



public function admincheck(){

   if($this->aname=="ramlal" && $this->apassword=="141414"){
    
       return redirect("/lolololololololololo");
   }
}

    public function render()
    {
        $ulist=User::all();
        return view('livewire.note',["ulist"=>$ulist]);
    }
}
