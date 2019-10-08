<div class="form-row">
    <div class="col-md-3">
        <div class="" id="account_id_group">
            <i class=""></i>
            {!! Form::label('account_id', 'Account *', ['class'=>'col-form-label s-12']) !!}
            {!! Form::select('account_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_account_id']) !!}
            <span class="account_id_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="recipient_group">
            <i class=""></i>
            {!! Form::label('recipient', 'Recipient', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('recipient', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_recipient']) !!}
            <span class="recipient_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="contact_group">
            <i class=""></i>
            {!! Form::label('contact', 'Contact', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('contact', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_contact']) !!}
            <span class="contact_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="telf_group">
            <i class=""></i>
            {!! Form::label('telf', 'telf', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('telf', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_telf']) !!}
            <span class="telf_span"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="" id="address_group">
            <i class=""></i>
            {!! Form::label('address', 'Address', ['class'=>'col-form-label s-12']) !!}
            {!! Form::textarea('address', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_address', 'rows'=>'3']) !!}
            <span class="address_span"></span>
        </div>
    </div>
</div>
