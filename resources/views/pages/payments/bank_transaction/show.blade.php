<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{ __('Bank Transaction Show') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <h6 class="modal-title text-center" id="myModalLabel">{{__('Transaction Detail') }}</h6>
                <hr>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-6 m-0">
                                <i class="icon-globe mr-2"></i>
                                {!! Form::label('bank_id',__('Bank'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('bank_id', $bank, null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true', 'id'=>'-bank_id']) !!}
                                <span class="country_id_span"></span>
                            </div>

                            <div class="form-group col-6 m-0">
                                <i class="icon-key4 mr-2"></i>
                                {!! Form::label('amount',__('Amount'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('amount', null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true', 'id'=>'-amount']) !!}
                                {!! Form::hidden('id', null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true', 'id'=>'-id']) !!}
                                <span class="amount_span"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('reference',__('Reference'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('reference', null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true',  'id'=>'-reference', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="reference_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('date',__('Date'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('date', null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true',  'id'=>'-date', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="date_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('created_at',__('Created'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('created_at', null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true',  'id'=>'-created_at', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="reference_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('updated_at',__('Updated'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('updated_at', null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true',  'id'=>'-updated_at', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="reference_span"></span>
                            </div>
                            <div class="form-group col-6 m-0">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('user',__('User'), ['class'=>'col-form-label s-12']) !!}

                                {!! Form::select('user', $user, null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true', 'id'=>'-user', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="type_span"></span>
                            </div>
                            <div class="form-group col-6 m-0">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('type',__('Type'), ['class'=>'col-form-label s-12']) !!}

                                {!! Form::select('type', $bank_account_type, null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true', 'id'=>'-type', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="type_span"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h6 class="modal-title text-center" id="myModalLabel">{{__('Payments Made With this Transaction') }}</h6>
                
                

                <hr>
                <table class="table table-bordered table-hover" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                    <thead>
                        <tr>
                            <th>{{__('ID') }}</th>
                            <th>{{__('Amount') }}</th>
                            <th>{{__('Type') }}</th>
                            <th>{{__('Date') }}</th>
                        </tr>
                    </thead>
                    <tbody id="pay">
                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>