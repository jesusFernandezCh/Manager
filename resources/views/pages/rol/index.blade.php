@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> 
    <i class="icon-person"></i>
    Role
</h1>
@endsection

@section('maincontent')
{{-- modal create --}}
@include('pages.rol.create')
{{-- modal edit --}}
{{-- @include('pages.rol.edit') --}}

<div class="page  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}" role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>Users</a>
                    </li>
                    <li>
                        <a class="nav-link active" id="v-pills-buyers-tab" data-toggle="pill" href="#" role="tab"
                        aria-controls="v-pills-buyers"><i class="icon icon-face"></i> Roles/Profiles</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('profitCenter.index') }}" role="tab" aria-controls="v-pills-sellers"><i class="icon  icon-local_shipping"></i> Profit Centers</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('permission.index') }}" role="tab" aria-controls="v-pills-sellers"><i class="icon-key6"></i> Permissions</a>
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
                        <h6> LIST ROLE </h6>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="form-group">
                            <table id="example2" class="table table-bordered table-hover data-tables"
                                data-options='{ "paging": false; "searching":false}'>
                                <thead>
                                    <tr>
                                        <th><b>ID</b></th>
                                        <th><b>NAME</b></th>
                                        <th><b>SLUG</b></th>
                                        <th><b>DESCRIPTION</b></th>
                                        <th><b>PERMISSIONS</b></th>
                                        <th><b>OPTIONS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $rol)
                                    <tr>
                                        <td>{{ $rol->id }}</td>
                                        <td>{{ $rol->name }}</td>
                                        <td>{{ $rol->slug }}</td>
                                        <td>{{ $rol->description }}</td>
                                        <td>
                                            @foreach ($rol->Permissions as $element) 
                                                <span class="badge badge-primary r-5">{{$element->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['rol.destroy',$rol],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="{{ route('rol.edit',$rol) }}" class="btn btn-default btn-sm" title="Editar">
                                                <i class="icon-pencil text-info"></i>
                                            </a> 
                                            <button class="btn btn-default btn-sm">
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