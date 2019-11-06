<div class="row">
        <div class="col-md-12">
            <table class="table table-borderless table-hover table-sm display" id="example">
                <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th width='40%'>{{ __('Description') }}</th>
                        <th>{{ __('OrderCyty')}}</th>
                        <th>{{ __('NbPakage')}}</th>
                        <th>{{ __('NetQty')}}</th>
                        <th>{{ __('GrossWeight')}}</th>
                        <th>{{ __('Options')}}</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @if (isset($products))
                        @foreach ($productsAsoc as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->order_qty }}</td>
                                <td>{{ $product->nb_package }}</td>
                                <td>{{ $product->net_qty }}</td>
                                <td>{{ $product->gross_weight }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody> --}}
            </table>
        </div>
        <div class="col-md-12">
            <a href="#" class="btn-fab fab-right  shadow btn-primary" title="Add Product" onclick="showModal('create','saveDataT')"><i class="icon-add"></i></a>
            {{-- <a id="addRow" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-add"></i></a> --}}
            <a id="buttonRM" class="btn-fab fab-right  shadow btn-primary" title="Add Product"><i class="icon-delete"></i></a>
        </div>
    </div>
    <script>
        // $(document).ready(function() {
        // var t = $('#example').DataTable({
        //     "serverSide": true,
        //     "ajax":"{{ url('api/shipTotals') }}",
        //     "columns":[
        //         {data: 'id'},
        //         {data: 'description'},
        //         {data: 'order_qty'},
        //         {data: 'nb_package'},
        //         {data: 'net_qty'},
        //         {data: 'gross_weight'},
        //         {data: 'btn'},
        //     ]
        // });

        // $('#save').on('click',function(){
        //     var forml = $('#products').serialize();
        //     var url = $('#products').attr("action");

        //     $.ajax({
        //         url: url,
        //         type: 'POST',
        //         data: forml,
        //         cache: false,
        //         success: function(result){
        //             $('.modal').modal('hide');

        //             toastr.success("Add Prodduct","Success");
        //         },
        //         error: function(msj) {
        //         var message = msj.responseText;
        //         var errors = $.parseJSON(msj.responseText);
        //             $.each(errors.errors, function(key, value) {
        //             toastr.error(value,"Error");
        //             });
        //         },
        //         timeout: 15000
        //     });
        // });



        // $('#example tbody').on( 'click', 'tr', function () {
        //     if ( $(this).hasClass('table-primary') ) {

        //     }
        //     else {
        //         t.$('tr.table-primary').removeClass('table-primary');
        //         $(this).addClass('table-primary');
        //     }
        // } );
        // $('#buttonRM').click( function (event) {
        //     t.row('.table-primary').remove().draw( false );
        // } );
        // });
    </script>
