<!-- Modal edit-->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-pencil"></i> Porfit Center Show</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group m-0 has-feedback" id="fullname_group">
							<i class="icon-person mr-2"></i>
							{!! Form::label('name', 'Name', ['class'=>'col-form-label s-12']) !!}
							{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'Name profit center', 'id'=>'-name', 'onclick'=>'inputClear(this.id)']) !!}
							<span class="name_span"></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group m-0" id="password_group">
							<i class="icon-dialpad mr-2"></i>
							{!! Form::label('Caode', 'Caode', ['class'=>'col-form-label s-12','placeholder'=>'Password', 'id'=>'code']) !!}
							{!! Form::text('code', null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'N° Cede', 'id'=>'-code', 'onclick'=>'inputClear(this.id)']) !!}
							<span class="code_span"></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group m-0" id="status_group">
							{!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
							{!! Form::select('status', $status, null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'Select', 'id'=>'-status', 'onclick'=>'inputClear(this.id)']) !!}
							<span class="status_span"></span>
						</div>
					</div>
				</div>
			</div>
			<br>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>