@extends('layouts.app')

@section('title')
<h1 class="nav-title text-white"> <i class="icon  icon-local_shipping"></i>
    Profit Centers</h1>
@endsection

@section('maincontent')
{{-- modal create --}}
@include('pages.profitCenter.create')
{{-- modal edit --}}
@include('pages.profitCenter.edit')
{{-- modal show --}}
@include('pages.profitCenter.show')


<div class="page  height-full">
    <div class="form-group">
        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row justify-content-between">
                    <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                        <li>
                            <a class="nav-link" href="{{ route('user.index') }}" role="tab" aria-controls="v-pills-all"><i class="icon-person"></i> Users</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('rol.index') }}" role="tab" aria-controls="v-pills-buyers"><i class="icon icon-face"></i> Roles/Profiles</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ route('profitCenter.index') }}" role="tab" aria-controls="v-pills-sellers"><i class="icon  icon-local_shipping"></i> Profit Centers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
     <div>
        @include('alerts.toastr')
    </div>
    <div class="card my-3 no-b">
        <div class="card-body table-responsive">
            <div id="table">
                <table id="example2" class="table table-bordered table-hover" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                <thead>
                <tr>
                    <th><b>Id</b></th>
                    <th><b>NAME</b></th>
                    <th><b>CODE</b></th>
                    <th><b>STATUS</b></th>
                    <th><b>OPTIONS</b></th>
                </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($profits as $profit)
                        <tr class="tbody">
                            <td>{{ $profit->id }}</td>
                            <td>{{ $profit->name }}</td>
                            <td><small>{{ $profit->code }}</small></td>
                            <td>
                                @if ($profit->status == 'active')
                                    <span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                @else
                                    <span class="icon icon-circle s-12  mr-2 text-danger"></span> Inactive </td>
                                @endif
                            </td>
                            <td class="text-center">
                                {!! Form::open(['route'=>['profitCenter.destroy',$profit],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('profitCenter.edit',$profit) }}')">
                                    <i class="icon-eye text-info"></i>
                                </a>
                                <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="obtenerDatosGet('{{ route('profitCenter.edit',$profit) }}', '{{ route('profitCenter.update',$profit->id) }}')">
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
 <!--Add New Message Fab Button-->
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add User">
        <i class="icon-add"></i>
    </a>
@endsection
@section('js')
<script>
    var title = 'Profits Centers';
    var colunms = [0,1,2,3];
    dataTableExport(title,colunms);
</script>
@endsection