<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                @if (isset($operation->id))
                <li>
                    <a class="nav-link" id="resumen" href="{{ route('operations.edit',$operation) }}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class=""></i> {{__('Resumen')}}
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
            </ul>
        </div>
    </div>
</header>