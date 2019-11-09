<div class="nav-title text-white col-12">
	<i class= @if (isset($icon)) {{$icon}} @endif></i>
	<a href="{{ route('operationIndexAsoc') }}">{{__('Operation')}}</a> > {{$operation->account->name}} > {{$operation->code}}
</div>
<div class="col-12">
	<div class="text-white">Status: @if (isset($operation->status)){{$operation->status->name}}@endif</div>
</div>
