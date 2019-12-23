<style>
    .selected {
        outline: thin solid;
        }
</style>
{!! Form::hidden('operation_id', $operation->id, ['class'=>'form-control']) !!}
<div class="form-row">
	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>

                <th>{!! Form::label('order_quantity',__('Order Quantity'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('product',__('Product'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('specifications',__('Specifications'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('packaging',__('Packaging'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('brand',__('Brand'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('plant',__('Plant'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('shelf_life',__('Shelf Life'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('purchase_price',__('Purchase Price'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('est_purchase_sale',__('Est Purchase Sale'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('sale_price',__('Sale Price'), ['class'=>'col-form-label s-12']) !!}</th>
                <th>{!! Form::label('est_sale',__('Est Sale'), ['class'=>'col-form-label s-12']) !!}</th>
            </tr>
        </thead>

        <tbody>
            @php
                $i='0';
            @endphp
            @foreach($order as $order)
				<tr>
	                <td width="110">{!! Form::number('order_quantity[]', $order->order_quantity, [ 'class'=>'form-control order_quantity r-0 light s-12', 'id'=>'order_quantity'.$i, 'onChange'=> 'calcular("order_quantity", "order_quantity_budget"), cEstPSale_EstSale('.$i.',this.value,"purchase_price","est_purchase_sale"),cEstPSale_EstSale('.$i.',this.value,"sale_price","est_sale")']) !!}</td>
                    <td width="270">{!! Form::select('product[]', $product, $order->product, ['class'=>'form-control r-0 light s-12', 'id'=>'product', 'onclick'=>'inputClear(this.id)']) !!}</td>
	                <td width="110">{!! Form::text('specifications[]', $order->specifications, [ 'class'=>'form-control r-0 light s-12', 'id'=>'specifications']) !!}</td>
	                <td width="110">{!! Form::text('packaging[]', $order->packaging, ['class'=>'form-control r-0 light s-12', 'id'=>'packaging', 'onclick'=>'inputClear(this.id)']) !!}</td>
	                <td width="80">{!! Form::text('brand[]', $order->brand, ['class'=>'form-control r-0 light s-12', 'id'=>'brand', 'onclick'=>'inputClear(this.id)']) !!}</td>
	                <td width="80">{!! Form::text('plant[]', $order->plant, ['class'=>'form-control r-0 light s-12', 'id'=>'brand', 'onclick'=>'inputClear(this.id)']) !!}</td>
                    <td width="110">{!! Form::select('shelf_life[]', $shelflife, $order->shelflife_id, ['class'=>'form-control r-0 light s-12', 'id'=>'shelf_life', 'onclick'=>'inputClear(this.id)']) !!}</td>
	                <td width="110">{!! Form::text('purchase_price[]', $order->purchase_price, ['class'=>'form-control r-0 light s-12', 'id'=>'purchase_price'.$i, 'onChange'=>'cEstPSale_EstSale('.$i.',this.value,"order_quantity","est_purchase_sale"), calcular("purchase_price", "order_purchase")']) !!}</td>
	                <td width="115">{!! Form::text('est_purchase_sale[]', $order->est_purchase_sale, ['class'=>'form-control r-0 light s-12', 'id'=>'est_purchase_sale'.$i, 'onChange'=>'calcular("est_purchase_sale", "order_purchase")']) !!}</td>
	                <td width="110">{!! Form::text('sale_price[]', $order->sale_price, ['class'=>'form-control r-0 light s-12', 'id'=>'sale_price'.$i,'onChange'=>'cEstPSale_EstSale('.$i.',this.value,"order_quantity","est_sale")']) !!}</td>
	                <td width="110">{!! Form::text('est_sale[]', $order->est_sale, ['class'=>'form-control r-0 light s-12', 'id'=>'est_sale'.$i, 'onChange'=>'calcular("est_sale", "order_sale")']) !!}</td>
            	</tr>
                @php
                    $i++;
                @endphp
            @endforeach
    	</tbody>
    </table>
    <div class="col-md-12">
    	<a id="addRow" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-add"></i></a>
        <a id="buttonRM" class="btn-fab fab-right  shadow btn-primary" title="Add Delete"><i class="icon-delete" onclick=""></i></a>
    </div>
	</div>
<script>
$(document).ready(function() {

    var t = $('#example').DataTable();
    var i = '50';

    $('#addRow').on( 'click', function () {
        t.row.add( [
            "<input type='number' name='order_quantity[]' class='form-control order_quantity r-0 light s-12' id='order_quantity"+i+"' onChange='calcular(\"order_quantity\", \"order_quantity_budget\")'/>",
            '{!! Form::select('product[]', $product, null, ['class'=>'form-control r-0 light s-12', 'id'=>'product', 'onclick'=>'inputClear(this.id)']) !!}',
            '{!! Form::text('specifications[]', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'specifications']) !!}',
            '{!! Form::text('packaging[]', null, ['class'=>'form-control r-0 light s-12', 'id'=>'packaging', 'onclick'=>'inputClear(this.id)']) !!}',
            '{!! Form::text('brand[]', null, ['class'=>'form-control r-0 light s-12', 'id'=>'brand', 'onclick'=>'inputClear(this.id)']) !!}',
            '{!! Form::text('plant[]', null, ['class'=>'form-control r-0 light s-12', 'id'=>'plant', 'onclick'=>'inputClear(this.id)']) !!}',
            '{!! Form::select('shelf_life[]', $shelflife, null, ['class'=>'form-control r-0 light s-12', 'id'=>'shelf_life', 'onclick'=>'inputClear(this.id)']) !!}',
            "<input type='text' name='purchase_price[]' class='form-control r-0 light s-12' id='purchase_price"+i+"' onChange='cEstPSale_EstSale("+i+",this.value,\"order_quantity\",\"est_purchase_sale\"),calcular(\"purchase_price\", \"order_purchase\")'/>",
            "<input type='text' name='est_purchase_sale[]' class='form-control r-0 light s-12' id='est_purchase_sale"+i+"' onChange='calcular(\"sale_price\", \"order_sale\")'/>",
            "<input type='text' name='sale_price[]' class='form-control r-0 light s-12' id='sale_price"+i+"' onChange='cEstPSale_EstSale("+i+",this.value,\"order_quantity\",\"est_sale\"),calcular(\"sale_price\", \"order_sale\")'/>",
            // '{!! Form::text('sale_price[]', null, ['class'=>'form-control r-0 light s-12', 'id'=>'sale_price', 'onChange'=>'calcular("sale_price", "order_sale")']) !!}',
            "<input type='text' name='est_sale[]' class='form-control r-0 light s-12' id='est_sale"+i+"' onClick ='inputClear(this.id)'/>",
            // '{!! Form::text('est_sale[]', null, ['class'=>'form-control r-0 light s-12', 'id'=>'est_sale', 'onclick'=>'inputClear(this.id)']) !!}',
        ] ).draw( false );
        i++;
    } );
    // Automatically add a first row of data

    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {

        }
        else {
            t.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#buttonRM').click( function (event) {
        var r = confirm("Are you sure to delete the selected row?");
        if (r == true) {
            t.row('.selected').remove().draw( false );
            calcular('order_quantity', 'order_quantity_budget');
            calcular('purchase_price', 'order_purchase');
            calcular('sale_price', 'order_sale');
            ChangePrice("order_sale_currency_id", "order_sale", "order_sale_currency_change", "order_sale_usd");
            ChangePrice("order_purchase_currency_id", "order_purchase", "order_purchase_change", "order_purchase_usd")
        } else {
            return
        }
    } );
} );

function calcular(type, input){
    var total = 0
    $("#"+input+"").val(0);
    $( "input[name="+type+"]" ).each(function( value ) {
        var sum = parseInt($( this ).val());

        if (sum > 0) {
            total = total + sum;
        }
    });
    $("#"+input+"").val(total);
    $("#"+input+"_val").val(total);

    ChangePrice("order_sale_currency_id", "order_sale", "order_sale_currency_change", "order_sale_usd");
    ChangePrice("order_purchase_currency_id", "order_purchase", "order_purchase_change", "order_purchase_usd")
}

function ChangePrice(order, purchase, change, usd){

    var variable = $("#"+order).val();
    if (variable > 0) {
        var value = $("#"+variable).val();
        $("#"+change).val(value);

        var sumaPurchase = $("#"+purchase).val();
        var sumChanPur = $("#"+change).val();

        $("#"+usd).val(sumaPurchase * sumChanPur);
    }
    TotalPrice()
}

function TotalPrice(){
    var total = 0;

    $(".total_usd").each(function()
    {
        var sum = parseInt($( this ).val());
        if (sum > 0) {
            total = total + sum;
        }
    });

    $("#usd_budget").val(total);

}
</script>
