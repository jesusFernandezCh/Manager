@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i>{{__('BANK') }}</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    @include('pages.payments.headbar')
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
	@include('pages.payments.bank.create')
{{-- modal show --}}
@include('pages.payments.bank.show')
{{-- modal edit --}}
@include('pages.payments.bank.edit')


<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('LIST BANKS') }} </h6>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="form-group">
                            <table id="example2" class="table table-bordered table-hover"
                                data-order='[[ 0, "desc" ]]' data-page-length='10'>
                                <thead>
                                    <tr>
                                        <th><b>{{__('ID') }}</b></th>
                                        <th><b>{{__('NAME') }}</b></th>
                                        <th><b>{{__('DESCRIPTION') }}</b></th>
                                        <th><b>{{__('ESTATUS') }}</b></th>
                                        <th><b>{{__('OPTIONS') }}</b></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                @foreach ($bank as $bank)
                                <tr class="tbody">
                                    <td> {{$bank->id}}</td>
                                    <td>{{ $bank->name }}</td>
                                    <td>{{ $bank->description }}</td>
                                    <td>
                                        @if ($bank->active == 1)
                                        <span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>

                                        @elseif($bank->active == 2)
                                        <span class="icon icon-circle s-12  mr-2 text-danger"></span> Inactive </td>

                                        @else
                                        <span class="icon icon-circle s-12  mr-2 text-warning"></span> Suspended </td>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('bank.show', $bank->id) }}')">
                                            <i class="icon-eye text-info"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="obtenerDatosGet('{{ route('bank.edit',$bank->id) }}', '{{ route('bank.update',$bank->id) }}')">
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
    <!--Add New Message Fab Button-->
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Rol">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#bank').addClass('active');
    });
    var title = 'Bank';
    var colunms = [0,1,2,3,4];
    dataTableExport(title,colunms);
</script>
@endsection
