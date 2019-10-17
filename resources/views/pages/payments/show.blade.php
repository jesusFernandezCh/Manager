<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{__('Payment Show') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">

                <h6 class="modal-title text-center" id="myModalLabel">{{__('Payment Detail') }}</h6>
                <hr>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group offset-2 col-4">
                                <i class="icon-key4 mr-2"></i>
                                {!! Form::label('amount',__('Amount'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('amount', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12', 'disabled'=>'true','id'=>'-amount']) !!}
                                <span class="amount_span"></span>
                            </div>
                            <div class="form-group col-4">
                                <i class="icon-cogs mr-2"></i>
                                {!! Form::label('type',__('Type'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('type', $type, null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-type', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="type_span"></span>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                    </div>
                </div>
                <hr>
                <h6 class="modal-title text-center" id="myModalLabel">{{__('Operation Detail') }}</h6>
                <hr>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group offset-2 col-8">
								<i class="icon-cogs mr-2"></i>
								{!! Form::label('operation_id',__('Operation'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('operation_id', $operation, null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true','id'=>'-operation_id', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="operation_id_span"></span>
							</div>
                        </div>
                        <div class="form-row">
                            <div class="form-group offset-1 col-5">
                                <i class="icon-key4 mr-1"></i>
                                {!! Form::label('amount_before',__('Amount of the Operation Before the Transaction'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('amount_before', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12', 'disabled'=>'true','id'=>'-amount_before']) !!}
                                <span class="amount_before_span"></span>
                            </div>
                            <div class="form-group col-5">
                                <i class="icon-key4 mr-1"></i>
                                {!! Form::label('amount_before',__('Amount of the Operation After the Transaction'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('amount_before', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12', 'disabled'=>'true','id'=>'-amount_after']) !!}
                                <span class="amount_before_span"></span>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <h6 class="modal-title text-center" id="myModalLabel">{{__('Transaction Detail') }}</h6>
                <hr>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-4">
                                     <i class="icon-key4 mr-2"></i>
                                    {!! Form::label('banks',__('Banks'), ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::select('banks', $banks, null, ['class'=>'form-control r-0 light s-12', 'id'=>'-banks','disabled'=>'true', 'onclick'=>'inputClear(this.id)']) !!}
                                    <span class="transaction_span"></span>
                                </div>
                                <div class="form-group col-4">
                                    <i class="icon-key4 mr-2"></i>
                                    {!! Form::label('transaction',__('Reference'), ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::select('transaction', $reference, null, ['class'=>'form-control r-0 light s-12', 'id'=>'-transaction','disabled'=>'true', 'onclick'=>'inputClear(this.id)']) !!}
                                    <span class="transaction_span"></span>
                                </div>
                                <div class="form-group col-4">
                                    <i class="icon-key4 mr-2"></i>
                                    {!! Form::label('date',__('Date'), ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::select('date', $date, null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-date', 'onclick'=>'inputClear(this.id)']) !!}
                                    <span class="date_span"></span>
                                </div>
                                <div class="form-group col-4">
                                    <i class="icon-cogs mr-2"></i>
                                    {!! Form::label('before',__('Amount Before'), ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::text('before', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12', 'disabled'=>'true','id'=>'-before']) !!}
                                    <span class="type_span"></span>
                                </div>
                                <div class="form-group col-4">
                                    <i class="icon-cogs mr-2"></i>
                                    {!! Form::label('after',__('Amount After'), ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::text('after', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-after']) !!}
                                    <span class="type_span"></span>
                                </div>
                                <div class="form-group col-4">
                                    <i class="icon-cogs mr-2"></i>
                                    {!! Form::label('created_at',__('Create'), ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::text('created_at', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-created_at']) !!}
                                    <span class="type_span"></span>
                                </div>
                                <div class="form-group col-4">
                                    <i class="icon-cogs mr-2"></i>
                                    {!! Form::label('updated_at',__('Updated'), ['class'=>'col-form-label s-12']) !!}
                                    {!! Form::text('updated_at', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-updated_at']) !!}
                                    <span class="type_span"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close') }}</button>
            </div>
        </div>
    </div>
</div>