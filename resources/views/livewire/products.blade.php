<div>
 <div class="container">



 <!-- <small>{{$c1}}/{{$c2}}/{{$c3}}</small> -->
<!-- searchbox code here  -->
<div class="input-group w-75 mx-auto" >
  <input wire:model="search" type="text" class="form-control" placeholder="Search here !" aria-label="Username" aria-describedby="basic-addon1">
  <div class="input-group-prepend">
    <span class="input-group-text bg-white" id="basic-addon1">
    <button wire:click="seearchfuction" class="btn btn-sm p-0"><i class="fas fa-search text-info"></i></button></span>
  </div>
</div>

<!-- searchbox code here  -->

 <div class="row mb-4 " height="100">

<!-- --------------------------------------------------------------------- -->
@forelse($data as $value)
<div class="col-sm-4 parent d-flex flex-column justify-content-center my-4 " >
<!-- ----------------------------------------------------- -->
@php   $path= trim($value->pi,"public"); @endphp
       <img src=" http://127.0.0.1:8000/storage{{$path}}" alt="noimg" class="rounded pimg  img-responsive" height="250" width="250">


     <!-- slidehunewala transparent div start -->
     <div class="text-content">
         <!-- modelcodestart -->
                               <!-- Button trigger modal -->
                            <button type="button" class="btn   btn-gulabi" data-toggle="modal" data-target="#exampleModal{{$value->id}}">
                            Buy now
                            </button>

                        <div  class="w-uto ml-auto modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-capitalize" id="exampleModalLabel">
                                <img src=" storage/thispics/logo.png" alt=""  class="border border-dark img-responsive rounded-circle" width="50" height="50">
 
                    <span class="h3">Digital Bazar</span>
                
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                                         <img src="http://127.0.0.1:8000/storage{{$path}}" alt="noimg" height="80" style="margin-left:8%;">


                        <ul class="modelkoul">
                                <li>नाम : <span class="details text-capitalize"> {{$value->pn}}</span></li>
                                <li>मुल्य:Rs <span class="details">Rs. {{$value->pp}}</span></li>
                                
                                <li> अरु रंग: <span class="details">
                                @if($value->r)<span class="rang-red rang"></span>  @endif
                                    @if($value->g)<span class="rang-green rang"></span>  @endif
                                    @if($value->b)<span class="rang-black rang"></span>  @endif
                                    @if($value->gry)<span class="rang-grey rang"></span>  @endif
                                    @if($value->w)<span class="rang-white rang"></span>  @endif
                                    @if($value->o)<input class=" mt-3" type="checkbox" wire:model="other" ><span class="tcolor">Other</span>  @endif
                                </span>
                                </li>

                                      <li>साईज हरु:<span class="details"> 
                                        @if($value->m)<span class="sizescontrol">M</span>  @endif
                                        @if($value->l)<span class="sizescontrol">L</span>  @endif
                                        @if($value->xl)<span class="sizescontrol">XL</span>  @endif
                                        @if($value->xxl)<span class="sizescontrol">XXL</span>  @endif
                                        @if($value->k)<span class="sizescontrol">K</span>  @endif</span>
                                        </li>

      <!-- <li>थप जानकारी: <span class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore numquam perferendis reiciendis optio harum minima ullam nisi odio saepe error modi ipsam doloremque voluptates ipsa, libero ex vero a eius.<span></li>
    <hr>
     <li>पसल को नाम: <span class="details">ABC fancy store</span></li>
     <li>पसल धनी: <span class="details">ashok chand</span></li>
     <li>पसल को ठेगाना: <span class="details">manr-4,bazar galin-5,kanchanpur</span></li> -->
                 </ul>
                            </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                    <a href="/" class="btn btn-outline-danger" data-dismiss="modal"><small>मन परेन</small><i class="fas fa-times text-danger"></i></a>
                                    <a href="/one/{{$value->id}}"  class="btn  btn-gulabi"><small>थप जानकारी</small><i class="fas fa-check"></i></a>
                                     </div>
                            </div>
                        </div>
                        </div>
             
          <!-- modelcodeend -->
     </div>
    <!-- slidehunewla transparent div end -->


    <h5 class="text-center pt-2">Rs. {{$value->pp}}</h5>
<!-- --------------------------------------------------------------------------------------------------- -->
</div>
@empty
<h1 class="text-center tcolor"style="position:absolute;left:37%;">No data found</h1>
@endforelse
<!-- ..................................................................................... -->

</div>
 </div> 
 </div>  




















