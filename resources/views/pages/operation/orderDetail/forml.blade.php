<style>
    .selected {
        outline: thin solid;
        }
</style>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
    	</tbody>
    </table>
    <div class="col-md-12">
    	<a id="addRow" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-add"></i></a>
        <a id="buttonRM" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-delete"></i></a>
    </div>
	</div>
<script>
$(document).ready(function() {
    var t = $('#example').DataTable();
    var counter = '';
 
    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'{!! Form::number('order_quantity', null, [ 'class'=>'form-control order r-0 light s-12', 'id'=>'order_quantity', 'onChange'=> 'calcular("order_quantity", "order_quantity_budget")']) !!}',
            counter +'{!! Form::select('product', $operation, null, ['class'=>'form-control r-0 light s-12', 'id'=>'product', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('specifications', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'specifications']) !!}',
            counter +'{!! Form::text('packaging', null, ['class'=>'form-control r-0 light s-12', 'id'=>'packaging', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('brand', null, ['class'=>'form-control r-0 light s-12', 'id'=>'brand', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('plant', null, ['class'=>'form-control r-0 light s-12', 'id'=>'plant', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::select('shelf_life', $shelflife, null, ['class'=>'form-control r-0 light s-12', 'id'=>'shelf_life', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('purchase_price', null, ['class'=>'form-control r-0 light s-12', 'id'=>'purchase_price', 'onChange'=>'calcular("purchase_price", "order_purchase")']) !!}',
            counter +'{!! Form::text('est_purchase_sale', null, ['class'=>'form-control r-0 light s-12', 'id'=>'est_purchase_sale', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('sale_price', null, ['class'=>'form-control r-0 light s-12', 'id'=>'sale_price', 'onChange'=>'calcular("sale_price", "order_sale")']) !!}',
            counter +'{!! Form::text('est_sale', null, ['class'=>'form-control r-0 light s-12', 'id'=>'est_sale', 'onclick'=>'inputClear(this.id)']) !!}',
        ] ).draw( false );
    } );
    // Automatically add a first row of data
    $('#addRow').click();
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {

        }
        else {
            t.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#buttonRM').click( function (event) {
        t.row('.selected').remove().draw( false );
        calcular('order_quantity', 'order_quantity_budget');
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


}

</script>