@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> 
	<i class="icon-person"></i>
	Account Operator
</h1>
@endsection

@section('maincontent')
<div class="page  height-full">
    @include('pages.accountOperator.headbar')
    @section('addItem')
		<li>
            <a class="nav-link" href="{{ route('accountContact.index') }}" role="tab" id="contact">
                <i class="icon-contacts"></i> Account Contact
            </a>
        </li>
    @endsection

	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-8 offset-md-2">
	            <div class="card">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class="icon-pencil"></i> EDIT ACCOUNT </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($account,['route'=>["accountOperator.update",$account->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
						<div class="form-row">
							<div class="col-md-8">
								<div class="form-row">
									<div class="form-group col-4 m-0" id="name_group">
										{{-- <i class="icon icon-face mr-2"></i> --}}
										{!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
										<span class="name_span"></span>
									</div>
									<div class="form-group col-4 m-0" id="identification_group">
										{!! Form::label('identification', 'Identification', ['class'=>'col-form-label s-12']) !!}
										{!! Form::text('identification', null, ['class'=>'form-control r-0 light s-12', 'id'=>'identification']) !!}
										<span class="identification_span"></span>
									</div>
									<div class="form-group col-4 m-0" id="country_id_group">
										<i class="icon-globe mr-2"></i>
										{!! Form::label('country_id', 'Country', ['class'=>'col-form-label s-12']) !!}
										{!! Form::select('country_id', [], null, ['class'=>'form-control r-0 light s-12', 'id'=>'country_id']) !!}
										<span class="country_id_span"></span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-4 m-0" id="email_group">
										<i class="icon-envelope-o mr-2"></i>
										{!! Form::label('email', 'email', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::email('email', null, ['class'=>'form-control r-0 light s-12', 'id'=>'email']) !!}
										<span class="email_span"></span>
									</div>
									<div class="form-group col-4 m-0" id="website_group">
										<i class="icon-web mr-2"></i>
										{!! Form::label('website', 'Website', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::text('website', null, ['class'=>'form-control r-0 light s-12', 'id'=>'website']) !!}
										<span class="email_span"></span>
									</div>
									<div class="form-group col-4 m-0" id="phone_group">
										<i class="icon-phone mr-2"></i>
										{!! Form::label('phone', 'Phone', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::text('phone', null, ['class'=>'form-control r-0 light s-12', 'id'=>'phone']) !!}
										<span class="phone_span"></span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-8 m-0" id="category_id">
										{!! Form::label('category_id', 'Category', ['class'=>'col-form-label s-12']) !!}
										{!! Form::select('category_id[]', $categories, $account->categories, ['class'=>'form-control r-0 light s-12 select2', 'id'=>'category_id', 'multiple'=>'multiple']) !!}
										<span class="category_id_span"></span>
									</div>
									<div class="form-group col-4 m-0" id="zipcode_group">
										{!! Form::label('zipcode', 'Zipcode', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::text('zipcode', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_zipcode']) !!}
										<span class="zipcode_span"></span>
									</div>
									<div class="form-group col-12 m-0" id="address_group">
										{!! Form::label('address', 'Address', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::text('address', null, ['class'=>'form-control r-0 light s-12', 'id'=>'address']) !!}
										<span class="address_span"></span>
									</div>
									{!! Form::hidden('route', route('accountOperator.index'), ['id'=>'route']) !!}
								</div>
							</div>
						</div>
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('accountOperator.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
							<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
        	</div>
		</div>
	</div>
</div>
@endsection
@section('js')
<script src={{asset('assets/plugins/bootstrap-fileinput/js/fileinput.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/js/plugins/piexif.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/js/plugins/sortable.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/js/locales/es.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/themes/gly/theme.js')}}></script>
<script>
		var title = 'Users';
		var colunms = [0,1,2,3,4];
	
		$(".file").fileinput({
			// theme: 'gly',
			// uploadUrl: '#',
			showCaption: false,
			showRemove: false,
			showUpload: false,
			showBrowse: false,
			browseOnZoneClick: true,
		});
		
    $(document).ready(function() {
        $('#account').addClass('active');
    });
</script>
@endsection
