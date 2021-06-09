@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> <i class="icon icon-group"></i>
Empleados</h1>
@section('top-menu')
    {{-- header --}}
    @include('pages.empleado.headbar')
    {{-- end header --}}
@endsection
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.empleado.create')
{{-- modal show --}}
{{-- @include('pages.currency.show') --}}
{{-- modal edit --}}
{{-- @include('pages.currency.edit') --}}
<div class="page height-full">

    {{-- alerts --}}
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> LISTA DE EMPLEADOS </h6>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <div class="row text-right"> --}}
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                {{-- <a href="{{ URL::to('downloadCurrency/xlsx') }}" class="btn btn-default btn-sm" title="Export table excel"><i class="icon-file-excel-o text-info"></i></a> --}}
                            </div>
                        </div>
                    {{-- </div> --}}
                    <div id="table" class=" table-responsive">
                        <table id="example2" class="table table-bordered table-hover" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                            <thead>
                                <tr>
                                    <th><b>EMPLEADO</b></th>
                                    <th><b>NOMBRES Y APELLIDOS</b></th>
                                    <th><b>CEDULA</b></th>
                                    <th><b>SEXO</b></th>
                                    <th><b>CREDENCIAL</b></th>
                                    <th><b>CARGO</b></th>
                                    <th><b>INGRESO</b></th>
                                    <th><b>ESTATUS</b></th>
                                    <th><b>OPCION</b></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @foreach ($empleados as $empleado)
                                <tr class="tbody">
                                    <td>
                                        <div class="avatar avatar-md mr-3 mt-1 float-left">
                                            {{ Html::image('././img/avatar/'.$empleado->Persona->imagen) }}
                                        </div>
                                        <div>
                                            <span class="text-primary">{{$empleado->Persona->fullName()}}</span>
                                            <div>
                                                <small>CI: {{$empleado->Persona->cedula}} </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$empleado->Persona->fullName()}}</td>
                                    <td>{{$empleado->Persona->cedula}}</td>
                                    <td>{{$empleado->Persona->sexo}}</td>
                                    <td>{{$empleado->ct}}</td>
                                    <td>{{$empleado->Cargo->valor}}</td>
                                    <td>{{$empleado->fecha_ingreso}}</td>
                                    <td>
                                        @switch($empleado->status)
                                            @case("active")
                                                <span class="icon icon-circle s-12  mr-2 text-success"></span> Activo
                                            @break
                                            @case("inactive")
                                                <span class="icon icon-circle s-12  mr-2 text-warning"></span> Vacaciones
                                            @break
                                            @case("suspended")
                                                <span class="icon icon-circle s-12  mr-2 text-danger"></span> Inactivo
                                            @break
                                            @default
                                                
                                        @endswitch
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('empleados.show', $empleado->id) }}')">
                                            <i class="icon-eye text-info"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="obtenerDatosGet('{{ route('empleados.edit',$empleado->id) }}', '{{ route('empleados.update',$empleado->id) }}')">
                                            <i class="icon-pencil text-info"></i>
                                        </a>
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
<a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Currency">
    <i class="icon-add"></i>
</a>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        // $('#category').addClass('active');
    });
    var title = 'Accounts Categories';
    var colunms = [1,2,3,4];
    var columnsIvisibles = [1,2];
    var filtrar = true;
    dataTableExport(title,colunms, columnsIvisibles, filtrar);
    $('.datepicker').datetimepicker({
     timepicker:false,
     format:'Y-m-d',
    });
    
</script>

@endsection