
  
<div>

<div class="container">
<div class="row">
<div class="col-sm-11 mx-auto">
<div class="row">
<div class="col-sm-4" style="display:grid;place-items:center;">
<h5 style="margin-top:13%">aafno jankari dinus</h5>
<form  wire:submit.prevent="textdetail" class="form-group"><br>
<input type="text" wire:model="buyername" class="form-control" placeholder="तपाईको नाम"><br>
<input type="text" wire:model="buyerdistrict " class="form-control" placeholder="तपाईको जिल्ला"><br>
<input type="text" wire:model="buyervillagename " class="form-control" placeholder="तपाईको गाउ वा सहरको नाम "><br>
<input type="text" wire:model="buyerward " class="form-control" placeholder="तपाईको वार्ड "><br>
<input type="text"wire:model="landmark " class="form-control" placeholder="घर नजिक को प्रसिद्ध ठाउ"><br>
<input type="text" wire:model="buyermobile " class="form-control" placeholder="तपाईको मोबाइल नंबर"><br>
<small>yo number ma varification code aaun6</small><br>


</form>
</div>
<div class="col-sm-8">







<h1 class="text-center">YOUR PRODUCTS ARE::</h1>
<small>तपाई लाई कुनै समान बारे थप जानकारी चाहिएमा समान सँग दीएएको नंबर ,ईमेल,वा दीएएको ठेगाना म सम्पर्क गर्नुहोला |</small>
  
  <table class="table table-hover">
  <thead>
  <th>Sn.</th>
<th>Name</th>
<th>image</th>
<th>Price</th>
<th>Quentity</th>
<th>color</th>
<th>size</th>
<th>Servicecharge</th>
<th>Tax</th>
<th>Total</th>
  </thead>
  <tbody>
  @php $one=1;$grandtotal=0; $h=0 @endphp

  @foreach($pdata as $value)
@php   
$path=explode("##",$value->pi);
$len=count($path);
$path1=trim($path[1],"public"); 
if($len==3){
  $path1=trim($path[1],"public");
  $path2=trim($path[2],"public"); 
  $path3=trim($path[1],"public"); 
}
if($len==4){
  $path1=trim($path[1],"public");
  $path2=trim($path[2],"public"); 
  $path3=trim($path[3],"public"); 
}
$price=$value->pp  ;
$tax=$price*1.5/100;
$service=$price*1.5/100;
$total=$tax+$service+$price;
$grandtotal= $grandtotal+$total;
@endphp

<tr>
<td>{{$one++}}</td>
<td><p>{{$value->pn}}</p></td>
<td><img src=" http://127.0.0.1:8000/storage/{{$path1}}" alt="noimg" class="rounded pimg  img-responsive" height="50" width="50"/></td>
<td class="price">{{$value->pp}}</td>
<td>
<input onChange="increment(this)" type="number" style="width:40px;" class="quentity" min="0" value="1"  autocomplete="off">
 </td>
<td>
<!-- <span class="rang-red rang"></span><input type="checkbox" wire:model="red" class="mr-5"> -->
                    
<span class="details">
       
                                @if($value->r)<input type="checkbox"  /> <span class="rang-red cart_rang rang"></span><br> @endif
                                    @if($value->g)<input type="checkbox" /> <span class="rang-green cart_rang rang"></span> <br> @endif
                                    @if($value->b)<input type="checkbox" /> <span class="rang-black cart_rang rang"></span>  <br> @endif
                                    @if($value->gry)<input type="checkbox" /> <span class="rang-grey cart_rang rang"></span> <br>  @endif
                                    @if($value->w)<input type="checkbox" /> <span class="rang-white cart_rang rang"></span><br> @endif
                                    @if($value->o)<input type="checkbox" /> <span class="rang-other cart_rang rang"></span>  @endif
                                </span>
                                                                      
</td>
<td>
                                     @if($value->m)<input type="checkbox" />  M <br> @endif
                                        @if($value->l)<input type="checkbox" />  L <br> @endif
                                        @if($value->xl)<input type="checkbox" />  XL <br> @endif
                                        @if($value->xxl)<input type="checkbox" />  XXL <br> @endif
                                        @if($value->k)<input type="checkbox" />  K <br> @endif</span>


</td>
<td><p>1%</p></td>
<td>1%</td>
<td class="total" >{{$total}}</td>
</tr>

@endforeach

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>TOTAL RS.</td>
<td id="total" class="text-center" >{{$grandtotal}}</td>
</tr>

</thead>
</table>
  
<a href="/makepdf">PDF</a>
<!-- modelcodestart -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        <span class="display-4 tcolor slowfill ">
Digital_Bazar
</span>
        
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5>मोबाइल मा आएको चार आक्षयर को कोड लेख्नुस </h5>
      <input type="text" class="form-control" wire:model="varificationcode" >
       <!-- <h5>तपाईले समान बारे दिएको जानकारी सब ठीक छ छैन पुन : हेर्नुस |</h5>
       <small>सब ठीक छ भने <kbd> ठीक छ</kbd> मा क्लिक गर्नुस् नत्र  <kbd> ठीक छैन</kbd> मा क्लिक गर्नुस् </small> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">ठीक छैन</button>
        <!-- esewa code  -->



   <form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input id="esewagrandtotal" value="{{$grandtotal}}" name="tAmt" type="hidden">
    <input id="etax" value="{{$grandtotal}}" name="amt" type="hidden" >
    <input  value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">


    <input value="epay_payment" name="scd" type="hidden">
    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <input value="ठीक छ" type="submit" class="btn btn-outline-success btn-block">
    </form>
        <!-- esewacode -->
      </div>
    </div>
  </div>
</div>
<!-- modelcode end here  -->



</div>
</div>
<button  type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">
 Pay Now
</button>
</div>
</div>
</div>

@php 
$date=date('H:i:s');

$textdata="helllo iam testing";
$name="order/".rand()."-order-".date('Y')."-".date('m')."-".date('d').".txt";


$file=fopen($name,'a');
fwrite($file,"detail: \t");


foreach($pdata as $value){
  $file=fopen($name,'a');
fwrite($file,$value->id." ");
fwrite($file,$value->pn ."\t");
}



if(isset($_POST['result'])) {
$data    = $_POST["result"];
$data    = json_decode("$data", true);
dd ($data[0]);

}

@endphp









<script>
  function increment(e){
    let quentity=e.value;
    let total=$(e.parentElement).siblings(".price").text();
    
    let totalQuentity=(quentity * total) + (quentity * total)*0.02;
        
    $(e.parentElement).siblings(".total").text(totalQuentity);
 
    var totalarray = document.getElementsByClassName("total");
    var grandtotal=1;
   for(var i=0;i<totalarray.length;i++){
    grandtotal=grandtotal+parseInt(totalarray[i].outerText);
    
   }
   var tika=document.getElementById("total").innerText=grandtotal;
   
  //  eswacode start
   document.getElementById("esewagrandtotal").value=grandtotal;
   document.getElementById("etax").value=grandtotal;
   
}

</script>
<script>

var nproduct = document.getElementsByClassName("quentity");
$(document).ready(function(){
  
$.ajax({
type    : 'POST',
url     : 'cart.blade.php',
data    : {result:JSON.stringify(nproduct)},
success : function(response) {
   alert("good");
}    

});
});
</script>
   
</div>

