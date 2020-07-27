<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\pasaldarta;
use App\product;
use Illuminate\Support\Facades\Storage;
class Dartapasal extends Component
{
    use WithFileUploads;
    public $name="hello ";

    public $shopname;
    public $shopaddress;

    public $onername ;
    public $onermobile;
    public $oneremail;
    public $slogo;
  
    public $count;

public function mount(){
    $this->onername=Auth()->user()->name;
    $this->oneremail=Auth()->user()->email;
   
    
}

public function updated($field){
    $this->validateOnly($field,[
        "shopname"=>"required|max:150|min:10",
        "shopaddress"=>"required|max:600|min:20",
        "onername"=>"required|max:50|min:3",
        "onermobile"=>"required|max:10|min:10",
        "oneremail"=>"required|email|max:40",
        "slogo"=>"required|image",
    ],[
        "shopname.required"=>"पसल को नाम लेख्नुस|",
        "shopname.min"=>"पसल को नाम सानो भयो |",
        "shopname.max"=>"पसल को नाम लामो भयो |",

        "slogo.required"=>"पसल को बेनर दिनुस |",
        "slogo.image"=>"पसल को बेनर को फोटो सपोर्ट गरेन अर्को दिनुस|",

        "shopaddress.required"=>"पसल को ठेगाना दिनुस",
        "shopaddress.min"=>"पसल को ठेगाना 10 सब्द भन्द सानो भयो|",
        "shopaddress.max"=>"पसल को ठेगाना  30 सब्द भन्द लामो भयो|",

        "onername.required"=>"पसल धनी को नाम लेख्नुस |",
        "onername.min"=>"पसल धनी को 30 सब्द भन्दा सानो भयो |",
        "onername.max"=>"पसल धनी को 200 सब्द भन्दा ठूलो भयो |",
        
        "onermobile.required"=>"सम्पर्क मोबाइल नंबर दिनुस |",
        "onermobile.min"=>"मोबाइल को नंबर 10 अंक भन्दा सानो भयो |",
        "onermobile.max"=>"मोबाइल को नंबर 10 अंक भन्दा ठूलो भयो |",

        "oneremail.required"=>"सम्पर्क ईमेल नंबर दिनुस |",
        "oneremail.email"=>" सम्पर्क ईमेल गलत छ|",
        "oneremail.max"=>" सम्पर्क ईमेल लामो भयो |",


    ]);

    }


public function deleteproduct($tid){
    $d_std=new product;
    $d_target=$d_std->find($tid);
    $result=$d_target->delete();
    if($result){
        session()->flash("done","data deleted sussufully");
        return redirect('/home');
    }

}




public function pasal_darta(){

$this->validate([
    "shopname"=>"required|max:150|min:10",
    "shopaddress"=>"required|max:600|min:20",
    "onername"=>"required|max:50|min:3",
    "onermobile"=>"required|max:10|min:10",
    "oneremail"=>"required|email|max:40",
    "slogo"=>"required|image",
]);
    
$imgpath=$this->slogo->store("public/shoplogo");

$std= new pasaldarta;
$std->sname=$this->shopname;
$std->saddress=$this->shopaddress;
$std->slogo=$imgpath;
$std->oname=$this->onername;
$std->omobile=$this->onermobile;
$std->oemail=$this->oneremail;

$result=$std->save();
if($result){
    session()->flash("done","हजुर को पसल सफलता पुर्वक दर्ता भयो |");
    session()->put("paasaldartavayo","pasal darata vayo");
}

    }

    public function render()
    {
        $info= new pasaldarta;
        $pinfo=$info->all();
        foreach($pinfo as $v){
            $a=$v->sname;
            $c=$v->omobile;
            $e=$v->saddress;
        }
       
        if(session()->has("paasaldartavayo")){
     $std2=new product;
     $peoductdata=$std2->where('psln','=', $a)
                        ->where('pslo','=',$this->onername)  
                         ->where('pslno','=',$c)   
                         ->where('psle','=',$this->oneremail)   
                         ->where('psla','=',$e)          
                          ->get(); ;

        }
        else{
       $peoductdata="nodata";

        }
        
// *********************************************************************
    
    $std= new pasaldarta;                                        
       $shopdata=$std->where('oemail','=', $this->oneremail)
                     ->where('oname','=',$this->onername)            
                     ->get();                   
    
       
        

        return view('livewire.dartapasal',["data"=>$shopdata,"peoductdata"=>$peoductdata]);
    }
}
