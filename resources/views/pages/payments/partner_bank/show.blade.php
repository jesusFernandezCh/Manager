<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{ __('Partner Bank Show') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('company_id',__('Company'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('company_id', $company, null, ['class'=>'form-control text-center r-0 light s-12', 'disabled'=>'true','id'=>'-company_id', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="company_id_span"></span>
                            </div>
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('bank_name',__('Bank Name'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('bank_name', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-bank_name']) !!}
                                <span class="bank_name_span"></span>
                            </div>
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('bank_adress',__('Bank Address'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('bank_adress', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-bank_adress']) !!}
                                <span class="bank_adress_span"></span>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('swift_code',__('Swift Code'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('swift_code', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-swift_code']) !!}
                                <span class="swift_code_span"></span>
                            </div>
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('aba',__('ABA'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('aba', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-aba']) !!}
                                <span class="aba_span"></span>
                            </div>
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('benefaccount_ibank',__('Benef Account'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('benefaccount_ibank', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-benefaccount_ibank']) !!}
                                <span class="benefaccount_ibank_span"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('acc_currency',__('Currency'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('acc_currency', $currency, null, ['class'=>'form-control text-center r-0 light s-12', 'disabled'=>'true','id'=>'-acc_currency', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="acc_currency_span"></span>
                            </div>
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('beneficiary_name',__('Beneficiary Name'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('beneficiary_name', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-beneficiary_name']) !!}
                                <span class="beneficiary_name_span"></span>
                            </div>
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('intermediary_info',__('Intermediary Info'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('intermediary_info', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-intermediary_info']) !!}
                                <span class="intermediary_info_span"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-4">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('curren_account',__('Current Account'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::checkbox('curren_account', 1, true, array('id'=>'-curren_account'), ['class'=>'r-0 light', 'disabled'=>'true','id'=>'-curren_account']) !!}
                                <span class="curren_account_span"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>