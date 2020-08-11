<div>
    




<div>
    


    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-8 mx-auto">
        
            <span><a href="/home"><i class="fas fa-arrow-left p-3 tcolor fa-2x"></i></a></span>
            
           
            @forelse($data as $value)
            
            <div class="row">
         
           <div class="col-md-4 bgg addproduct_shop_part">
         
          <img src='{{Storage::url($value->slogo)}}' alt="no img" class="img-fliud" height="200" />
            <p class="tcolor text-capitalize">{{$value->sname}}</p>
           <span class="tcolor text-capitalize">{{$value->saddress}}</span>
           <hr>
           <p class="tcolor text-capitalize">total product: 458</p>
        
           </div>
    
           <div class="col-md-8">
       @if(session()->has("addproducet"))
       <span class="tcolor">{{session()->get("addproducet")}} <i class="far fa-smile-beam tcolor mx-3"></i><i class="fas fa-heart tcolor"></i></span>
       @endif
           <form class="form-group" wire:submit.prevent="addproduct">
    
                  <input type="text" placeholder="समान को नाम" class="form-control" wire:model="pname">
                    @error("pname") <small class="text-danger">{{$message}}</small> @enderror<br>
                      

                    <input type="number" placeholder="समान को मुल्य" class="form-control" wire:model="price"> 
                    @error("price") <small class="text-danger">{{$message}}</small> @enderror<br>
    
                     

                      <textarea wire:model="pdetail"  cols="30" rows="7" class="form-control" placeholder="आफ्नो समान को बारे मा छोटकरी मा लेखनुस | 100 औटा सब्द भित्र"></textarea>
                      @error("pdetail") <small class="text-danger">{{$message}}</small> @enderror
                      <hr>

                 
                         <label for="setprofile" id="labeforsetprofile" class="mt-2">
                         @if ($productimg )
                         <img src="{{ $productimg->temporaryUrl() }}" height="100">
                    
                         @endif
                             <small id="imgspan">समान को फोटो </small>
                             <span wire:loading wire:target="productimg" >Uploading...<i class=" ml-2 mt-4 fas fa-spinner text-danger fa-2x"></i></span>

                      
                            <i class="far fa-images fa-2x"></i></label>
                             <input  type="file"  wire:model="productimg"  class="d-none" id="setprofile">
                             @error("productimg") <small class="text-danger">{{$message}}</small> @enderror<br>
    
                       <div>
                         <hr>
                       <p>साईज हरु:</p>
                      M <input type="checkbox" wire:model="m" class="mr-5">
                       L <input type="checkbox" wire:model="l" class="mr-5">
                       Xl <input type="checkbox" wire:model="xl" class="mr-5">
                       Xll <input type="checkbox" wire:model="xxl" class="mr-5">
                       k <input type="checkbox" wire:model="k" class="mr-5">
                       </div>
                       <hr>
                       
                       <div>
                       <p>अरु रंगहरु:</p>
                       <span class="rang-red rang"></span><input type="checkbox" wire:model="red" class="mr-5">
                       <span class="rang-green rang"></span><input type="checkbox" wire:model="green" class="mr-5">
                       <span class="rang-black rang"></span><input type="checkbox" wire:model="black" class="mr-5">
                       <span class="rang-grey rang"></span><input type="checkbox" wire:model="grey" class="mr-5">
                       <span class="rang-white rang"></span><input type="checkbox" wire:model="white" class="mr-5"><br>
                      <input class=" mt-3" type="checkbox" wire:model="other" ><span class="tcolor">Other</span>
                     
                      
                       </div>
       
    <hr>
             <!-- <p>थप जानकारी</p>
             <textarea wire:model="pdetail"  cols="30" rows="7" class="form-control" placeholder="आफ्नो समान को बारे मा छोटकरी मा लेखनुस | 100 औटा सब्द भित्र"></textarea>
             @error("pdetail") <small class="text-danger">{{$message}}</small> @enderror
        -->
             <hr>
        
       <span class="p tcolor">catagories</span>
       {{$catagory}}<br>

<div class="d-flex justify-content-between">

    <div class="one">
    <input type="radio"  name="cata" value="male" wire:model="cata">
    <label for="male">Male</label><br>
    <input type="radio"  name="cata" value="female"  wire:model="cata">
    <label for="female">Female</label><br>
    <input type="radio"  name="cata" value="kids"  wire:model="cata">
    <label for="kids">kids</label><br>

    <input type="radio"  name="cata" value="electronics"  wire:model="cata">
    <label for="electronics">electronics</label><br>
    <input type="radio"  name="cata" value="sports"  wire:model="cata">
    <label for="sports">sports</label><br>
    </div>
 
    <div class="two ">
    
   @if($cata == "male" || $cata=="female" ||$cata=="kids")
   <input type="radio"  name="twoth" value="cloth" wire:model="twoth">
    <label for="cloth">cloth</label><br>
    <input type="radio"  name="twoth" value="shoees"  wire:model="twoth">
    <label for="shoees">shoees</label><br>
    <input type="radio"  name="twoth" value="accesrrios"  wire:model="twoth">
    <label for="accesrrios">accesrrios</label><br>


    @elseif($cata == "electronics")
    <input type="radio"  name="twoth" value="tv"  wire:model="twoth">
    <label for="tv">tv</label><br>
    <small class="text-danger">यसमा काम हुदै छ| ..</small>

    @elseif($cata == "sports")
    <input type="radio"  name="twoth" value="bat"  wire:model="twoth">
    <label for="bat">bat</label><br>
<small class="text-danger">यसमा काम हुदै छ| ..</small>


   @else
   <small class="text-danger">no catagories selected</small>

   @endif 
 
    </div>

    <div class="three">
    
    @if($twoth == "cloth")
    <input type="radio"  name="third" value="upper" wire:model="third">
     <label for="upper">upper</label><br>
     <input type="radio"  name="third" value="lower"  wire:model="third">
     <label for="lower">lower</label><br>
     <input type="radio"  name="third" value="inner"  wire:model="third">
     <label for="inner">inner</label><br>
 
     @elseif($twoth == "shoees")
    <input type="radio"  name="third" value="sports" wire:model="third">
     <label for="sports">sports</label><br>
     <input type="radio"  name="third" value="party"  wire:model="third">
     <label for="party">party</label><br>
     <input type="radio"  name="third" value="canves"  wire:model="third">
     <label for="canves">canves</label><br>
     <input type="radio"  name="third" value="boot"  wire:model="third">
     <label for="boot">boot</label><br>
     <input type="radio"  name="third" value="others"  wire:model="third">
     <label for="others">others</label><br>


     @elseif($twoth == "accesrrios")
     <input type="radio"  name="third" value="sunglass"  wire:model="third">
     <label for="sunglass">sunglass</label><br>
     <input type="radio"  name="third" value="watches"  wire:model="third">
     <label for="watches">watches</label><br>
     <input type="radio"  name="third" value="Jewellery"  wire:model="third">
     <label for="Jewellery">Jewellery</label><br>
     <input type="radio"  name="third" value="Wallets"  wire:model="third">
     <label for="Wallets">Wallets</label><br>
     <input type="radio"  name="third" value="others"  wire:model="third">
     <label for="others">others</label><br>
  




    @else
    <small class="text-danger">no catagories selected</small>
 
    @endif 
  
     </div>









 </div>
    <br>
    <br>
    
    
    <button type="submit" class="btn btn-gulabi btn-block"> समान  दर्ता गर्नुस्     </button>      
    
    </form>
    
    
    
    
    
    
    
    
           </div>
       </div>

       @empty 
       <h4 class="tcolor text-center">पसल दर्ता गर्न बाकी छ | </h4>
       
          @endforelse
       
    
    
    
    
    
    
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    <style>
    .dropbtn {
    
      font-size: 16px;
      border: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown-content a:hover {background-color: #ddd;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    
    </div>
    
</div>
