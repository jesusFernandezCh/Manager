@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
    <i class="icon icon-money s-18"></i>
    {{__('Order Pmt Term')}}
</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    @include($topMenu)
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.operation.orderPmtTerm.create')

<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('ORDER PMT TERMS')}} </h6>
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
                                        <th><b>PAYMENT TERMS</b></th>
                                        <th><b>CAPITAL AT RISK</b></th>
                                        <th><b>OPTIONS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            {{$order->id}} 
                                        </td>
                                        <td>
                                            {{$order->payment_terms}}
                                        </td>
                                        <td>
                                            {{$order->capital_at_risk}}
                                        </td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['orderPmtTerm.destroy',$order],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="{{ route('orderPmtTerm.edit',[$order,$order]) }}" class="btn btn-default btn-sm" title="Editar document">
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
        $('#orderPmtTerm').addClass('active');
    });
    var title = 'OrderPmtTerm';
    var colunms = [0,1,2];
    dataTableExport(title,colunms);
</script>
@endsection