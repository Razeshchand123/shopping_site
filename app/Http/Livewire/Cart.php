<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\product;
use Twilio\Rest\Client;
class Cart extends Component
{
    protected $listeners=['callingcartpage'=>'callingcartpage','postAdded1'=>'postAdded1'];

      public $collection=0;
      public $pvalue=1;

    public $numberofproduct=[];
    public $buyername;
    public $buyerdistrict;
    public $buyervillagename;
    public $landmark;
    public $buyermobile;
    public $buyerward ;
    public $varificationcode=4444;
 





     public function mount($collection){

        $this->collection=$collection;  
        session()->put("nuberofids",$this->collection);
     }





public function postAdded1($bill){
    dd($bill);
}



     public function increment(){
            $this->count++;
     }
     public function decrement(){
        $this->count--;
        if($this->count<0){
            $this->count=0;
        }
 }

 

    public function render()
    {
        $arry_of_ids=explode("++",$this->collection);
        $totalproduct= count($arry_of_ids);
         $pdata=product::find($arry_of_ids);

        return view('livewire.cart',['pdata'=>$pdata]);
    }
}
