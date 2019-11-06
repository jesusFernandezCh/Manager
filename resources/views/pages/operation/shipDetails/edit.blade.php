@extends('layouts.app')
@section('title')
	@include('pages.operation.partial.title')
@endsection
@section('top-menu')
	@include($topMenu)
@endsection
@section('maincontent')

@include('pages.operation.shipTotal.edit')
@include('pages.operation.shipTotal.create')

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
	                        <h6><i class=""></i> {{__('EDIT SHIP DETAILS')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($shipDetail,['route'=>["shipDetails.update",$shipDetail->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
						@include('pages.operation.shipDetails.forml')
						<br>
						<div class="col-md-12 text-right">
                            <a href="{{ route('operationIndexAsoc') }}" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
							<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{_('Save data')}}</button>
						</div>
                        {!! Form::close() !!}
                        <br>
                        @include('pages.operation.shipTotal.index')
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
        $('#shipDetails').addClass('active');
        var t = $('#example').DataTable({
            "serverSide": true,
            "ajax":"{{ url('shipTotals') }}",
            "columns":[
                {data: 'id'},
                {data: 'description'},
                {data: 'order_qty'},
                {data: 'nb_package'},
                {data: 'net_qty'},
                {data: 'gross_weight'},
                {data: 'btn'},
            ]
        });
        // $('#save').on('click',function(){
        //     var forml   = $('#saveDataT').serialize();
        //     var url     = $('#saveDataT').attr("action");
        //     var method  = $('#saveDataT').attr("method");

        //     $.ajax({
        //         url: url,
        //         type: method,
        //         data: forml,
        //         cache: false,
        //         success: function(result){
        //             $('.modal').modal('hide');
        //             t.ajax.reload();
        //             toastr.success("Add Prodduct","Success");
        //         },
        //         error: function(msj) {
        //         var message = msj.responseText;
        //         var errors = $.parseJSON(msj.responseText);
        //             $.each(errors.errors, function(key, value) {
        //             toastr.error(value,"Error");
        //             });
        //         },
        //         timeout: 15000
        //     });
        // });

        // $('#btnDelete').on('click',function(){
        //     var token = $("#token").attr("content");
        //     var url = $('#fomrDelete').attr("action");

        //     $.ajax({
        //         url: url,
        //         headers: {'X-CSRF-TOKEN': token},
        //         type: 'DELETE',
        //         success: function(result) {
        //             t.ajax.reload();
        //             toastr.success("Delete Prodduct","Success");
        //         },
        //         error: function(msj) {
        //             var message = msj.responseText;
        //             var errors = $.parseJSON(msj.responseText);
        //             $.each(errors.errors, function(key, value) {
        //                 toastr.error(value,"Error");
        //             });
        //         },
        //         timeout: 15000
        //     });
        // });
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

