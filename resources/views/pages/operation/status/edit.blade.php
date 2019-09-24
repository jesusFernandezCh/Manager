@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> 
	<i class="icon-person"></i>
	{{__('Operation')}}
</h1>
@endsection
@section('top-menu')
    @include('pages.operation.topMenu')
@endsection
@section('maincontent')
<div class="page  height-full">

	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class="icon-pencil"></i> {{__('EDIT STATUS')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($status,['route'=>["status.update",$status->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
						<div class="form-row">
							<div class="form-group col-6 m-0" id="amount_group">
								{!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_name']) !!}
								<span class="name_span"></span>
							</div>
							<div class="form-group col-6 m-0" id="description_group">
								{!! Form::label('description', 'Description', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_description']) !!}
								<span class="description_span"></span>
							</div>
							{!! Form::hidden('route', route('status.index'), ['id'=>'route']) !!}
						</div>	
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('status.index') }}" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
							<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{_('Save data')}}</button>
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
        $('#resumen').addClass('active');
    });
</script>
@endsection

