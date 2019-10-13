<div class="row">
    <div class="col-12 alert-info text-center" style="border-radius: 50px">
        <b>DOCUMENTS</b>
    </div>
    {!! Form::hidden('operation_id', $operation->id, ['class'=>'form-control']) !!}
    <div class="col-md-3">
        <div class="" id="doc_status_id_Admin_group">
            <i class=""></i>
            {!! Form::label('doc_status_id', 'DocStatus', ['class'=>'col-form-label s-12']) !!}
            {!! Form::select('doc_status_id', $status, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_doc_status_id']) !!}
            <span class="doc_status_id_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="date_docs_ok_group">
            <i class=""></i>
            {!! Form::label('date_docs_ok', 'DateDocs ok', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('date_docs_ok', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_docs_ok']) !!}
            <span class="date_docs_ok_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="date_insured_group">
            <i class=""></i>
            {!! Form::label('date_insured', 'DateInsured', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('date_insured', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_insured']) !!}
            <span class="date_insured_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="date_legalized_group">
            <i class=""></i>
            {!! Form::label('date_legalized', 'DateLegalized', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('date_legalized', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_legalized']) !!}
            <span class="date_legalized_span"></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group" id="docs_modification_group">
            <i class=""></i>
            {!! Form::label('docs_modification', 'DocsModification', ['class'=>'col-form-label s-12']) !!}
            {!! Form::textarea('docs_modification', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_docs_modification', 'rows'=>3]) !!}
            <span class="docs_modification_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group" id="date_telex_group">
            <i class=""></i>
            {!! Form::label('date_telex', 'DateTelex', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('date_telex', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_telex']) !!}
            <span class="date_telex_span"></span>
        </div>
    </div>
    <div class="col-12 alert-info text-center" style="border-radius: 50px">
        <b>COURRIER</b>
    </div>
    <div class="col-md-3">
        <div class="" id="courrier_to_principal_group">
            <i class=""></i>
            {!! Form::label('courrier_to_principal', 'CourrierPrincipal', ['class'=>'col-form-label s-12']) !!}
            {!! Form::select('courrier_to_principal', [1 =>'Courrier Principal'], null, ['class'=>'form-control r-0 light s-12', 'id'=>'_courrier_to_principal']) !!}
            <span class="courier_to_principal_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="date_telex_group">
            <i class=""></i>
            {!! Form::label('cp_ref', 'CPRef', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('cp_ref', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cp_ref']) !!}
            <span class="cp_ref_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="cp_sent_on_group">
            <i class=""></i>
            {!! Form::label('cp_sent_on', 'CPSentOn', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('cp_sent_on', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_cp_sent_on']) !!}
            <span class="cp_sent_on_span"></span>
        </div>
    </div>
    <div class="col-md-9">
        <div class="" id="customer_mailing_a_group">
            <i class=""></i>
            {!! Form::label('customer_mailing_a', 'CustomerMailingAddress', ['class'=>'col-form-label s-12']) !!}
            {!! Form::select('customer_mailing_a', $custMailings, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_customer_mailing_a']) !!}
            <span class="customer_mailing_a_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="courrier_to_customer_group">
            <i class=""></i>
            {!! Form::label('courrier_to_customer', 'CourrierToCustomer', ['class'=>'col-form-label s-12']) !!}
            {!! Form::select('courrier_to_customer', [1 => 'CourrierToCustomer'], null, ['class'=>'form-control r-0 light s-12', 'id'=>'_customer_mailing_a']) !!}
            <span class="courrier_to_customer_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="cc_ref_group">
            <i class=""></i>
            {!! Form::label('cc_ref', 'CCRef', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('cc_ref', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cc_ref']) !!}
            <span class="cc_ref_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="cc_sent_on_group">
            <i class=""></i>
            {!! Form::label('cc_sent_on', 'CCSentOn', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('cc_sent_on', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_cc_sent_on']) !!}
            <span class="cc_sent_on_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="cc_received_or_group">
            <i class=""></i>
            {!! Form::label('cc_received_or', 'CCReceivedOr', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('cc_received_or', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_cc_received_or']) !!}
            <span class="cc_received_or_span"></span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" id="cargo_released_on_group">
            <i class=""></i>
            {!! Form::label('cargo_released_on', 'CargoReleasedOn', ['class'=>'col-form-label s-12']) !!}
            {!! Form::text('cargo_released_on', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_cargo_released_on']) !!}
            <span class="cargo_released_on_span"></span>
        </div>
    </div>
</div>