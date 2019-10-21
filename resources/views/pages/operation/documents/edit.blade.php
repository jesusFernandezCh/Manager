@extends('layouts.app')
@section('title')
    @include('pages.operation.partial.title')
@endsection

@section('maincontent')
<div class="page  height-full">
    {{-- header --}}
    @include('pages.operation.top-menu')
    {{-- end header --}}
    <div>
        @include('alerts.toastr')
    </div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="col-md-12">
                <div class="card">
                    <div class="form-group">
                        <div class="card-header white">
                            <h6><i class="icon icon-pencil"></i> {{ __('EDIT DOCUMENT') }}</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::model($document,['route'=>["document.update",$document->id],'method'=>'PUT','class'=>'formlDinamic','id'=>'DataUpdate']) !!}
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-6  m-0" id="name_group">
                                    <i class="icon-file-text mr-2"></i>
                                    {!! Form::label('name', 'Document Name', ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12',  'id'=>'_name', 'onclick'=>'inputClear(this.id)']) !!}
                                    <span class="name_span"></span>
                                </div>
                                <div class="form-group col-6 m-0" id="account_id_group">
                                <i class="icon-globe mr-2"></i>
                                    {!! Form::label('documentType', 'Access Permits', ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::select('documentType[]', $documentType, $document->documentTypes, ['class'=>'form-control r-0 light s-12 select2 multiple', 'id'=>'documentType','multiple'=>'multiple','onclick'=>'inputClear(this.id)']) !!}
                                    <span class="documentType_span"></span>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-6 m-0" id="account_id_group">
                                <i class="icon-globe mr-2"></i>
                                {!! Form::label('account_id', 'Account', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('account_id', $account, null, ['class'=>'form-control r-0 light s-12', 'id'=>'account_id']) !!}
                                <span class="account_id_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('operation_id', 'Operation', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('operation_id', $operations, null, ['class'=>'form-control r-0 light s-12',  'id'=>'_operation_id', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="operation_id_span"></span>
                            </div>
                            </div>
                            {!! Form::hidden('route', route('documentsAsoc',$operation), ['id'=>'route']) !!}
                        </div>
                        <br>
                        <div class="col-md-12 text-right">
                            <a href="{{ route('documentsAsoc',$operation) }}" class="btn btn-default" data-dismiss="modal">Back</a>
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