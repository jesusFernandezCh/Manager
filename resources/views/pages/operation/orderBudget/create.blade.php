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
						<td width="70">{!! Form::select('order_sale_currency_id', $currency, null, ['class'=>'form-control r-0 light s-12', 'id'=>'order_sale_currency_id', 'onclick'=>'inputClear(this.id)']) !!}</td>
						<td width="80">{!! Form::text('order_sale', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_sale']) !!}</td>
						<td width="50"> > USD</td>
						<td>{!! Form::text('order_sale', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_sale']) !!}</td>
					</tr>
					<tr>
						<td>{!! Form::label('order_purchase',__('OrderPurchase'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_purchase', 0, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase', 'disabled'=>'true']) !!}</td>
						<td width="70">{!! Form::select('product', $currency, null, ['class'=>'form-control r-0 light s-12', 'id'=>'product', 'onclick'=>'inputClear(this.id)']) !!}</td>
						<td width="80">{!! Form::text('order_sale', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_sale']) !!}</td>
						<td width="50"> > USD</td>
						<td>{!! Form::text('order_sale', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_sale']) !!}</td>
					</tr>
					<!-- <tr>
						<td colspan="5">{!! Form::label('order_purchase',__('Total Est Freight'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_purchase', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('order_purchase',__('Est Charger'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_purchase', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('order_purchase',__('Coms. to pay'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_purchase', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('order_purchase',__('Coms. to receive'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_purchase', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase']) !!}</td>
					</tr>
					<tr>
						<td colspan="5">{!! Form::label('order_purchase',__('USD_Budget'), ['class'=>'col-form-label s-12']) !!}</td>
						<td>{!! Form::text('order_purchase', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_purchase']) !!}</td>
					</tr> -->
				</tbody>
			</table>
			<br>
		</div>

</div>