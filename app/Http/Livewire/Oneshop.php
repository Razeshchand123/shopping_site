<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\pasaldarta;
use App\product;
use App\User;
use Illuminate\Support\Facades\Storage;
class Oneshop extends Component
{
    
  
    public $shopname;
    public $shopemail;
    public $shopnumber;
    public $oname;
     public $tid=0;

  
   public function mount($xid){
       $this->tid=$xid;
       $oneshop=pasaldarta::where("id","=",$xid)->get();
        foreach($oneshop as $value){
    
            $this->shopname=$value->sname;
            $this->shopemail=$value->oemail;
            $this->shopnumber=$value->omobile;
            $this->onername=$value->onmae;     
    }


   }

public function deleteshop($id){
   
// shop deleting 
  $d_std=new pasaldarta;
  $d_target=$d_std->find($id);
  $shopname=$d_target->sname;
  $shopemail=$d_target->oemail;
  $shopemobile=$d_target->omobile;
  $shopeoner=$d_target->oname;


  $result=$d_target->delete();
  Storage::delete($d_target->slogo);
// shop deleting 
   
    if($result){

        $dstd=new product;
        $d_target=$dstd->where("psln","=",$shopname)
                          ->where("psle","=",$shopemail)
                          ->where("pslno","=",$shopemobile)
                          ->where("pslo","=",$shopeoner)
                          ->get();


                        

$productnumber=$d_target->count();

for($i=0;$i<$productnumber;$i++){
    
   $path= $d_target[$i]->pi;
   $path=explode("##",$path);
   $len=count($path);


if($len==2){
  $path1="public".trim($path[1],"public");
  Storage::delete($path1);

}
if($len==3){
  $path1="public".trim($path[1],"public"); 
  $path2="public".trim($path[2],"public"); 
  Storage::delete($path1);
  Storage::delete($path2);
  
 
}
if($len==4){
  $path1="public".trim($path[1],"public"); 
  $path2="public".trim($path[2],"public"); 
  $path3="public".trim($path[3],"public"); 

  Storage::delete($path1);
  Storage::delete($path2);
  Storage::delete($path3);
}
$d_target[$i]->delete();  

}

        session()->flash("done","data deleted sussufully");
        // $d_target->delete();


  // user deleting on user table 
 
  $userdata=User::where("name","=",$shopeoner)
  ->where("email","=",$shopemail)
  ->get();
   foreach($userdata as $t)  { 
   $userimg= "public/".$t->profile;  
   $idofthisuser=$t->id;     
   }
   $deletethisuser=User::find($idofthisuser);
  if( $deletethisuser->delete()){
    Storage::delete($userimg);
  }


   $userdata->delete();
// user deleting on user table 



        return redirect('/admin');
    }
    
}

    public function render()
    {
   $data =product::where('psle','=',$this->shopemail)   
        ->where('psln','=',$this->shopname) 
        ->where('pslno','=',$this->shopnumber)
        ->orderBy("id","desc")->get();
       

        $shopdata=pasaldarta::where("id","=",$this->tid)->get();   

        return view('livewire.oneshop',["data"=>$data,"shopdata"=>$shopdata]);
    }
}
