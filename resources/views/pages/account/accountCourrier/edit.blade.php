@extends('layouts.app')
@section('title')
<div class="nav-title text-white col-12"> 
	<i class="icon icon-truck"></i>{{__('Account Courrier')}}
</div>
@endsection
@section('maincontent')
<div class="page height-full" style="margin-top: 130px">
	<div>
        @include('alerts.toastr')
    </div>
	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card" style="margin-top:0px">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class=""></i> {{__('ACCOUNT CUORRIER')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($accountCourrier,['route'=>["accountCourrier.update",$accountCourrier->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
							@include('pages.account.accountCourrier.forml')
							@if (isset($account))
								{!! Form::hidden('route', route('accountCourrier.show',$account), ['id'=>'route']) !!}
							@else
                            	{!! Form::hidden('route', route('accountCourrier.index'), ['id'=>'route']) !!}
							@endif
						<br>
						<div class="col-md-12 text-right">
							<a href="
							@if (isset($account))
								{{ route('accountCourrier.show',$account) }}
							@else
								{{ route('accountCourrier.index') }}
							@endif
							" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
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
