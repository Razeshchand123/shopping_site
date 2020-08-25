<div>
<div class="container">
<div class="row">
<div class="col-sm-10 m-auto">

@if(session()->has('done'))
<p>{{session()->get('done')}}</p>
@endif

<table class="table table-hover ">
<thead>
<th>id</th>
<th>name</th>
<th>logo</th>
<th>products</th>
<th>owner</th>
<th>email</th>
<th>number</th>
<th>address</th>
<th colspan="2"> Action</th>
</thead>
<tbody>
@forelse($pasalharu as $value)

<tr>
<td>{{$value->id}}</td>
<td>{{$value->sname}}</td>
<td><img src='{{Storage::url($value->slogo)}}' alt="no img" class="img-fliud" height="50"/></td>
<td>255</td>
<td>{{$value->oname}}</td>
<td>{{$value->oemail}}</td>
<td>{{$value->omobile}}</td>
<td>{{$value->saddress}}</td>
<!-- <button wire:click="$emitTo('oneshop','detail')">detail</button> -->

<td><a href="/oneshop/{{$value->id}}">detail</a></td>


<td>delete</td>
</tr>

@empty

@endforelse
</tbody>



</table>








</div>
</div>
</div>



</div>
