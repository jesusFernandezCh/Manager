@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
	<i class="icon-person"></i>
	Account Meta type
</h1>
@endsection
@section('top-menu')
	{{-- header --}}
		@include('pages.account.headbar')
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
	                        <h6><i class="icon-pencil"></i> EDIT META TYPE </h6>
	                    </div>
	                </div>
	           <div class="card-body">
						{!! Form::model($metatype,['route'=>["accountMetaType.update",$metatype->id],'method'=>'PUT','class'=>'formlDinamic','id'=>'DataUpdate']) !!}
              <div class="form-row">
  							<div class="form-group col-4 m-0" id="metatype_group">
  								{{-- <i class="icon icon-face mr-2"></i> --}}
  								{!! Form::label('metatype', 'Meta type', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
  								{!! Form::text('metatype', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_metatype']) !!}
  								<span class="metatype_span"></span>
  							</div>
                <div class="form-group col-4 m-0" id="description_group">
  								{{-- <i class="icon icon-face mr-2"></i> --}}
  								{!! Form::label('description', 'Description', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
  								{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_description']) !!}
  								<span class="description_span"></span>
  							</div>
                <div class="form-group col-4 m-0" id="active_group">
  								{!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
  								{!! Form::select('active', [1=>'Active', 0=>'Inactive'], $metatype->active, ['class'=>'form-control r-0 light s-12', 'id'=>'_active', 'onclick'=>'inputClear(this.id)']) !!}
  								<span class="active_span"></span>
  							</div>
                <div class="form-group col-4 m-0" id="required_group">
  								{!! Form::label('required', 'Required', ['class'=>'col-form-label s-12']) !!}
  								{!! Form::select('required', [1=>'Option1', 0=>'Option2'], $metatype->required, ['class'=>'form-control r-0 light s-12', 'id'=>'_required', 'onclick'=>'inputClear(this.id)']) !!}
  								<span class="required_span"></span>
  							</div>
                {!! Form::hidden('route', route('accountMetaType.index'), ['id'=>'route']) !!}
  						</div>
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('accountMetaType.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
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
        $('#metaType').addClass('active');
    });
</script>
@endsection
