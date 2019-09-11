@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
<i class="icon icon-anchor"></i>
Port
</h1>
@endsection
@section('maincontent')
<div class="page  height-full">
	<header class="blue accent-3 relative">
		<div class="container-fluid text-white">
			<div class="row justify-content-between">
				<ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
					<li>
						<a class="nav-link" href="{{ route('user.index') }}" role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>Users</a>
					</li>
					<li>
						<a class="nav-link active" id="v-pills-buyers-tab" data-toggle="pill" href="#" role="tab"
						aria-controls="v-pills-buyers"><i class="icon icon-face"></i> Roles/Profiles</a>
					</li>
					<li>
						<a class="nav-link" href="{{ route('profitCenter.index') }}" role="tab" aria-controls="v-pills-sellers"><i class="icon  icon-local_shipping"></i> Profit Centers</a>
					</li>
					<li>
						<a class="nav-link" href="{{ route('permission.index') }}" role="tab" aria-controls="v-pills-sellers"><i class="icon-key6"></i> Permissions</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div class="container-fluid animatedParent animateOnce my-3">
		<div class="animated fadeInUpShort">
			<div class="col-md-7 offset-md-2">
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
									<div class="form-group col-4 m-0" id="password_group">
										{!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
										{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_name']) !!}
										<span class="name"></span>
									</div>
									<div class="form-group col-8 m-0">
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