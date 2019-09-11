@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i>Incoterm</h1>
@endsection

@section('maincontent')
{{-- modal create --}}
@include('pages.incoterm.create')
{{-- modal edit --}}
{{-- @include('pages.rol.edit') --}}

<div class="page  height-full">
    {{-- header --}}
    @include('pages.account.headbar')
    {{-- end header --}}
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> LIST INCOTERMS </h6>
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
                                        <th><b>STATUS</b></th>
                                        <th><b>OPTIONS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incoterms as $incoterm)
                                    <tr>
                                        <td> {{$incoterm->id}} </td>
                                        <td>
                                            {{$incoterm->name}}
                                        </td>
                                        <td>
                                            {{$incoterm->description}}
                                        </td>
                                        <td>
                                          @if ($incoterm->status == 1)
                                          <span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                          @else
                                          <span class="icon icon-circle s-12  mr-2 text-danger"></span> Inactive </td>
                                          @endif
                                        </td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['incoterm.destroy',$incoterm],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="{{ route('incoterm.edit',$incoterm) }}" class="btn btn-default btn-sm" title="Editar">
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
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Rol">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#account').addClass('active');
    });
    var title = 'Incoterms';
    var colunms = [0,1,2,3];
    dataTableExport(title,colunms);
</script>
@endsection
