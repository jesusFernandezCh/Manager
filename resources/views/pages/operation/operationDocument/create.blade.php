@extends('layouts.app')
@section('title')
<div class="nav-title text-white col-12"> 
	<i class="icon-person"></i>
	<a href="{{ route('operations.index') }}">{{__('OperationDocument')}}</a>
</div>
@endsection
@section('top-menu')
	@include($route)
@endsection
@section('maincontent')
<div class="page height-full" style="margin-top: 130px">
	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card" style="margin-top:0px">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class=""></i> {{__('Add New Documuent')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::open(['route'=>'operationDocument.store','method'=>'POST', 'class'=>'', 'id'=>'guardarRegistro']) !!}
						@include('pages.operation.operationDocument.forml')
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('operationIndexAsoc') }}" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
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
        $('#operationDocument').addClass('active');
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
