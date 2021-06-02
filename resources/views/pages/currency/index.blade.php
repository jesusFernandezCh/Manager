@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> <i class="icon-monetization_on"></i>
Currency</h1>
@endsection
@section('maincontent')
{{-- modal create --}}
{{-- @include('pages.currency.create') --}}
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
                        <h6> LIST CURRENCIES </h6>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <div class="row text-right"> --}}
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <a href="{{ URL::to('downloadCurrency/xlsx') }}" class="btn btn-default btn-sm" title="Export table excel"><i class="icon-file-excel-o text-info"></i></a>
                            </div>
                        </div>
                    {{-- </div> --}}
                    <div id="table" class=" table-responsive">
                        <table id="example2" class="table table-bordered table-hover data-tables" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                            <thead>
                                <tr>
                                    <th><b>ID</b></th>
                                    <th><b>EMPLEADO</b></th>
                                    <th><b>SEXO</b></th>
                                    <th><b>CARGO</b></th>
                                    <th><b>STATUS</b></th>
                                    <th><b>OPTIONS</b></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @foreach ($empleados as $empleado)
                                <tr class="tbody">
                                    <td> {{$empleado->id}}</td>
                                    <td>
                                        <div class="avatar avatar-md mr-3 mt-1 float-left">
                                            {{-- @if ($emplado->foto != null) --}}
                                            {{-- {{ Html::image('././img/avatar/'.$user->image) }} --}}
                                            {{ Html::image('././img/avatar/default.png') }}
                                            {{-- @else --}}
                                            {{-- {{ Html::image('././img/avatar/default.png') }} --}}
                                            {{-- @endif --}}
                                        </div>
                                        <div>
                                            <span class="text-primary">{{$empleado->Persona->fullName()}}</span>
                                            <div>
                                                <small>CI: {{$empleado->Persona->cedula}} </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$empleado->Persona->sexo}}</td>
                                    <td>{{$empleado->cargo}}</td>
                                    <td>
                                        @if ($empleado->active == 1) --}}
                                        <span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                        
                                        @elseif($empleado->active == 2)
                                        <span class="icon icon-circle s-12  mr-2 text-danger"></span> Inactive </td>
                                        
                                        @else
                                        <span class="icon icon-circle s-12  mr-2 text-warning"></span> Suspended </td>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        {{-- <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('currency.show', $currency->id) }}')">
                                            <i class="icon-eye text-info"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="obtenerDatosGet('{{ route('currency.edit',$currency->id) }}', '{{ route('currency.update',$currency->id) }}')">
                                            <i class="icon-pencil text-info"></i>
                                        </a> --}}
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
$(".file").fileinput({
// theme: 'gly',
// uploadUrl: '#',
showCaption: false,
showRemove: false,
showUpload: false,
showBrowse: false,
browseOnZoneClick: true,
});
</script>
@endsection