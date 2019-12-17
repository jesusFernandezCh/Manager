<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                <li>
                    <a class="nav-link" href="{{ route('payments.index') }}" role="tab" id="payments">
                        <i class="icon icon-widgets"></i> {{__('Payments') }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{!! route('bank.index') !!}" role="tab" id="bank">
                        <i"></i> {{__('Banks') }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="bank_transaction" href="{!! route('bank_transaction.index') !!}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Bank Transaction') }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="bank_account_type" href="{!! route('bank_account_type.index') !!}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Bank Account Type') }}
                    </a>
                </li>
                {{-- <li>
                    <a class="nav-link" id="partner_bank" href="{!! route('partner_bank.index') !!}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Partner Banks') }}
                    </a>
                </li> --}}
                @if (isset($account_id))
                <li>
                    <a class="nav-link" id="bank_account_type" href="{!! route('accountOperator.show',$account_id) !!}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Account') }}
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</header>
