@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i>{{__('Bank Transaction') }}</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    @include('pages.payments.headbar')
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.payments.bank_transaction.create')
{{-- modal show --}}
@include('pages.payments.bank_transaction.show')
{{-- modal edit --}}
@include('pages.payments.bank_transaction.edit')


<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('LIST BANKS TRANSACTION') }} </h6>
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
                                        <th><b>{{__('BANK') }}</b></th>
                                        <th><b>{{__('AMOUNT') }}</b></th>
                                        <th><b>{{__('REFERENCE') }}</b></th>
                                        <th><b>{{__('DATE') }}</b></th>
                                        <th><b>{{__('USER') }}</b></th>
                                        <th><b>{{__('CREATED') }}</b></th>
                                        <th><b>{{__('UPDATED') }}</b></th>
                                        <th><b>{{__('OPTIONS') }}</b></th>
                                    </tr>
                                </thead>
                                <tbody id="body">
                                    @foreach ($trans as $tra)
                                <tr class="tbody">
                                    <td> {{$tra->id}}</td>
                                    <td>{{ $tra->banks->name }}</td>
                                    <td>{{ $tra->amount }}</td>
                                    <td>{{ $tra->reference }}</td>
                                    <td>{{ $tra->date }}</td>
                                    <td>{{ $tra->Users->fullname }}</td>
                                    <td>{{ $tra->created_at }}</td>
                                    <td>{{ $tra->updated_at }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showDataPayment('{{ route('bank_transaction.show', $tra->id) }}')">
                                            <i class="icon-eye text-info"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="obtenerDatosGet('{{ route('bank_transaction.edit',$tra->id) }}', '{{ route('bank_transaction.update',$tra->id) }}')">
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
        $('#bank_transaction').addClass('active');
    });
    var title = 'Bank Transaction';
    var colunms = [0,1,2,3,4];
    dataTableExport(title,colunms);
</script>

@endsection