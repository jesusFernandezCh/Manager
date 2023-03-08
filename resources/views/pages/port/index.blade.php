@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-anchor s-18"></i> Port</h1>
@endsection

@section('maincontent')
{{-- modal create --}}
@include('pages.port.create')
{{-- modal edit --}}
{{-- @include('pages.rol.edit') --}}

<div class="page  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">

            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link" href="#" role="tab" aria-controls="v-pills-all"><i class=""></i>Accounts</a>
                    </li>
                    <li>
                        <a class="nav-link active" id="v-pills-buyers-tab" data-toggle="pill" href="#" role="tab"
                        aria-controls="v-pills-buyers"><i class=""></i> Accounts Categories</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#" role="tab" aria-controls="v-pills-sellers"><i class=""></i> Account meta</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#" role="tab" aria-controls="v-pills-sellers"><i class=""></i> Account meta type</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#" role="tab" aria-controls="v-pills-sellers"><i class=""></i>Country</a>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> LIST PORTS </h6>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="form-group">
                            <table id="example2" class="table table-bordered table-hover"
                                data-order='[[ 0, "desc" ]]' data-page-length='10'>
                                <thead>
                                    <tr>
                                        <th><b>ID</b></th>
                                        <th><b>NAME</b></th>
                                        <th><b>DESCRIPTION</b></th>
                                        <th><b>OPTIONS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ports as $port)
                                    <tr>
                                        <td> {{$port->id}} </td>
                                        <td> {{$port->name}} </td>
                                        <td> {{$port->description}} </td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['port.destroy',$port],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="{{ route('port.edit',$port) }}" class="btn btn-default btn-sm" title="Editar">
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
    var title = 'Ports';
    var colunms = [0,1,2];
    dataTableExport(title,colunms);
</script>
@endsection