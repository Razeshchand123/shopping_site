<div>

<div class="container">
<div class="row">
<div class="col-sm-9 mx-auto">
<h1 class="text-center">YOUR PRODUCTS ARE::</h1>
<small>tapai lai kunai pami sanamn bare thap jankari chaiye ma diyeko sapark number email wa thegana ma sapark garnu hola</small>
  
  <table class="table table-hover">
  <thead>
  <th>Sn.</th>
<th>Name</th>
<th>image</th>
<th>Price</th>
<th>Quentity</th>
<th>color</th>
<th>size</th>
<th>Servicecharge(1%)</th>
<th>Tax(1%)</th>
<th>Total</th>
  </thead>
  <tbody>
  @php $one=1;$grandtotal=0; @endphp

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


$pvalue;
$price=$value->pp * $pvalue ;

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
<input onChange="increment(this)" type="number" style="width:40px;" class="quentity" min="0" >
 </td>
<td><input type="color" class="form-group"></td>
<td>..</td>
<td><p>{{$service}}</p></td>
<td>{{$tax}}</td>
<td class="total">{{$total}}</td>
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
<td>TOTAL</td>
<td>{{$grandtotal}}</td>
</tr>

</thead>
</table>
  
<button class="btn btn-block btn-info">pay</button>




</div>
</div>
</div>
<script>



  function increment(e){
    let quentity=e.value;
    let total=$(e.parentElement).siblings(".price").text();
    
    let totalQuentity=quentity * total;
    $(e.parentElement).siblings(".total").text(totalQuentity);
    console.log(e);


}







</script>
   
</div>
