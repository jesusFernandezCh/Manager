<!-- Modal -->
{!! Form::open(['route'=>'partner_bank.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="bank">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> {{__('Add New Partner Bank') }}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-4">
								{!! Form::label('company_id',__('Company *'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('company_id', $company, null, ['class'=>'form-control text-center r-0 light s-12', 'id'=>'company_id', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="company_id_span"></span>
							</div>
							<div class="form-group col-4">
								{!! Form::label('bank_name',__('Bank Name'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('bank_name', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'bank_name']) !!}
								<span class="bank_name_span"></span>
							</div>
							<div class="form-group col-4">
								{!! Form::label('bank_addres',__('Bank Address'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('bank_addres', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'bank_addres']) !!}
								<span class="bank_addres_span"></span>
							</div>
							
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-4">
								{!! Form::label('swift_code',__('Swift Code'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('swift_code', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'swift_code']) !!}
								<span class="swift_code_span"></span>
							</div>
							<div class="form-group col-4">
								{!! Form::label('aba',__('ABA'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('aba', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'aba']) !!}
								<span class="aba_span"></span>
							</div>
							<div class="form-group col-4">
								{!! Form::label('benefaccount_ibank',__('Benef Account'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('benefaccount_ibank', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'benefaccount_ibank']) !!}
								<span class="benefaccount_ibank_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-4">
								{!! Form::label('acc_currency',__('Currency'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('acc_currency', $currency, null, ['class'=>'form-control text-center r-0 light s-12', 'id'=>'acc_currency', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="acc_currency_span"></span>
							</div>
							<div class="form-group col-4">
								{!! Form::label('beneficiary_name',__('Beneficiary Name'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('beneficiary_name', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'beneficiary_name']) !!}
								<span class="beneficiary_name_span"></span>
							</div>
							<div class="form-group col-4">
								{!! Form::label('intermediary_info',__('Intermediary Info'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('intermediary_info', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'intermediary_info']) !!}
								<span class="intermediary_info_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-4">
								{!! Form::label('curren_account',__('Current Account'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::checkbox('curren_account', 1, false , [ 'class'=>'r-0 light', 'id'=>'curren_account']) !!}
								<span class="curren_account_span"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close') }}</button>
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{__('Save data') }}</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

