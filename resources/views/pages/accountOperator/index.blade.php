@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i>Accounts</h1>
@endsection

@section('maincontent')
{{-- modal create --}}
@include('pages.accountOperator.create')
{{-- modal edit --}}
{{-- @include('pages.rol.edit') --}}

<div class="page  height-full">
    {{-- header --}}
    @include('pages.accountOperator.headbar')
    {{-- end header --}}
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> LIST ACCOUNTS </h6>
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
                                        <th><b>NAME/WEBSITE</b></th>
                                        <th><b>COUNTRY</b></th>
                                        <th><b>CATEGORY</b></th>
                                        <th><b>OPTIONS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accounts as $account)
                                    <tr>
                                        <td> {{$account->id}} </td>
                                        <td>
                                            <div>
                                                {{$account->name}} 
                                                <div>
                                                    <small>{{$account->website}}</small>
                                                </div>
                                            </div> 
                                        </td>
                                        <td> 
                                            @if (isset($account->countries))
                                                {{$account->countries->name}}
                                            @endif
                                        </td>
                                        <td>
                                            @foreach ($account->categories as $element)
                                                <span class="badge badge-primary r-5">{{$element->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            <div class="">
                                                {!! Form::open(['route'=>['accountOperator.destroy',$account],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                                <a href="{{ route('accountOperator.show',$account) }}" class="btn btn-default btn-sm" title="Detalles">
                                                    <i class="icon-eye text-info text-info"></i>
                                                </a> 
                                                <button class="btn btn-default btn-sm" onclick="confirm('¿Realmente deseas borrar el registro?')">
                                                    <i class="icon-trash-can3 text-danger"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
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
        $('#accounts').addClass('active');
    });
    var title = 'Accounts';
    var colunms = [0,1,2,3,4];
    dataTableExport(title,colunms);
</script>
@endsection