@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"><i class="icon icon-repeat2 s-18"></i>{{ __('Operations') }} </h1>
@endsection
@section('top-menu')
    {{-- header --}}
    @include($topMenu)
    {{-- end header --}}
@endsection
@section('maincontent')

<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6>{{ __('LIST OPERATIONS') }}</h6>
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
                                        <th><b>{{__('CODE')}} / {{__('BUSINESS LINE')}}</b></th>
                                        <th><b>{{__('PRINCIPAL')}} / {{__('PURCHASE BY')}}</b></th>
                                        <th><b>{{__('CREATE DATE')}}</b></th>
                                        <th><b>{{__('AMOUNT')}}</b></th>
                                        <th><b>{{__('STATUS')}}</b></th>
                                        <th><b>{{__('OPTIONS')}}</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operations as $operation)
                                    <tr>
                                        <td> {{$operation->id}} </td>
                                        <td>
                                            <div>
                                                {{$operation->code}}
                                                <div>
                                                    <small class="text-info">{{$operation->businessLines->name}}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{$operation->account()->where('id',$operation->principal_id)->first()->name}}
                                                <div>
                                                    <small class="text-info">{{$operation->operator->fullname}}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{$operation->date_order}}
                                        </td>
                                        <td>{{$operation->total_amount}}</td>
                                        <td>
                                            <span class="badge badge-primary rounded-circle r-5">
                                                {{$operation->status->name}}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['operations.destroy',$operation],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a href="{{ route('operations.edit',$operation) }}" class="btn btn-default btn-sm" title="Editar">
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
    <a href="{{ route('operations.create') }}" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" title="Add Operation">
        <i class="icon-add"></i>
    </a>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#order_terms').addClass('active');
    });
    var title = 'Operations';
    var colunms = [0,1,2];
    dataTableExport(title,colunms);

</script>
@endsection