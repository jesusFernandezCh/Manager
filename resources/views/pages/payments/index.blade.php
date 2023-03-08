@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i>{{__('PAYMENTS') }}</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    @include('pages.payments.headbar')
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.payments.create')
{{-- modal show --}}
@include('pages.payments.show')
<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('LIST PAYMENTS') }}</h6>
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
                                        <th><b>{{__('CODE OP.') }}</b></th>
                                        <th width="200"><b>{{__('SUPPLIER OP.') }}</b></th>
                                        <th><b>{{__('AMOUNT OP.') }}</b></th>
                                        <th><b>{{__('REFERENCE') }}</b></th>
                                        <th><b>{{__('DATE') }}</b></th>
                                        <th><b>{{__('AMOUNT') }}</b></th>
                                        <th><b>{{__('TYPE') }}</b></th>
                                        <th><b>{{__('OPTIONS') }}</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payment as $pay)
                                    <tr>
                                        <td> {{$pay->id}} </td>
                                        <td> {{$pay->operation->code}}</td>
                                        <td>{{ $pay->operation->Supplier->name }}</td>
                                        <td>{{ $pay->operation->s_incoterm_place }}$</td>
                                        <td> {{$pay->Transaction->reference}}
                                        </td>
                                        <td> {{ date('Y/m/d', strtotime($pay->Transaction->date)) }} </td>
                                        <td> {{$pay->amount}}$ </td>
                                        <td> @if ($pay->type == 1) 
                                                PAGO TOTAL
                                             @else
                                                ABONO 
                                             @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('payments.show', $pay->id) }}')">
                                            <i class="icon-eye text-info"></i>
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
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Rol">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#payments').addClass('active');
    });
    var title = 'Payments';
    var colunms = [0,1,2,3,4];
    dataTableExport(title,colunms);
</script>
<script>
   $('#amount').change(function(){
        $.ajax({
            url: '{{ url('verifyBalance') }}',
            type: 'POST',
            data:{
                '_token': '{{  csrf_token() }}',
                'amount': $('#amount').val(),
                'bank_trans': $('#transaction_id').val()
            },
            success: function(result) {
                $("#sub").attr("disabled", false);
            },
            error: function(msj) {
                toastr.error(msj,"El monto asignado no puede ser mayor al de la transacción");
                $('input[type="text"]').val('');
                $("#sub").attr("disabled", true);

            },
        });
   });
    $('#amount').keypress(function(){
        $("#sub").attr("disabled", true);
        $('#type').prop('selectedIndex',0);
    });
</script>
@endsection