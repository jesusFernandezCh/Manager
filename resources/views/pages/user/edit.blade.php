<!-- Modal Update-->
{!! Form::open(['method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate', 'files'=>'true']) !!}
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-pencil"></i> User Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-8">
                        <div class="form-group m-0 has-feedback" id="fullname_group">
                            <i class="icon-person mr-2"></i>
                            {!! Form::label('name', 'Usermane', ['class'=>'col-form-label s-12']) !!}
                            {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'Enter User Name', 'id'=>'_name', 'onclick'=>'inputClear(this.id)']) !!}
                            <span class="fullname_span"></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 m-0" id="password_group">
                                <i class="icon-key3 mr-2"></i>
                                {!! Form::label('password', 'Password', ['class'=>'col-form-label s-12','placeholder'=>'Password', 'id'=>'_password', 'onclick'=>'inputClear(this.id)']) !!}
                                {!! Form::password('password', ['class'=>'form-control r-0 light s-12', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="password_span"></span>
                            </div>
                            <div class="form-group col-6 m-0">
                                <i class="icon-key4 mr-2"></i>
                                {!! Form::label('passwordConfirm', 'Password Confim', ['class'=>'col-form-label s-12','placeholder'=>'Password Confirm']) !!}
                                {!! Form::password('password_confirmation', ['class'=>'form-control r-0 light s-12', 'id'=>'password_confirmation', 'onclick'=>'inputClear(this.id)']) !!}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 m-0" id="_rol_group">
                                {!! Form::label('role', 'Rol', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('rol', $roles, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_rol', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="_rol_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="status_group">
                                {!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('estatus', $estatus, null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'Select', 'id'=>'_status', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="status_span"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="form-group">
                            <input id="file-2" class="file" name="image-2" type="file">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row mt-1">
                            <div class="form-group col-4 m-0" id="email_group">
                                <i class="icon-envelope-o mr-2"></i>
                                {!! Form::label('email', 'Email', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::email('email', null, ['class'=>'form-control r-0 light s-12 ', 'id'=>'-email', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="email_span"></span>
                            </div>
                        </div>
                    </div>
                    <img src="" alt="" id="img-2">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}