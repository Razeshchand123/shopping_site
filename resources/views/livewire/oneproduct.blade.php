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

    @php  
   
    $path=explode("##",$value->pi);
 
 $len=count($path);
 
if($len==2){
  $path1=trim($path[1],"public");
  $path2=trim($path[1],"public"); 
  $path3=trim($path[1],"public"); 
}
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

 
     
    @endphp


      <img class="d-block w-100 image-fluid" src="http://127.0.0.1:8000/storage{{$path1}}" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 image-fluid" src="http://127.0.0.1:8000/storage{{$path2}}" alt="Second slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 image-fluid" src="http://127.0.0.1:8000/storage{{$path3}}" alt="Third slide" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <i class="fas fa-arrow-circle-left text-danger p-2 bg-warning"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    
    <i class="fas fa-arrow-circle-right text-danger p-2 bg-warning"></i>
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
                                    @if($value->o)<span class="tcolor ml-3"><span class="rang-other rang"></span>Other</span>  @endif
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


     <li class="d-flex justify-content-start align-items-center">भुक्तानी गर्नुस् : 
     





<!-- 
     <form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="{{$value->pp + 10}}" name="tAmt" type="hidden">
    <input value="{{$value->pp}}" name="amt" type="hidden">
    <input value="5" name="txAmt" type="hidden">
    <input value="2" name="psc" type="hidden">
    <input value="3" name="pdc" type="hidden">
    <input value="epay_payment" name="scd" type="hidden">
    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <button value="Submit" type="submit" target="_blank" class="btn">
     <img class="ml-2" src="http://127.0.0.1:8000/storage/thispics/card1.png" alt="" height="50">
     </button>
    </form> -->
    

    <a href="/cart/++{{$value->id}}"><img class="ml-2" src="http://127.0.0.1:8000/storage/thispics/buynow.png" alt="" height="60">
 </a> 
      </li>
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
   
</style>
        </div>