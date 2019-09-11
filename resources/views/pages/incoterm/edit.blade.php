@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white">
<i class="icon-person"></i>
Account
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
                            <h6><i class="icon-pencil"></i> EDIT ACCOUNT </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::model($incoterm,['route'=>["incoterm.update",$incoterm->id],'method'=>'PUT','class'=>'formlDinamic','id'=>'DataUpdate']) !!}
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group m-0 has-feedback" id="fullname_group">
                                            <i class="icon-person mr-2"></i>
                                            {!! Form::label('name', 'Name', ['class'=>'col-form-label s-12']) !!}
                                            {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_name', 'onclick'=>'inputClear(this.id)']) !!}
                                            <span class="name_span"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0" id="password_group">
                                            <i class="icon-dialpad mr-2"></i>
                                            {!! Form::label('description', 'Description', ['class'=>'col-form-label s-12','placeholder'=>'Password', 'id'=>'_description']) !!}
                                            {!! Form::text('description', null, ['class'=>'form-control r-0 light s-12',  'id'=>'description', 'onclick'=>'inputClear(this.id)']) !!}
                                            <span class="code_span"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0" id="status_group">
                                            {!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
                                            {!! Form::select('status', [1=>'Active', 0=>'Inactive'], null, ['class'=>'form-control r-0 light s-12', 'placeholder'=>'Select', 'id'=>'_status', 'onclick'=>'inputClear(this.id)']) !!}
                                            <span class="status_span"></span>
                                        </div>
                                    </div>
                                    {!! Form::hidden('route', route('incoterm.index'), ['id'=>'route']) !!}
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 text-right">
                            <a href="{{ route('incoterm.index') }}" class="btn btn-default" data-dismiss="modal">Back</a>
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