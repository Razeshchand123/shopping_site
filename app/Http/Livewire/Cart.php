<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\product;
class Cart extends Component
{
    protected $listeners=['callingcartpage'];

      public $collection=0;
      public $pvalue=1;




     public function mount($collection){
        $this->collection=$collection;  
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
