<div class="d-flex justify-content-center">


@forelse($ulist as $val)
<p>{{$val->name}}</p>
<button wire:click="deleteuser({{$val->id}})">click</button>
<hr>
@empty
@endforelse






</div>



    