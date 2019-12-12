<div class="nav-title text-white col-12">
	<i class= @if (isset($icon)) {{$icon}} @endif></i>
	<a href="{{ route('operationIndexAsoc') }}">{{__('Operation')}} > </a>
	<small>{{$operation->code}}/{{$operation->Supplier->name}}/{{$operation->account->name}}/{{$operation->customer->name}}</small>
</div>
<div class="col-12">
	<div class="text-white">
		Status: @if (isset($operation->status)){{$operation->status->name}}@endif
		/{{ $operation->StatusComments }}
	</div>
</div>
