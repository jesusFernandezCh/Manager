@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-widgets s-18"></i>{{__('PRODUCT GENDER') }}</h1>
@endsection
@section('top-menu')
    {{-- header --}}
    @include('pages.product.headbar')
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.product.product_gen.create')
{{-- modal show --}}
@include('pages.product.product_gen.show')
{{-- modal edit --}}
@include('pages.product.product_gen.edit')

<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('LIST PRODUCT GENDER') }}</h6>
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
                                        <th><b>{{__('LINE') }}</b></th>
                                        <th><b>{{__('GENDER') }}</b></th>
                                        <th><b>{{__('SPECIFICATIONS') }}</b></th>
                                        <th><b>{{__('COLD CHAIN') }}</b></th>
                                        <th><b>{{__('OPTIONS') }}</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($product_gen as $pro)
                                    <tr>
                                        <td> {{$pro->id}}</td>
                                        <td> {{$pro->Products->line}}</td>
                                        <td> {{$pro->gen}}</td>
                                        <td> {{$pro->basic_spec}}</td>
                                        <td> {{$pro->cold_chain}}</td>
                                        <td class="text-center">
                                        <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('product_gen.show', $pro->id) }}')">
                                            <i class="icon-eye text-info"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="return obtenerDatosGet('{{ route('product_gen.edit',$pro->id) }}', '{{ route('product_gen.update',$pro->id) }}')">
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
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Product Name">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#product_gen').addClass('active');
    });
    var title = 'Product Gender';
    var colunms = [0,1,2,3,4];
    dataTableExport(title,colunms);
</script>
@endsection