@extends('layouts.app')
@section('title')
<div class="nav-title text-white col-12"> 
	<i class="icon icon-documents3"></i>
	<a href="{{ route('docsInstruction.index') }}">{{__('DocsInstruction')}}</a>
</div>
@endsection
@section('top-menu')
	{{--  @include($topMenu)  --}}
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
	                        <h6><i class="icon icon-pencil"></i> {{__(' EDIT DOCS INSTRUCTION')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($docsInstruction,['route'=>["docsInstruction.update",$docsInstruction->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
						    @include('pages.account.docsInstruction.forml')
							{!! Form::hidden('route', route('docsInstruction.show',$docsInstruction->account_id), ['id'=>'route']) !!}
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('docsInstruction.show',$docsInstruction->account_id) }}" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
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
        $('#docsInstruction').addClass('active');
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

