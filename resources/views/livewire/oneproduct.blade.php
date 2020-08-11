<div>
<div class="container">
    <span><a href="/"><i class="fas fa-arrow-left p-3"></i></a></span>
@foreach($dataone as $value)
<!-- .............................................................. -->

<span class="h3"> {{$value->pn}}</span>
    <div class="row">
        <div class="col-lg-6">
            <!-- slider -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    @php   $path= trim($value->pi,"public"); @endphp

      <img class="d-block w-100 image-fluid" src="http://127.0.0.1:8000/storage{{$path}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 image-fluid" src="http://127.0.0.1:8000/storage{{$path}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 image-fluid" src="http://127.0.0.1:8000/storage{{$path}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <!-- slider -->
        </div>
        <div class="col-lg-6 bg-light p-3">
      
        <ul class="modelkoul">
     <li>नाम : <span class="details"> {{$value->pn}}</span></li><br>
     <li>मुल्य:Rs <span class="details">Rs.{{$value->pp}}</span></li><br>
     <li> अरु रंग: <span class="details">
       
                            @if($value->r)<span class="rang-red rang"></span>  @endif
                                    @if($value->g)<span class="rang-green rang"></span>  @endif
                                    @if($value->b)<span class="rang-black rang"></span>  @endif
                                    @if($value->gry)<span class="rang-grey rang"></span>  @endif
                                    @if($value->w)<span class="rang-white rang"></span>  @endif
                                    @if($value->o)<input class=" mt-3" type="checkbox" wire:model="other" ><span class="tcolor">Other</span>  @endif
                                </span>
                              
     
      </li><br>
      <li>साईज हरु:<span class="details"> 
                                        @if($value->m)<span class="sizescontrol">M</span>  @endif
                                        @if($value->l)<span class="sizescontrol">L</span>  @endif
                                        @if($value->xl)<span class="sizescontrol">XL</span>  @endif
                                        @if($value->xxl)<span class="sizescontrol">XXL</span>  @endif
                                        @if($value->k)<span class="sizescontrol">K</span>  @endif</span>
                                        </li><br>

     <li>थप जानकारी:<br> <span class="text-dark font-weight-light"> {{$value->pd}} </span></li><hr>

     <li>पसल को नाम: <span class="details">{{$value->psln}}</span></li><br>
     <li>पसल धनी: <span class="details">{{$value->pslo}}</span></li><br>
     <li>मोबाइल: <span class="details">{{$value->pslno}}</span></li><br>
     <li>ईमेल: <span class="details">{{$value->psle}}</span></li><br>
     <li>पसल को ठेगाना: <span class="details">{{$value->psla}}</span></li><br>
    </ul>






























<!-- .......................................................................... -->
@endforeach
<p> यो समान पसल मा उपलध छ छैन भनेर कृपया पसेले को दिएको नंबर अथवा  दिएको  ठेगाना मा सम्पर्क गरेर समान बारे  चित्त बुजे पछी लिनुहोला |
    <span>धन्यबाद</span>
   
     </p>      
    <p><a href="/about" class="tcolor "> हामी बारे आझ बुज्नुस |</a></p>
   
     </div>
    </div>
</div>

<style>
    body{ }
</style>
        </div>