
<div class="table-responsive">
    <table id="example2" class="table table-bordered table-hover table-sm"
        data-order='[[ 0, "desc" ]]' data-page-length='10'>
        <thead>
            <tr>
                <th width='5%'><b>ID</b></th>
                <th><b>NAME</b></th>
                <th><b>DOCUMENT TYPE</b></th>
                <th width='15%'><b>OPTIONS</b></th>
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
<!--Add New Message Fab Button-->
<a href="#" class="btn-fab btn-fab-md fab-left-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title={{ __('Add Document')}}>
    <i class="icon-add"></i>
</a>