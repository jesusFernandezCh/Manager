<div class="row">
    <div class="col-md-12">
        <table class="table table-borderless table-hover table-sm display" id="example">
            <thead class="thead-light">
                <tr>
                    <th width='40%'>{{ __('Description') }}</th>
                    <th>{{ __('OrderCyty')}}</th>
                    <th>{{ __('NbPakage')}}</th>
                    <th>{{ __('NetQty')}}</th>
                    <th>{{ __('GrossWeight')}}</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <div class="col-md-12">
    	<a id="addRow" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-add"></i></a>
        <a id="buttonRM" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-delete"></i></a>
    </div>
</div>
<script>
    $(document).ready(function() {
    var t = $('#example').DataTable();

    $('#addRow').on( 'click', function () {
        t.row.add( [
            // '{!! Form::select('invoice_forwarder', $products, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_invoice_forwarder']) !!}',
            // '{!! Form::text('order_qty', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_order_qty']) !!}',
            // '{!! Form::text('order_qty', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_order_qty']) !!}',
            // '{!! Form::text('order_qty', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_order_qty']) !!}',
            // '{!! Form::text('order_qty', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_order_qty']) !!}',
        ] ).draw( false );
    } );
    // Automatically add a first row of data

    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('table-primary') ) {

        }
        else {
            t.$('tr.table-primary').removeClass('table-primary');
            $(this).addClass('table-primary');
        }
    } );
    $('#buttonRM').click( function (event) {
        t.row('.table-primary').remove().draw( false );
    } );
    $('button').click( function() {
        var data = table.$('input, select').serialize();
        alert(
            "The following data would have been submitted to the server: \n\n"+
            data.substr( 0, 120 )+'...'
        );
        return false;
    } );
} );
</script>
