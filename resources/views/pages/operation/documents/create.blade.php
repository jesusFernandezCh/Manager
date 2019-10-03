<!-- Modal -->
{!! Form::open(['route'=>'document.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="icon icon-balance-scale s-18"></i> {{__('Add New Operation')}} </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="col-md-12">
            @include('pages.operation.documents.forml')
          </div>
        </div>
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close')}}</button>
        <button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{__('Save data')}}</button>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
