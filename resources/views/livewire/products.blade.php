<div>
 <div class="container " style="margin-top:-2%;z-index:-1;">

<small>{{$c1}}/{{$c2}}/{{$c3}}</small>

 <div class="row mb-4 "  height="100">

<!-- --------------------------------------------------------------------- -->
@forelse($data as $value)
<div class="col-sm-4 parent d-flex flex-column justify-content-center my-4" >
<!-- ----------------------------------------------------- -->
@php   $path= trim($value->pi,"public"); @endphp
       <img src=" http://127.0.0.1:8000/storage{{$path}}" alt="noimg" class="rounded pimg" height="250">


     <!-- slidehunewala transparent div start -->
     <div class="text-content">
         <!-- modelcodestart -->
                               <!-- Button trigger modal -->
                            <button type="button" class="btn   btn-gulabi" data-toggle="modal" data-target="#exampleModal{{$value->id}}">
                            Buy now
                            </button>

                        <div style="width:58%;" class=" ml-auto modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-capitalize" id="exampleModalLabel">{{$value->pn}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style=" background: radial-gradient(#b50697, transparent);">


                                         <img src="http://127.0.0.1:8000/storage{{$path}}" alt="noimg" height="80">


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
                                    <a href="/" class="btn btn-outline-danger" data-dismiss="modal">मन परेन<i class="fas fa-times text-danger"></i></a>
                                    <a href="/one/{{$value->id}}"  class="btn  btn-gulabi">किन्नस<i class="fas fa-check"></i></a>
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




















