@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> 
	<i class="icon-person"></i>
	<a href="{{ route('operations.index') }}">{{__('Operation')}}</a> > {{$operation->account->name}} > {{$operation->code}}
</h1>
@endsection
@section('top-menu')
    @include('pages.operation.top-menu')
@endsection
@section('maincontent')
<div class="page  height-full">

	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class="icon-pencil"></i> {{__('RESUMEN OPERATION	')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($operation,['route'=>["operations.update",$operation->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
						<div class="form-row">
							<div class="col-md-4">
								<div class="form-group" id="description_group">
									{!! Form::label('code', 'Code *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('code', null, ['class'=>'form-control r-0 light s-12', 'id'=>'code']) !!}
									<span class="code_span"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" id="description_group">
									{!! Form::label('description', 'Description *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
									<span class="description_span"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" id="total_amount_group">
									{!! Form::label('amount', 'Amount *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('total_amount', null, ['class'=>'form-control r-0 light s-12', 'id'=>'total_amount']) !!}
									<span class="total_amount_span"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" id="account_id_group">
									<i class="icon-globe mr-2"></i>
									{!! Form::label('account_id', 'Account *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('account_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'account_id']) !!}
									<span class="account_id_span"></span>
							</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" id="_operator_id">
									{!! Form::label('oprator', 'Operator *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('operator_id', $operators, Auth::user()->id, ['class'=>'form-control r-0 light s-12', 'id'=>'_operator_id'])!!}
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" id="_operator_id">
									{!! Form::label('status', 'Status *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('operations_status_id', $status, $operation->operations_status_id, ['class'=>'form-control r-0 light s-12', 'id'=>'_operations_status_id'])!!}
								</div>
							</div>
							{!! Form::hidden('route', route('operations.index'), ['id'=>'route']) !!}
						</div>
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('operations.index') }}" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
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

