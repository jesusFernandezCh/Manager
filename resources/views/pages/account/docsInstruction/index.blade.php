@extends('layouts.app')
@section('title')
@if (isset($account))
    @include('pages.accountOperator.partials.title')
@else
    <h1 class="nav-title text-white"><i class="icon icon-documents3 s-18"></i>{{ __('docsInstruction') }} </h1>
@endif
@endsection
@section('top-menu')
    {{-- header --}}
     @include('pages.accountOperator.headbar')
    {{-- end header --}}
@endsection

@section('maincontent')
@include('pages.account.docsInstruction.create')
<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6>{{ __('LIST DOCSINSTRUCTION') }}</h6>
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
                                        <th><b>{{__('ACCOUNT')}}</b></th>
                                        <th><b>{{__('CNEE')}}</b></th>
                                        <th><b>{{__('AGENCY')}}</b></th>
                                        <th><b>{{__('SHIPPER')}}</b></th>
                                        <th><b>{{__('OPTIONS')}}</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docsInstructions as $docsInstruction)
                                    <tr>
                                        <td> {{$docsInstruction->id}} </td>
                                        <td>{{$docsInstruction->account->name}}</td>
                                        <td>{{$docsInstruction->cnee}}</td>
                                        <td>{{$docsInstruction->agency}}</td>
                                        <td>{{$docsInstruction->shipper}}</td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['docsInstruction.destroy',$docsInstruction],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="
                                            @if (isset($account))
                                                {{ route('docsIntruccionEditAsoc',$docsInstruction) }}    
                                            @else
                                                {{ route('docsInstruction.edit',$docsInstruction) }}    
                                            @endif
                                            " class="btn btn-default btn-sm" title="Editar">
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
    <a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Operation">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#docsInstruction').addClass('active');
    });
    var title = 'Operations';
    var colunms = [0,1,2];
    dataTableExport(title,colunms);

</script>
@endsection