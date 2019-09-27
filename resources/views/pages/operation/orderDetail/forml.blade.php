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
    	<a id="button" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-delete"></i></a>
    </div>
	</div>
<script>
$(document).ready(function() {
    var t = $('#example').DataTable();
    var counter = '';
 
    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'{!! Form::text('order_quantity', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'order_quantity']) !!}',
            counter +'{!! Form::select('product', $operation, null, ['class'=>'form-control r-0 light s-12', 'id'=>'product', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('specifications', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'specifications']) !!}',
            counter +'{!! Form::text('packaging', null, ['class'=>'form-control r-0 light s-12', 'id'=>'packaging', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('brand', null, ['class'=>'form-control r-0 light s-12', 'id'=>'brand', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('plant', null, ['class'=>'form-control r-0 light s-12', 'id'=>'plant', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::select('shelf_life', $shelflife, null, ['class'=>'form-control r-0 light s-12', 'id'=>'shelf_life', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('purchase_price', null, ['class'=>'form-control r-0 light s-12', 'id'=>'purchase_price', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('est_purchase_sale', null, ['class'=>'form-control r-0 light s-12', 'id'=>'est_purchase_sale', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('sale_price', null, ['class'=>'form-control r-0 light s-12', 'id'=>'sale_price', 'onclick'=>'inputClear(this.id)']) !!}',
            counter +'{!! Form::text('est_sale', null, ['class'=>'form-control r-0 light s-12', 'id'=>'est_sale', 'onclick'=>'inputClear(this.id)']) !!}',
        ] ).draw( false );
    } );
    // Automatically add a first row of data
    $('#addRow').click();
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            t.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#button').click( function () {
        t.row('.selected').remove().draw( false );
    } );
} );
</script>