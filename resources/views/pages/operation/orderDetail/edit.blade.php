@extends('layouts.app')
@section('title')
	@include('pages.operation.partial.title')
@endsection
@section('top-menu')
	@include($route)
@endsection
@section('maincontent')
<div class="page height-full" style="margin-top: 130px">
	<div>
        @include('alerts.toastr')
    </div>
	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card" style="margin-top: 0px">
	                <div class="form-group">
	                    <div class="card-header white">
							<div class="row">
								<div class="col-4" class="">
									<h5><i class=""></i> {{__('Order Detail edit')}} </h5>
								</div>
								<div class="col-8 text-right">
									<a href="{{ route('pdf','factura4') }}" title="{{ __('Export PDF') }}" target="_blank"><button type="button" class="btn btn-primary btn-sm" style="border-radius:30px !important">S Order</button></a>
									<a href="{{ route('pdf','factura5') }}" title="{{ __('Export PDF') }}" target="_blank"><button type="button" class="btn btn-primary btn-sm" style="border-radius:30px !important">P Order</button></a>
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="card-body">

	                	{!! Form::model($operation,['route'=>["order_details.update",$operation->id],'method'=>'PUT']) !!}
	                	@include('pages.operation.orderDetail.formlEdit')
	                	<br>
	                	@include('pages.operation.orderBudget.create')
						{!! Form::open(['route'=>'order_details.store','method'=>'POST', 'class'=>'', 'id'=>'guardarRegistro']) !!}

						<div class="col-md-12 text-right">
							<a href="{{ route('operations.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
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
@section('js')
<script>
    $(document).ready(function() {
        $('#order_details').addClass('active');
    });

    $('.datepicker').datetimepicker({
    i18n:{
    de:{
       months:[
        'Januar','Februar','März','April',
        'Mai','Juni','Juli','August',
        'September','Oktober','November','Dezember',
       ],
       dayOfWeek:[
        "So.", "Mo", "Di", "Mi",
        "Do", "Fr", "Sa.",
       ]
      }
     },
     timepicker:false,
     format:'Y-m-d'
    });


</script>
@endsection

