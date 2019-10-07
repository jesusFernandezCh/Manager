@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-truck s-18"></i>Account Courrier</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    {{-- @include('') --}}
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.account.accountCourrier.create')
{{-- modal edit --}}
{{-- @include('pages.rol.edit') --}}

<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> LIST ACCOUNT COURRIER </h6>
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
                                        <th><b>ACCOUNT</b></th>
                                        <th><b>RECIPIENT</b></th>
                                        <th><b>ADDRESS</b></th>
                                        <th><b>CONTACT/TELEF</b></th>
                                        <th><b>OPTIONS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courriers as $courrier)
                                    <tr>
                                        <td>
                                            {{$courrier->id}}
                                        </td>
                                        <td>
                                            <div>
                                                {{$courrier->account->name}}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{$courrier->recipient}}    
                                            </div>
                                        </td>
                                        <td>
                                            {{$courrier->address}}
                                        </td>
                                        <td>
                                            <div>
                                                <small>Contact:{{$courrier->contact}}</small>
                                                <div>
                                                    <small>Telf:{{$courrier->telf}}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['accountCourrier.destroy',$courrier],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="{{ route('accountCourrier.edit',$courrier) }}" class="btn btn-default btn-sm" title="Editar">
                                                <i class="icon-pencil text-info"></i>
                                            </a>
                                            <button class="btn btn-default btn-sm" onclick="confirm('¿Realmente deseas borrar el registro?')">
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
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Courrier">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#courrier').addClass('active');
    });
    var title = 'Accounts Contact';
    var colunms = [0,1,2,3,4];
    dataTableExport(title,colunms);
</script>
@endsection