<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                @if (isset($create))
                <li>
                    <a class="nav-link" id="order_terms" href="@if(isset($operation)) {{ route('operations.edit',$operation) }} @else {{ route('operations.create') }}@endif" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Order Terms')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link d" id="order_details" href="@if (isset($operation))
                     {{route('order_details.show',$operation)}}
                     @else # 
                    @endif" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class="" ></i> {{__('Order Details')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link d" id="InstShipPlain" 
                    href="
                    @if(isset($operation) && !isset($operationShip)){{ route('operationShip.show',$operation) }}@else # @endif"
                     role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Inst-Ship Plain')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link d" id="ship_details" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Ship Details')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link d" id="documents" 
                    href="
                    @if (isset($operation))
                        {{ route('documentsAsoc',$operation) }}
                    @else # 
                    @endif"
                    role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Documents')}}
                    </a>
                </li>
                <li> 
                    <a class="nav-link d" id="payments" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Payments')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link d" id="pmt_details" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Pmt Details')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link d" id="operationDocument" href="
                     @if (isset($operation))
                     {{route('operationDocument.show',$operation)}}
                     @else # 
                    @endif" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Documents')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link d" id="budget_ntp" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Budget NTP')}}
                    </a>
                </li>
                @endif
                @if ($admin == true)
                <li>
                    <a class="nav-link" id="business" href="{{ route('business.index') }}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class="icon icon-next_week"></i> {{__('Line Business')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="cargoUnit" href="{{ route('cargoUnit.index') }}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class="icon icon-barometer"></i> {{__('Cargo units')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="orderPmtTerm" href="{{ route('orderPmtTerm.index') }}" role="tab" aria-controls="v-pills-buyers">
                        <i class="icon icon-cash-register"></i> {{__('Order Pmt Terms')}}
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</header>