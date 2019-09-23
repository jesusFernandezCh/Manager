<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                {{--  <li>
                    <a class="nav-link" id="operations" href="{{ route('operations.index') }}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class="icon icon-group_work"></i> {{__('Order Terms')}}
                    </a>
                </li>  --}}
                @if (isset($create))
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Order Details')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Order Details')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Products')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Finance')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Contacts')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Leads')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Freight rates')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Documents')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="operations" href="#" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Budget NTP')}}
                    </a>
                </li>
                @endif

                @if (isset($operation->id))
                <li>
                    <a class="nav-link" id="resumen" href="{{ route('operations.edit',$operation) }}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Orders Terms')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('documentsAsoc',$operation) }}" role="tab" id="documents">
                        <i class="icon icon-documents3"></i> {{__('Documents')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#" role="tab" id="meta">
                        <i class=""></i> {{__('Payments')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="metaType" href="#" role="tab" >
                        <i class=""></i> {{__('History')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="contacts" href="#" role="tab" >
                        <i class="icon icon-contacts"></i> {{__('Contacts')}}
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