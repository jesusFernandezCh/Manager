<hr>
<div class="row">
	

		<div class="col-md-1">
			{!! Form::label('order_quantity_budget',__('OrderQuantity'), ['class'=>'col-form-label s-12']) !!}
			
		</div>
		<div class="col-md-3">
			{!! Form::text('order_quantity_budget', 0, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_quantity_budget', 'disabled'=>'true']) !!}
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
			@foreach($value as $key)
				<input type="hidden" value="{{ $key->value }}" id="{{ $key->id }}">
			@endforeach
			<table>
				<thead>
					<tr>
						<th><h3>BUDGET USD</h3></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td >{!! Form::label('order_sale',__('OrderSale'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_sale', 0, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_sale' , 'disabled'=>'true']) !!}</td>
						<td width="80">{!! Form::select('order_sale_currency_id', $currency, null, ['class'=>'form-control r-0 light s-12', 'id'=>'order_sale_currency_id', 'onclick'=>'inputClear(this.id)', 'onChange'=>'ChangePrice("order_sale_currency_id", "order_sale", "order_sale_currency_change", "order_sale_usd")' ]) !!}</td>
						<td width="80">{!! Form::text('order_sale_currency_change', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_sale_currency_change','disabled'=>'true']) !!}</td>
						<td width="50"> > USD</td>
						<td>{!! Form::text('order_sale_usd', null, [ 'class'=>'form-control r-0 light s-12 total_usd', 'id'=>'order_sale_usd','disabled'=>'true']) !!}</td>
					</tr>
					<tr>
						<td>{!! Form::label('order_purchase',__('OrderPurchase'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_purchase', 0, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase', 'disabled'=>'true']) !!}</td>
						<td width="80">{!! Form::select('order_purchase_currency_id', $currency, null, ['class'=>'form-control r-0 light s-12', 'id'=>'order_purchase_currency_id', 'onclick'=>'inputClear(this.id)', 'onChange'=>'ChangePrice("order_purchase_currency_id", "order_purchase", "order_purchase_change", "order_purchase_usd")']) !!}</td>
						<td width="80">{!! Form::text('order_purchase_change', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase_change','disabled'=>'true']) !!}</td>
						<td width="50"> > USD</td>
						<td>{!! Form::text('order_purchase_usd', null, [ 'class'=>'form-control r-0 light s-12 total_usd', 'id'=>'order_purchase_usd','disabled'=>'true']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('total_est_charges',__('Total Est Charges'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('total_est_charges', null, [ 'class'=>'form-control r-0 light s-12 total_usd', 'id'=>'total_est_charges', 'onChange'=>'TotalPrice()']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('est_charges',__('Est Charges'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('est_charges', null, [ 'class'=>'form-control r-0 light s-12 total_usd', 'id'=>'est_charges', 'onChange'=>'TotalPrice()']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('comtopay',__('Coms. to pay'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('comtopay', null, [ 'class'=>'form-control r-0 light s-12 total_usd', 'id'=>'comtopay', 'onChange'=>'TotalPrice()']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('comtoreceive',__('Coms. to receive'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('comtoreceive', null, [ 'class'=>'form-control r-0 light s-12 total_usd', 'id'=>'comtoreceive', 'onChange'=>'TotalPrice()']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('usd_budget',__('USD_Budget'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('usd_budget', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'usd_budget', 'onChange'=>'TotalPrice()', 'disabled'=>'true']) !!}</td>
					</tr>
				</tbody>
			</table>
			<br>
		</div>

</div>