<?php

namespace App\Http\Livewire;
use App\User;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Note extends Component
{

   
    public function deleteuser($id){
       $data=User::find($id);
       $data=User::where("name","=",$shopeoner)
       ->where("email","=",$shopemail)
       ->get();
    //    "public/product/1qekXf24OrMoup8taqFRDuhNV5qZTr37mxNGZTNp.png"
    // "images/ywBylSm2m8AAAv1XZVuxC3rQK0MXHizSPzWyC2NF.jpeg"
        
    //    Storage::delete("public/".$data->profile);
    //    $data->delete();
   
    }
    public function render()
    {
        $ulist=User::all();
        return view('livewire.note',["ulist"=>$ulist]);
    }
}
