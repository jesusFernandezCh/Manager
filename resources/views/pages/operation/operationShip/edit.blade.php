@extends('layouts.app')
@section('title')
   @include('pages.operation.partial.title')
@endsection
@section('top-menu')
	@include($topMenu)
@endsection
@section('maincontent')
<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="col-md-12">
                <div class="card">
                    <div class="form-group">
                        <div class="card-header white">
                            <h6><i class="icon icon-pencil"></i> {{ __('EDIT OPERATION SHIP') }}</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::model($operationShip,['route'=>["operationShip.update",$operationShip->id],'method'=>'PUT','class'=>'formlDinamic','id'=>'DataUpdate']) !!}
                        <div class="col-md-12">
                            @include('pages.operation.operationShip.forml');
                        </div>
                        <br>
                        <div class="col-md-12 text-right">
                            <a href="{{ route('operations.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
                            <button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
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
        $('#InstShipPlain').addClass('active');
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