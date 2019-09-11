@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
<i class="icon-person"></i>
Countries
</h1>
@endsection
@section('maincontent')
<div class="page  height-full">
    @include('pages.account.headbar')
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="col-md-7 offset-md-2">
                <div class="card">
                    <div class="form-group">
                        <div class="card-header white">
                            <h6><i class="icon-pencil"></i> EDIT COUNTRY </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::model($country,['route'=>["country.update",$country->id],'method'=>'PUT', 'class'=>'formlDinamic','id'=>'DataUpdate']) !!}
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="form-group col-4 m-0" id="name_group">
                                        {{-- <i class="icon icon-face mr-2"></i> --}}
                                        {!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
                                        {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_name']) !!}
                                        <span class="name_span"></span>
                                    </div>
                                    <div class="form-group col-4 m-0" id="code_group">
                                        {!! Form::label('code', 'code', ['class'=>'col-form-label s-12']) !!}
                                        {!! Form::text('code', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_code']) !!}
                                        <span class="code_span"></span>
                                    </div>
                                    <div class="form-group col-4 m-0" id="active_group">
                                        {!! Form::label('active', 'active', ['class'=>'col-form-label s-12']) !!}
                                        {!! Form::select('active', [1=>'Active',0=>'Inactive'], null, ['class'=>'form-control r-0 light s-12', 'id'=>'_active']) !!}
                                        <span class="active_span"></span>
                                    </div>
                                    {!! Form::hidden('route', route('country.index'), ['id'=>'route']) !!}
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 text-right">
                            <a href="{{ route('country.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
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
$('#countries').addClass('active');
});
</script>
@endsection