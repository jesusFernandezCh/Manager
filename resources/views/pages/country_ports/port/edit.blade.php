@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
<i class="icon icon-anchor"></i>
Port
</h1>
@endsection
@section('top-menu')
	{{-- header --}}
	@include('pages.country_ports.headbar')
	{{-- end header --}}
@endsection
@section('maincontent')
<div class="page  height-full">
	<div class="container-fluid animatedParent animateOnce my-3">
		<div class="animated fadeInUpShort">
			<div class="col-md-12">
				<div class="card">
					<div class="form-group">
						<div class="card-header white">
							<h6><i class="icon-pencil"></i> EDIT PORT </h6>
						</div>
					</div>
					<div class="card-body">
						{!! Form::model($port,['route'=>["port.update",$port->id],'method'=>'PUT','class'=>'formlDinamic','id'=>'DataUpdate']) !!}
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-row">
									<div class="form-group col-6 m-0" id="password_group">
										{!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_name']) !!}
										<span class="name"></span>
									</div>
									<div class="form-group col-6 m-0" id="country_id_group">
										<i class="icon-globe mr-2"></i>
										{!! Form::label('country_id', 'Country', ['class'=>'col-form-label s-12']) !!}
										{!! Form::select('country_id', $countries, null, ['class'=>'form-control r-0 light s-12', 'id'=>'country_id']) !!}
										<span class="country_id_span"></span>
									</div>
									<div class="form-group col-12 m-0">
										{!! Form::label('description', 'Description', ['class'=>'col-form-label s-12']) !!}
										{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_description']) !!}
										<span class="description"></span>
									</div>
									{!! Form::hidden('route', route('port.index'), ['id'=>'route']) !!}
								</div>
							</div>
						</div>
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('port.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
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
<script>
$(document).ready(function() {
$('#ports').addClass('active');
});
</script>
@endsection