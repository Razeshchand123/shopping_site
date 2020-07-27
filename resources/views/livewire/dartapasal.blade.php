<div>
   

<h3> <span class="text-capitalize tcolor">{{Auth()->user()->name}}</span > Digital Bazar मा स्वागत  छ |  हजुर लाई  <i class="fas fa-praying-hands tcolor ml-2"></i></h3>
 <small class="text-capitalize">तपाई को उत्पादन लाई अन्तर रातरीय बजार मा पुगौने जीमेवारी हाम्रो</small>
<hr class="w-100 mx-auto" style="background-color:#b50697">

@if(session()->has("done"))
<small  class=" gayab tcolor text-center text-capitalize">{{ session()->get("done") }} <i class=" ml-2 fas fa-check fa-2x tcolor"></i>

</small>
@endif






<div class="tab ">
  <button class=" btn tablinks btn-gulabi" onclick="openCity(event, 'London')">पसल बारे</button>
  <button class="tablinks btn-gulabi" onclick="openCity(event, 'Paris')">सामान बारे</button>
  <button class="tablinks btn-gulabi" onclick="openCity(event, 'Tokyo')"><small>प्रकृया बुज्नुस</small></button>
</div>

<div id="London" class="tabcontent " style="display:block;">



@forelse($data as $value)
<table class="table table-striped table-hover">
<tr><td>पसल को नाम</td><td class="tcolor text-capitalize">{{$value->sname}}</td></tr>
<tr><td>पसल को ठेगाना:</td><td class="tcolor text-capitalize">{{$value->saddress}}</td></tr>
<tr><td>पसल को बेनर:</td><td class="tcolor text-capitalize">
<img src='{{Storage::url($value->slogo)}}' alt="no img" class="img-fliud" height="200"/></td></tr>
<tr><td>पसल धनी को नाम:</td><td class="tcolor text-capitalize">{{$value->oname}}</td></tr>
<tr><td>पसल को नंबर:</td><td class="tcolor text-capitalize">{{$value->omobile}}</td></tr>
<tr><td>पसल को ईमेल:</td><td class="tcolor text-capitalize">{{$value->oemail}}</td></tr>
</table>
@empty

<a href=""> <h4 class="mt-5">आफ्नो पसल दर्ता गर्नुस् <i class="fas fa-store tcolor"></i></h4></a>

              <form class="form-group" wire:submit.prevent="pasal_darta">
                        <input wire:model="shopname" type="text" placeholder="पसल को नाम" class="form-control">
                        @error("shopname") <small class="text-danger">{{ $message }}</small> @enderror <br>

                        <input wire:model="shopaddress" type="text " placeholder="पसल को ठेगाना: "  class="form-control">
                        @error("shopaddress") <small class="text-danger">{{ $message }}</small> @enderror <br>

                       

                           
                            <input wire:model="onername" type="text " placeholder="पसल धनी को नाम "  class="form-control">
                            @error("onername") <small class="text-danger">{{ $message }}</small> @enderror <br>
                  
                            <input wire:model="onermobile" type="text " placeholder="पसल धनी को मोबाइल "  class="form-control">
                            @error("onermobile") <small class="text-danger">{{ $message }}</small> @enderror <br>

                         <br>   <input wire:model="oneremail" type="text " placeholder="पसल धनी को ईमेल"  class="form-control">
                            @error("oneremail") <small class="text-danger">{{ $message }}</small> @enderror <br>


                            <label for="setprofile" id="labeforsetprofile" class="mt-2">
                       @if ($slogo)
                         <img src="{{ $slogo->temporaryUrl() }}" height="100">
                         @endif
                         <p id="imgspan">पसल को फोटो </p>
                        
                         <span wire:loading wire:target="slogo" >Uploading...<i class=" ml-2 mt-4 fas fa-spinner text-danger fa-2x"></i></span>

                        <i class="far fa-images fa-2x"></i></label>
                         <input  type="file"  wire:model="slogo"  class="d-none" id="setprofile">
                         @error("slogo") <small class="text-danger">{{ $message }}</small> @enderror <br><br>


                         <button type="submit" class="btn btn-gulabi btn-block">  दर्ता गर्नुस्     </button>
  </form>
  @endforelse
 
</div>





<div id="Paris" class="tabcontent">
  
  <div class="d-flex justify-content-between">
  <p class="tcolor">सामान बारे</p>
  <a href="/aproduct"><small>सामान थपनुस</small></a>
    </div>
 
  <table class="table table-hover table-striped table-sm">
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
      <th><small><i class="far fa-clock fa-2x"></i></small></th>
    </thead>
    <tbody>
    @if(session()->has("paasaldartavayo"))
    @forelse($peoductdata as $val)
      <tr>
      <!-- <td>{{$val->id}}</td> -->
      <td>{{$val->pn}}</td>
      <!-- <td>123</td> -->



     <td>@if(storage::url($val->pi))
     <img src="{{storage::url($val->pi)}}" alt="noimg" height="80">
     @endif
     </td>



     
      <td>{{$val->pd}}</td>
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
<button class="btn "><i class="far fa-edit text-warning"></i></button>
<!-- <button class="btn"><i class="fas fa-trash-alt text-danger"></i></button> -->

<!-- model code start -->
<!-- Button trigger modal -->
<button type="button" class="btn " data-toggle="modal" data-target="#exampleModalLong">
<i class="fas fa-trash-alt text-danger"></i>
</button>

<!-- Modal -->
<div style="width:87%;" class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
<td>{{$val->created_at->diffForHumans()}}</td>

  </tr>
  @empty
   <p class="tcolor text-center">हजुर को आहिले सम्म कुनै सामान ऑनलाइन राखिएको छैन |<br>
    कृपया पहिला पसल दर्ता गर्नुहोला अनि सामान ऑनलाइन राख्नु होला |<i class="fas fa-frown ml-3 fa-2x"></i> </p>

    @endforelse
    @endif
    </tbody>

  </table>



 
</div>

<div id="Tokyo" class="tabcontent">
<p>यसमा आफ्नो उत्पादन राख्‍न लाई निम्न परक्रिया पालना गर्नुस् |</p>

<ul class="prakriya">
<li>
<p>कुनै पनि जानकारी सही मात्र लेख्नुहोला नत्र जानकारी अनुसारको समान नभये ग्राहक ले समान फिर्ता गर्न सक्छ |</p>
   <p>आफूले दर्ता गरेको नाम र पासवर्ड ईमेल हरु गोप्य राख्नु होला|</p>
  <p>ग्राहक ले हजुर को सामान किन्दा हजुर ले दिएको मोबाइल नंबर ईमेल वा हजुर को ठेगाना मा सम्पर्क गर्ने हुनाले सही जानकारी दिनुहोला|</p>
 
  <img src=" storage/thispics/error.jpg" alt=""  class="w-100 img-responsive rounded-thumbnail ">
   
  </li>



  <li>
  <p>पसल बारे मा क्लिक गरेर
     पसल दर्ता गर्नुस् 
 </p>
  <img src=" storage/thispics/pasal_darata.png" alt=""  class="w-100 img-responsive rounded-thumbnail ">


 </li>
 <li >
 <p> पसल दर्ता गरिसके पछी यस्तो देखिन्छ| आफूले दिएको जानकारी ठीक छ छैन मिलाउने </p>
  <img src=" storage/thispics/pasaldatapaxi.png" alt=""  class="w-100 img-responsive rounded-thumbnail ">


 </li>
 
  <li >
  <p> समान बारे मा क्लिक गर्नुस् अनि समान थप्नुस म क्लिक गर्नुस् | </p>
  <img src=" storage/thispics/addproductclickbtn.png" alt=""  class="w-100 img-responsive rounded-thumbnail ">

 </li>

  <li>
  <p> समान बारे जानकारी दिनुस र समान लाई ऑनलाइन राख्नुस</p>  
  <img src=" storage/thispics/samannkoform.png" alt=""  class="w-100 img-responsive rounded-thumbnail ">

 </li>
  <li><p> तपाईले ऑनलाइन राखेको समान को लिस्ट यसरी देखिन्छ| </p>
  <p> यसै ठाउबाट  Action मा  गई  समान लाई हाटाउन र सामान बारे  जानकारी मा फेरबदल गर्न सक्नु हुछ|</p>
    <img src=" storage/thispics/product ko table.png" alt=""  class="w-100 img-responsive rounded-thumbnail ">

  
 </li>
  <br>
  <li class="text-center shadow-none bg-white"><a href="/about">हामी बारे आझ बुज्नुस |</a></li>
</ul>





</div>










</div>


<style>
td{font-size:88%;}
th>small{
  font-weight:bold;
}
</style>






<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script>
  $(document).ready(function(){
    setTimeout(function() { 
       $(".gayab").hide();
    }, 5000);
  });
</script>