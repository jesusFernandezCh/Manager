@extends('layouts.app')
@section('title')
    @include('pages.operation.partial.title')
@endsection
@section('top-menu')
    {{-- header --}}
    @include('pages.operation.topMenu')
    {{-- end header --}}
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.operation.documents.create')

<div class="page  height-full">
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{__('LIST DOCUMENTS')}} </h6>
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
                                        <th><b>NAME</b></th>
                                        <th><b>DOCUMENT TYPE</b></th>
                                        <th><b>OPTIONS</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                    <tr>
                                        <td>
                                            {{$document->id}}
                                        </td>
                                        <td>
                                            {{$document->name}}
                                        </td>
                                        <td>
                                            @foreach ($document->documentTypes as $element)
                                                <span class="badge badge-primary r-5">{{$element->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            {!! Form::open(['route'=>['document.destroy',$document],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
                                            <a class="btn btn-default btn-sm" title="Editar" href="{{url('/document/download/'.$document->id.'')}}"><i class="icon-download text-info"></i></a>
                                            <a href="{{ route('documentOperationEdit',[$document,$operation]) }}" class="btn btn-default btn-sm" title="Editar document">
                                                <i class="icon-pencil text-info"></i>
                                            </a>
                                            <button class="btn btn-default btn-sm" onclick="return confirm('¿Realmente deseas borrar el registro?')">
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
        $('#documents').addClass('active');
    });
    var title = 'Operations';
    var colunms = [0,1,2];
    dataTableExport(title,colunms);
</script>
@endsection
