{!! Form::open(['route'=>'accountOperator.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistroMultitap','files'=>'true']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> Add New Account</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-9">
						<div class="form-row">
							<div class="form-group col-6 m-0" id="name_group">
								{!! Form::label('name', 'Account Name *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
								<span class="name_span"></span>
							</div>
							<div class="form-group col-6 m-0" id="identification_group">
								{!! Form::label('identification', 'Identification', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('identification', null, ['class'=>'form-control r-0 light s-12', 'id'=>'identification']) !!}
								<span class="identification_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-6 m-0" id="country_id_group">
								<i class="icon-globe mr-2"></i>
								{!! Form::label('country_id', 'Country', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('country_id', $countries, null, ['class'=>'form-control r-0 light s-12', 'id'=>'country_id']) !!}
								<span class="country_id_span"></span>
							</div>
							<div class="form-group col-6 m-0" id="email_group">
								<i class="icon-envelope-o mr-2"></i>
								{!! Form::label('email', 'Email', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::email('email', null, ['class'=>'form-control r-0 light s-12', 'id'=>'email']) !!}
								<span class="email_span"></span>
							</div>
						</div>
						<div class="form-row">	
							<div class="form-group col-6 m-0" id="website_group">
								<i class="icon-web mr-2"></i>
								{!! Form::label('website', 'Website', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('website', null, ['class'=>'form-control r-0 light s-12', 'id'=>'website']) !!}
								<span class="email_span"></span>
							</div>
							<div class="form-group col-6 m-0" id="phone_group">
								<i class="icon-phone mr-2"></i>
								{!! Form::label('phone', 'Phone', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('phone', null, ['class'=>'form-control r-0 light s-12', 'id'=>'phone']) !!}
								<span class="phone_span"></span>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-8 m-0" id="address_group">
								{!! Form::label('address', 'Address', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('address', null, ['class'=>'form-control r-0 light s-12', 'id'=>'address']) !!}
								<span class="address_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="zipcode_group">
								{!! Form::label('zipcode', 'Zipcode', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('zipcode', null, ['class'=>'form-control r-0 light s-12', 'id'=>'zipcode']) !!}
								<span class="zipcode_span"></span>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
								{!! Form::label('category_id', 'Logo', ['class'=>'col-form-label s-12']) !!}
							<input id="file" class="file" name="image" type="file">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-12 m-0" id="category_id_group">
								{!! Form::label('category_id', 'Category *', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('category_id[]', $categories, null, ['class'=>'form-control r-0 light s-12 select2', 'id'=>'category_id', 'multiple'=>'multiple']) !!}
								<span class="category_id_span"></span>
							</div>
							{!! Form::hidden('route', route('accountOperator.store'), ['id'=>'route']) !!}
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