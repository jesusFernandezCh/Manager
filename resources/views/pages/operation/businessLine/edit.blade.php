@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> 
	<i class="icon icon-business_center"></i>{{__('Business line')}}
</h1>
@endsection
@section('top-menu')
    {{-- @include('pages.account.headbar') --}}
@endsection
@section('maincontent')
<div class="page  height-full">

	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class="icon icon-pencil"></i> {{__('EDIT BUSINESS LINE')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($business,['route'=>["business.update",$business->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
							@include('pages.operation.businessLine.forml')
							{!! Form::hidden('route', route('business.index'), ['id'=>'route']) !!}
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('business.index') }}" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
							<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{_('Save data')}}</button>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
        	</div>
		</div>
	</div>
</div>
@endsection

