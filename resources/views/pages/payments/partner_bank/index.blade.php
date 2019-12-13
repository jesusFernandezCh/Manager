@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i>{{__('PARTNER BANKS') }}</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    @include('pages.payments.headbar')
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.payments.partner_bank.create')
{{-- modal edit --}}
@include('pages.payments.partner_bank.edit')
{{-- modal show --}}
@include('pages.payments.partner_bank.show')

<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('LIST PARTNER BANKS') }}</h6>
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
                                        <th><b>{{__('COMPANY') }}</b></th>
                                        <th><b>{{__('BANK NAME') }}</b></th>
                                        <th><b>{{__('BANK ADRESS') }}</b></th>
                                        <th><b>{{__('ACC ACCOUNT') }}</b></th>
                                        <th><b>{{__('CURRENT ACCOUNT') }}</b></th>
                                        <th><b>{{__('OPTIONS') }}</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($partner_bank as $par)
                                    <tr>
                                        <td> {{$par->id}} </td>
                                        <td> {{$par->account->name}} </td>
                                        <td> {{$par->bank_name}}</td>
                                        <td> {{$par->bank_addres}}</td>
                                        <td> {{$par->currency->code}} </td>
                                        <td> @if ($par->curren_account == 1)
                                                SI
                                             @else
                                                NO
                                             @endif
                                        </td>
                                        <td class="text-center">
                                        <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('partner_bank.show', $par->id) }}')">
                                            <i class="icon-eye text-info"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="obtenerDatosGet('{{ route('partner_bank.edit',$par->id) }}', '{{ route('partner_bank.update',$par->id) }}')">
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
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add PARTNER BANKS">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#partner_bank').addClass('active');
    });
    var title = 'Partner Bank';
    var colunms = [0,1,2,3,4];
    dataTableExport(title,colunms);
</script>

@endsection
