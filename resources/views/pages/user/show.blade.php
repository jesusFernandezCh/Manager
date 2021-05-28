<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{__ ('User Show')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open() !!}
                <div class="form-row">
                    <div class="col-md-8">
                        <div class="form-group m-0 has-feedback" id="fullname_group">
                            <i class="icon-person mr-2"></i>
                            {!! Form::label('name', 'Usermane', ['class'=>'col-form-label s-12']) !!}
                            {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'Enter User Name', 'id'=>'-fullname', 'onclick'=>'inputClear(this.id)']) !!}
                            <span class="fullname_span"></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 m-0" id="status_group">
                                {!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('estatus', $estatus, null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'Select', 'id'=>'-estatus', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="status_span"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="form-group">
                            <input id="file-3" class="file" name="image-2" type="file">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row mt-1">
                            <div class="form-group col-4 m-0" id="email_group">
                                <i class="icon-envelope-o mr-2"></i>
                                {!! Form::label('email', 'Email', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::email('email', null, ['class'=>'form-control r-0 light s-12 ', 'placeholder'=>'user@email.com', 'id'=>'-email', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="email_span"></span>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>