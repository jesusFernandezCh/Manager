@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
	<i class="icon-person"></i>
	Account Category
</h1>
@endsection
@section('top-menu')
  @include('pages.account.headbar')
@endsection
@section('maincontent')
<div class="page  height-full">
	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class="icon-pencil"></i> EDIT CATEGORY </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($category,['route'=>["accountCategory.update",$category->id],'method'=>'PUT','class'=>'formlDinamic', 'id'=>'DataUpdate']) !!}
						<div class="form-row">
              <div class="col-md-12">
                <div class="form-row">
                  <div class="form-group col-4 m-0" id="name_group">
                    {!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
                    {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_name']) !!}
                    <span class="name_span"></span>
                  </div>
                  <div class="form-group col-4 m-0" id="description_group">
                    {{-- <i class="icon icon-face mr-2"></i> --}}
                    {!! Form::label('description', 'Description', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
                    {!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_description']) !!}
                    <span class="name_description"></span>
                  </div>
                  <div class="form-group col-4 m-0" id="status_group">
                    {!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
                    {!! Form::select('active', [1=>'Active', 0=>'Inactive'], $category->active, ['class'=>'form-control r-0 light s-12', 'id'=>'_status', 'onclick'=>'inputClear(this.id)']) !!}
                    <span class="status_span"></span>
                  </div>
                  {!! Form::hidden('route', route('accountCategory.index'), ['id'=>'route']) !!}
                </div>
              </div>
						</div>
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('accountCategory.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
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
        $('#category').addClass('active');
    });
</script>
@endsection
