@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
    <i class="icon icon-business_center s-18"></i>
    {{__('Mv Concepts')}}
</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    {{--  @include($topMenu)  --}}
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.payments.mvConcept.edit')
@include('pages.payments.mvConcept.create')

<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('MV CONCEPTS')}} </h6>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="form-group">
                            <table id="example2" class="table table-bordered table-hover"
                                data-order='[[ 0, "desc" ]]' data-page-length='10'>
                                <thead>
                                    <tr>
                                        <th><b>{{__('Id')}}</b></th>
                                        <th><b>{{__('Concept')}}</b></th>
                                        <th width='15%'><b>Options</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mvConcepts as $mvConcept)
                                    <tr>
                                        <td>{{$mvConcept->id}}</td>
                                        <td>{{$mvConcept->concept}}</td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['mvConcepts.destroy',$mvConcept],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#edit" onclick="obtenerDatosGet('{{ route('mvConcepts.edit',$mvConcept) }}', '{{ route('mvConcepts.update',$mvConcept->id) }}')">
                                                <i class="icon-pencil text-info"></i>
                                            </a>
                                            <button class="btn btn-default btn-sm" onclick="return confirm('¿Realmente deseas borrar el registro?')">
                                                <i class="icon-trash-can3 text-danger"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Rol">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#business').addClass('active');
    });
    var title = 'Business Line';
    var colunms = [0,1,2];
    dataTableExport(title,colunms);
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