<!-- Modal -->
{!! Form::open(['route'=>'accountContact.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-contacts"></i> Add New Contact</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-4 m-0" id="fullname_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('name', 'Fullname *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('fullname', null, ['class'=>'form-control r-0 light s-12', 'id'=>'fullname']) !!}
								<span class="fullname_span"></span>
							</div>
							
							{!! Form::hidden('account_id', $account->id, ['class'=>'form-control r-0 light s-12', 'id'=>'account_id']) !!}
								
							<div class="form-group col-4 m-0" id="phone_company_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('phone_company', 'Phone Company', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('phone_company', null, ['class'=>'form-control r-0 light s-12', 'id'=>'phone_company']) !!}
								<span class="phone_company_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="phone_mobile_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('phone_mobile', 'Phone Mobile', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('phone_mobile', null, ['class'=>'form-control r-0 light s-12', 'id'=>'phone_mobile']) !!}
								<span class="phone_mobile_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="email_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('email', 'Email', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::email('email', null, ['class'=>'form-control r-0 light s-12', 'id'=>'email']) !!}
								<span class="email_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="departament_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('departament', 'Departament', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('departament', null, ['class'=>'form-control r-0 light s-12', 'id'=>'departament']) !!}
								<span class="departament_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="country_id_group">
								{!! Form::label('country_id', 'Country', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('country_id', $countries, null, ['class'=>'form-control r-0 light s-12', 'id'=>'active', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="country_id_span"></span>
							</div>
							<div class="form-group col-8 m-0" id="address_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('address', 'address', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('address', null, ['class'=>'form-control r-0 light s-12', 'id'=>'email']) !!}
								<span class="address_span"></span>
							</div>
							<div class="form-group col-12 m-0" id="comments_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('comments', 'comments', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('comments', null, ['class'=>'form-control r-0 light s-12', 'id'=>'email']) !!}
								<span class="comments_span"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}