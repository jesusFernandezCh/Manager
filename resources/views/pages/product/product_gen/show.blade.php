<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{ __('Product Gender Show') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6 m-0">
								{!! Form::label('product_line_id',__('Product Line *'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('product_line_id', $product_line, null, ['class'=>'form-control r-0 light s-12', 'disabled'=>'true', 'id'=>'-product_line_id', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="product_line_id_span"></span>
							</div>
							<div class="form-group col-6 m-0">
								{!! Form::label('gen',__('Name *'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('gen', null, [ 'class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-gen']) !!}
								<span class="gen_span"></span>
							</div>
							<div class="form-group col-6 m-0">
								{!! Form::label('basic_spec',__('Specifications'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('basic_spec', null, [ 'class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-basic_spec']) !!}
								<span class="basic_spec_span"></span>
							</div>
							<div class="form-group col-6 m-0">
								{!! Form::label('cold_chain',__('Cold Chain'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('cold_chain', null, [ 'class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-cold_chain']) !!}
								<span class="cold_chain_span"></span>
							</div>
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