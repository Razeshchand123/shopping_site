<div>
   
<div class="container">
<div class="row">
<div class="col-sm-11 mx-auto">
<a href="/admin">back</a>
<!-- ........................................................................  -->
@foreach($shopdata as $value)

@php 
$old =$value->created_at->format('d-m-Y') ;
$oyear= date('d-m-Y', strtotime($old. ' + 1 year'));
$current =date('d-m-Y');
$a=strtotime($oyear);
$b=strtotime($current);
$diff=floor(($a-$b)/86400);
 
@endphp 
<div class="shopinformation d-flex justify-content-around">
<!-- ///////////////////////////////////// -->
        <div>
        <img src='{{Storage::url($value->slogo)}}' alt="no img" class="img-fliud" height="200"/>
        
        <h3 class="text-center">{{$value->sname}}</h3>
        <p class="text-center">{{$value->created_at->diffForHumans()}}</p>
        <p class="text-center">total product :{{$data->count()}}</p>
        </div>
<!-- ///////////////////////////////////// -->

<div class="shop_textdata">
<table class="table">
<tr><td >पसल को नाम: </td><td class="tcolor text-capitalize">{{$value->sname}}</td></tr>
<tr><td >total products: </td><td class="tcolor text-capitalize bg-warning">{{$data->count()}}</td></tr>
<tr><td >created at: </td><td class="tcolor text-capitalize">hhhhhhh</td></tr>
<tr><td>पसल को ठेगाना: </td><td class="tcolor text-capitalize">{{$value->saddress}}</td></tr>
<tr><td>पसल धनी को नाम: </td><td class="tcolor text-capitalize">{{$value->oname}}</td></tr>
<tr><td>पसल को नंबर: </td><td class="tcolor text-capitalize">{{$value->omobile}}</td></tr>
<tr><td>पसल को ईमेल:</td><td class="tcolor text-capitalize">{{$value->oemail}}</td></tr>

<tr><td>Agrrement AT::</td><td class="tcolor text-capitalize">{{$value->created_at->format('d-m-Y')}}</td></tr>
<tr><td>Agrrement samma::</td><td class="tcolor text-capitalize">{{$oyear}}</td></tr>
<tr><td>Agrrement Renew before:</td><td class="tcolor text-capitalize">{{$diff}} days</td></tr>

<tr><td>payment varified:</td><td class="tcolor text-capitalize"> <i class="fas fa-check-square  text-info"></i>yes</td></tr>
</table>
</div>

<!-- ///////////////////////////////////// -->
<div  style="display:grid;place-items:center;">
<div>
<button wire:click="deleteshop({{$value->id}})" class="btn"><i class="fas fa-times-circle fa-5x text-danger"></i><br></button>
<p>delete this shop</p>
</div>
</div>
<!-- ///////////////////////////////////// -->

</div>

@endforeach


<!-- .............................................................................................  -->


<!-- saman ko table start  -->
<hr><hr>



<table class="table table-hover table-striped table-sm table-bordered listtable">
    <thead>
      <!-- <th><small>Id</small></th> -->
      <th><small>नाम </small></th>
      <!-- <th><small>कोड</small></th> -->
      <th><small>फोटो</small></th>
    
      <th><small>समान बारे</small></th>
    
      <th><small>मुल्य</small></th>
      <th><small>कलर</small></th>

      <!-- <th><small>मुल्य</small></th> -->
      <th><small>साइज़</small></th>
     
      <th>categories</th>
      <th ><small class="text-center" style="padding-left:15%">Actions</small></th>
     
    </thead>
    <tbody>
 
  
    @forelse($data as $val)
    
    <tr>
      <!-- <td>{{$val->id}}</td> -->
      <td>{{$val->pn}}</td>
      <!-- <td>123</td> -->



     <td>
    @if(storage::url($val->pi))
    @php 
    $path=explode("##",$val->pi);
    $path1=trim($path[1],"public"); 
    @endphp
     <img src="{{storage::url($path1)}}" alt="noimg" height="50" width="50">
     @endif

     </td>



 
      <td>{{substr($val->pd,0,50)}}</td>
      <td>Rs.{{$val->pp}}</td>
      <td>
        @if($val->r)<span class="rang-red rang"></span>  @endif
        @if($val->g)<span class="rang-green rang"></span>  @endif
        @if($val->b)<span class="rang-black rang"></span>  @endif
        @if($val->gry)<span class="rang-grey rang"></span>  @endif
        @if($val->w)<span class="rang-white rang"></span>  @endif
        <br>
        @if($val->o)<span class="tcolor border border-white">Other</span>  @endif
     
  
      </td>
      
      <td>
      @if($val->m)<span class="sizescontrol">M</span>  @endif
      @if($val->l)<span class="sizescontrol">L</span>  @endif
      @if($val->xl)<span class="sizescontrol">XL</span>  @endif
      @if($val->xxl)<span class="sizescontrol">XXL</span>  @endif
      @if($val->k)<span class="sizescontrol">K</span>  @endif

      </td>
      
      <td>
      @if($val->cata)<span class="catacontrol">{{$val->cata}}</span>  @endif
      @if($val->twoth)<span class="catacontrol">{{$val->twoth}}</span>  @endif
      @if($val->third)<span class="catacontrol">{{$val->third}}</span>  @endif
     
      </td>
<td class="d-flex">
<button class="btn "><i class="far fa-edit text-danger"></i></button>
<!-- <button class="btn"><i class="fas fa-trash-alt text-danger"></i></button> -->

<!-- model code start -->
<!-- Button trigger modal -->
<button type="button" class="btn " data-toggle="modal" data-target="#exampleModalLong{{$val->id}}">
<i class="fas fa-trash-alt text-danger"></i>
</button>

<!-- Modal -->
<div style="width:87%;" class="modal fade" id="exampleModalLong{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLongTitle">
          <!-- model title -->
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h3 class="text-center text-danger">हजुर यो समान लाई हाटाउन चाहनु हुन्छ |</h3>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-gulabi" data-dismiss="modal"><small>नहाटाउनुस</small></button>
        <button type="button" class="btn btn-gulabi" wire:click="deleteproduct({{$val->id}})" data-dismiss="modal"><i class="fas fa-check text-danger"></i><small>हाटाउनुस</small></button>
      </div>
    </div>
  </div>
</div>

<!-- modelcodeend -->


</td>


  </tr>
  
    @empty
  
   <tr>
   <td colspan="10">
   <p class="text-center">हजुर को कुनै समान ऑनलाइन रखिएको छैन |<i class="fas fa-frown ml-3 fa-2x pt-3"></i></p>

   </td></tr>
    @endforelse
   



    </tbody>

  </table>










<!-- saman ko table end  -->






</div>
</div>
</div>


</div>
