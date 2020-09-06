<div>


<h5 style="margin-top:13%">aafno jankari dinus</h5>
{{$states}}
<form  wire:submit.prevent="textdetail" class="form-group"><br>
<input type="text" wire:model="buyername" class="form-control form-control-sm" placeholder="तपाईको नाम"><br>


<select class="form-control form-control-sm" wire:model="states" >
         <option  value="1">प्रदेश न.१  </option>
         <option value="2">प्रदेश न.२ </option>
         <option value="3"> बागमती  प्रदेश</option>
         <option value="4">गण्डकी प्रदेश</option>
         <option value="5">प्रदेश न.५ </option>
         <option value="6">कर्णाली प्रदेश</option>
         <option value="7">सुदूरपचिम प्रदेश</option>
        
  </select>
      
<br>

<select class="form-control form-control-sm" >





@if($states==1)
<option value="इलाम">इलाम</option>
      <option value="झापा">	झापा</option>
        <option value="ताप्लेजुङ">ताप्लेजुङ</option>
        <option value="तेरथुम">तेरथुम</option>
        <option value="सुनसरी">सुनसरी</option>
        <option value="भोजपुर">भोजपुर</option>
        <option value="पाँचथर">पाँचथर</option>
        <option value="मोरङ">मोरङ</option> 
      <option value="धनकुटा">धनकुटा</option>
       <option value="सङ्खुवासभा">सङ्खुवासभा</option>
       <option value="उदयपुर">उदयपुर</option> 
       <option value="सोलुखुम्बु">सोलुखुम्बु</option>
        <option value="खोटाङ">खोटाङ</option>
        <option value="ओखलढुंगा">ओखलढुंगा</option>
      
 @elseif($states==2) 
     
     <option value="पर्सा">पर्सा</option>  
      <option value="बारा">बारा</option>
        <option value="सप्तरी">सप्तरी</option>
        <option value="सर्लाही">सर्लाही</option>
        <option value="महोत्तरी">महोत्तरी</option>
        <option value="रौतहट">रौतहट</option>
        <option value="धनुषा">धनुषा</option>
        <option value="सिराहा">सिराहा</option>
      
 @elseif($states==3)  
       <option value="चितवन">चितवन</option>
       <option value="धादिङ">धादिङ</option>
      <option value="दोलखा">दोलखा</option>
      <option value="काभ्रेपलान्चोक">काभ्रेपलान्चोक</option>
      <option value="काठमाण्डौ">काठमाण्डौ</option>
      <option value="भक्तपुर">भक्तपुर</option>
      <option value="मकवानपुर">मकवानपुर</option>
         <option value="ललितपुर">ललितपुर</option> 
         <option value="रामेछाप">रामेछाप</option>
         <option value="रसुवा">रसुवा</option>
         <option value="सिन्धुली">सिन्धुली</option>
        <option value="नुवाकोट">नुवाकोट</option> 
         <option value="सिन्धुपाल्चोक">	सिन्धुपाल्चोक</option>

        
      
 @elseif($states==4)  
    <option value="लमजुङ">लमजुङ</option>  
        <option value="वाग्लुङ">वाग्लुङ</option>
        <option value="कास्की">कास्की</option>
        <option value="गोर्खा">गोर्खा</option>
        <option value="मुस्ताङ">मुस्ताङ</option>
         <option value="म्याग्दि">म्याग्दि</option>
         <option value="मनाङ">मनाङ</option>
         <option value="स्याङ्जा">स्याङ्जा</option>
         <option value="पर्वत">पर्वत</option>
        <option value="	तनहू">	तनहू</option>
        <option value="nawalpur">nawalpur</option>
       

 @elseif($states==5) 
    
       <option value="दाङ">दाङ</option> 
       <option value="बर्दिया">बर्दिया</option>
        <option value="बाँके">बाँके</option>
        <option value="गुल्मी">गुल्मी</option>
        <option value="पूर्वी रूकुम ">पूर्वी रूकुम </option>
        <option value="प्युठान">प्युठान</option>
        <option value="रुपन्देही">रुपन्देही</option>
        <option value="पाल्पा">पाल्पा</option>
        <option value="रोल्पा">रोल्पा</option>
         <option value="कपिलबस्तु">कपिलबस्तु</option>
         <option value="अर्घाखाँची">अर्घाखाँची</option>      
        


         @elseif($states==6) 
         <option value="सुर्खेत">सुर्खेत</option>
       <option value="डोल्पा">डोल्पा</option>
        <option value="हुम्ला">हुम्ला</option>
        <option value="जाजरकोट">जाजरकोट</option>
       <option value="जुम्ला">जुम्ला</option>
       <option value="मुगू">मुगू</option>
       <option value="कालिकोट">कालिकोट</option>
       <option value="रुकुम">रुकुम</option>
        <option value="पुर्वीरुकुम"> पुर्वी रुकुम</option>
        <option value="दैलेख">दैलेख</option>
        <option value="सल्यान">सल्यान</option>
 @elseif($states==7) 

 <option value="कञ्चनपुर">कञ्चनपुर</option>
 <option value="कैलाली">कैलाली</option>
 <option value="दार्चुला">दार्चुला</option>  
  <option value="डोटी">डोटी</option>
  <option value="बैतडी">बैतडी</option>
 <option value="बझाङ">बझाङ</option>
 <option value="अछाम">अछाम</option>
 <option value="डडेलधुरा">डडेलधुरा</option>
 <option value="बाजुरा">बाजुरा</option>
      
 @else     
 <p class="text-danger">plese select your distrci</p>  
@endif
       



    
       

</select>

 <br> 
<input type="text" wire:model="buyervillagename " class="form-control form-control-sm" placeholder="तपाईको गाउ वा सहरको नाम "><br>
<input type="text" wire:model="buyerward " class="form-control form-control-sm" placeholder="तपाईको वार्ड "><br>
<input type="text"wire:model="landmark " class="form-control form-control-sm" placeholder="घर नजिक को प्रसिद्ध ठाउ"><br>
<input type="text" wire:model="buyermobile " class="form-control form-control-sm" placeholder="तपाईको मोबाइल नंबर"><br>
<small>yo number ma varification code aaun6</small><br>


</form>


</div>
