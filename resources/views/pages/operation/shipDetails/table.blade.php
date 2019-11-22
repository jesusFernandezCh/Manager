{{--  {!! Form::open(['route'=>["updateProduct"],'id'=>'saveDT', 'method'=>'POST']) !!}  --}}
<div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-sm display" id="example">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th width='40%'>{{ __('Description') }}</th>
                        <th>{{ __('OrderQty')}}</th>
                        <th>{{ __('NbPackage')}}</th>
                        <th>{{ __('NetQty')}}</th>
                        <th>{{ __('GrossWeight')}}</th>
                    </tr>
                </thead>
                @php
                    $i=1;
                @endphp
                <tbody>
                    @foreach ($productsAsoc as $product)
                    <tr>
                        <td>{!! Form::hidden('product_id[]', $product->id, ['class'=>'form-control r-0 light s-12']) !!}</td>
                        <td>{{$product->productGen->Products->line .' - '.$product->productGen->gen.' - '.$product->productGen->basic_spec.' - '.$product->productGen->cold_chain}}</td>
                        <td>{{$product->order_quantity}}</td>
                        <td>{!! Form::text('nb_package[]', $product->nb_package, ['class'=>'form-control r-0 light s-12','placeholder'=>'0,00']) !!}</td>
                        <td>{!! Form::text('net_qty[]', $product->net_qty, ['class'=>'form-control r-0 light s-12','placeholder'=>'0,00']) !!}</td>
                        <td>{!! Form::text('gross_weight[]', $product->gross_weight, ['class'=>'form-control r-0 light s-12','placeholder'=>'0,00']) !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('pdf','packingList') }}" title="{{ __('Export PDF') }}" target="_blank"><button type="button" class="btn btn-primary" style="border-radius:30px !important">Packing list</button></a>
        </div>
    </div>
{{--  {!! Form::close() !!}  --}}