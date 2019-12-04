{!! Form::open(['method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-pencil"></i> freightRates Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                @include('pages.operation.freightRates.forml')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}