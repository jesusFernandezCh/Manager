@extends('layouts.app')
@section('title')
	@include('pages.accountOperator.partials.title')
@endsection
@section('top-menu')
	{{-- headbar --}}
	@include('pages.accountOperator.headbar')
@endsection
@section('maincontent')
<div class="page  height-full">
	{{-- modal create --}}
	@include('pages.accountOperator.accountMeta.create')
	<div class="container-fluid animatedParent animateOnce my-3">
		<div class="animated fadeInUpShort">
			<div class="col-md-12">
				<div class="card">
					<div class="form-group">
						<div class="card-header white">
							<h6> <i class="icon icon-eye s-14"></i> Accounts Details </h6>
						</div>
					</div>
					<div class="card-body">
						
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-home-tab">
								{!! Form::model($account,['route'=>["accountOperator.update",$account->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
								<div class="form-row">
									<div class="col-md-10">
										<div class="form-row">
											<div class="form-group col-4 m-0" id="name_group">
												{{-- <i class="icon icon-face mr-2"></i> --}}
												{!! Form::label('name', 'Account Name *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
												{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
												{!! Form::hidden('id', $account->id, ['class'=>'form-control r-0 light s-12', 'id'=>'_id']) !!}
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
												{!! Form::select('country_id', $countries, null, ['class'=>'form-control r-0 light s-12', 'id'=>'country_id']) !!}
												<span class="country_id_span"></span>
											</div>
											<div class="form-group col-4 m-0" id="email_group">
												<i class="icon-envelope-o mr-2"></i>
												{!! Form::label('email', 'Email', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
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
											<div class="form-group col-8 m-0" id="address_group">
												{!! Form::label('address', 'Address', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
												{!! Form::text('address', null, ['class'=>'form-control r-0 light s-12', 'id'=>'address']) !!}
												<span class="address_span"></span>
											</div>
											<div class="form-group col-4 m-0" id="zipcode_group">
												{!! Form::label('zipcode', 'Zipcode', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
												{!! Form::text('zipcode', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_zipcode']) !!}
												<span class="zipcode_span"></span>
											</div>
											<div class="form-group col-12 m-0" id="category_id">
												{!! Form::label('category_id', 'Category *', ['class'=>'col-form-label s-12']) !!}
												{!! Form::select('category_id[]', $categories, $account->categories, ['class'=>'form-control r-0 light s-12 select2', 'id'=>'category_id', 'multiple'=>'multiple']) !!}
												<span class="category_id_span"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											{!! Form::label('logo', 'Logo', ['class'=>'col-form-label s-12']) !!}
											<input id="file-2" class="file" name="image-2" type="file">
										</div>
									</div>
									<img src="" alt="" id="img-2">
								</div>
								<br>
								<div class="row text-right">
									<div class="col-md-12 ">
										<a href="{{ route('accountOperator.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
										<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
									</div>
								</div>
								<br>
								{!! Form::close() !!}
								<div class="table-responsive">
									<div class="form-group">
										<table id="example2" class="table table-bordered table-hover"
											data-order='[[ 0, "desc" ]]' data-page-length='10'>
											<thead>
												<tr>
													<th><b>EXTRA DETAILS</b></th>
													<th><b>VALUE</b></th>
													<th><b>OPTIONS</b></th>
												</tr>
											</thead>
											<tbody>
												@foreach ($metas as $meta)
												<tr>
													<td>
														{{$meta->accountsMetaTypes->metatype}}
													</td>
													<td>
														{{$meta->value}}
													</td>
													<td class="text-center">
														{!! Form::open(['route'=>['accountMeta.destroy',$meta],'method'=>'DELETE', 'class'=>'formlDinamic','id'=>'eliminarRegistro']) !!}
														<a href="{{ route('metaEdit',[$meta,$account]) }}" class="btn btn-default btn-sm" title="Editar">
															<i class="icon-pencil text-info"></i>
														</a>
														<button class="btn btn-default btn-sm" onclick="confirm('¿Realmente deseas borrar el registro?')">
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
			</div>
		</div>
		<!--Add New Message Fab Button-->
		<a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add Account Meta">
			<i class="icon-add"></i>
		</a>
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
		var namefile = $('#_id').val();
		var url = '../img/AccountLogos/' +namefile+ '.jpg';
		
		$(".file").fileinput({
			initialPreview: [url],
			initialPreviewAsData: true,
			initialPreviewConfig: 
				[
					{caption: namefile},
				],
			showCaption: false,
			showRemove: false,
			showUpload: false,
			showBrowse: false,
			browseOnZoneClick: true,
			overwriteInitial: true,
          	initialCaption: namefile
		});
			
	$(document).ready(function() {
	$('#show').addClass('active');
	});
	</script>
	@endsection