<div class="row">
    <div class="col-6">
        <div class="form-group" id="forwarder_group">
            {!! Form::label('forwarder', 'Forwarder', ['class'=>'control-label']) !!}
            {!! Form::select('forwarder', $forwarders, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_forwarder']) !!}
            <span class="forwarder_span"></span>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group" id="log_unit_group">
            {!! Form::label('logUnit', 'LogUnit', ['class'=>'control-label']) !!}
            {!! Form::select('log_unit', $logUnits, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_log_unit']) !!}
            <span class="log_unit_span"></span>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group" id="pol_group">
            {!! Form::label('POL', 'POL', ['class'=>'control-label']) !!}
            {!! Form::select('pol',$ports, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_pol']) !!}
            <span class="pol_span"></span>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group" id="pod_group">
            {!! Form::label('pod', 'POD', ['class'=>'control-label']) !!}
            {!! Form::select('pod',$ports, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_pod']) !!}
            <span class="pod_span"></span>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group" id="line_group">
            {!! Form::label('line', 'Line', ['class'=>'control-label']) !!}
            {!! Form::select('line', $lines, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_line']) !!}
            <span class="line_span"></span>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group" id="currency_group">
            {!! Form::label('currency', 'Currency', ['class'=>'control-label']) !!}
            {!! Form::select('currency', $currencies, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_currency']) !!}
            <span class="currency_span"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <div class="form-group" id="basic_freight_group">
            {!! Form::label('basic_freight', 'BasicFreight', ['class'=>'control-label']) !!}
            {!! Form::text('basic_freight', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_basic_freight', 'placeholder'=>'0.00']) !!}
            <span class="basic_freight_span"></span>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group" id="baf_group">
            {!! Form::label('baf', 'BAF', ['class'=>'control-label']) !!}
            {!! Form::text('baf', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_baf','placeholder'=>'0.00']) !!}
            <span class="baf_span"></span>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group" id="adds_on_group">
            {!! Form::label('adds_on', 'addsOn', ['class'=>'control-label']) !!}
            {!! Form::text('adds_on', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_adds_on','placeholder'=>'0.00']) !!}
            <span class="adds_on_span"></span>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group" id="freight_all_in_group">
            {!! Form::label('freight_all_in', 'freight_all_in', ['class'=>'control-label']) !!}
            {!! Form::text('freight_allIn', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_freight_all_in','placeholder'=>'0.00']) !!}
            <span class="freight_all_in_span"></span>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group" id="transit_time_group">
            {!! Form::label('transit_time', 'TransitTime', ['class'=>'control-label']) !!}
            {!! Form::text('transit_time', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_transit_time','placeholder'=>'0.00']) !!}
            <span class="transit_time_span"></span>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group" id="days_free_plug_group">
            {!! Form::label('days_free_plug', 'DaysFreePlug', ['class'=>'control-label']) !!}
            {!! Form::text('days_free_plug', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_days_free_plug','placeholder'=>'0.00']) !!}
            <span class="days_free_plug_span"></span>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group" id="days_free_storage_group">
            {!! Form::label('days_free_storage', 'DaysFreeStorage', ['class'=>'control-label']) !!}
            {!! Form::text('days_free_storage', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_days_free_storage','placeholder'=>'0.00']) !!}
            <span class="days_free_storage_span"></span>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group" id="days_free_dem_group">
            {!! Form::label('days_free_dem', 'DaysFreeDem', ['class'=>'control-label']) !!}
            {!! Form::text('days_free_dem', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_days_free_dem','placeholder'=>'0.00']) !!}
            <span class="days_free_dem_span"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <div class="form-group" id="valid_until_group">
            {!! Form::label('valid_until', 'valid_until', ['class'=>'control-label']) !!}
            {!! Form::text('valid_until', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_valid_until']) !!}
            <span class="valid_until_span"></span>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group" id="route_group">
            {!! Form::label('route', 'Route', ['class'=>'control-label']) !!}
            {!! Form::text('route', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_route']) !!}
            <span class="route_span"></span>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group" id="rate_sumary_group">
            {!! Form::label('rate_sumary', 'RateSumary', ['class'=>'control-label']) !!}
            {!! Form::text('rate_sumary', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_rate_sumary']) !!}
            <span class="rate_sumary_span"></span>
        </div>
    </div>
</div>