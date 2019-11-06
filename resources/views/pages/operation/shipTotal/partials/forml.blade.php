<div class="row">
    {!! Form::hidden('operation_id', $operation->id, ['class'=>'form-control']) !!}
    <div class="col-md-12">
        <div class="" id="decription_group">
            <i class=""></i>
            {!! Form::label('description', 'description', ['class'=>'col-form-label s-12']) !!}
            {!! Form::select('description', $products, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_description']) !!}
            <span class="decription_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="order_qty_group">
            <i class=""></i>
            {!! Form::label('order_qty', 'order_qty', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('order_qty', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_order_qty']) !!}
            <span class="order_qty_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="nb_package_group">
            <i class=""></i>
            {!! Form::label('nb_package', 'nb_package', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('nb_package', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_nb_package']) !!}
            <span class="nb_package_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="net_qty_group">
            <i class=""></i>
            {!! Form::label('net_qty', 'net_qty', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('net_qty', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_net_qty']) !!}
            <span class="net_qty_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="gross_weight_group">
            <i class=""></i>
            {!! Form::label('gross_weight', 'gross_weight', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('gross_weight', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_gross_weight']) !!}
            <span class="gross_weight_span"></span>
        </div>
    </div>
</div>
