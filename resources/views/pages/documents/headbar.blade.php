<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                <li>
                    <a class="nav-link" href="{{ route('documentsType.index') }}" role="tab" id="documentsType">
                        <i class="icon icon-widgets"></i> {{__('Documents Type') }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('doc_status.index') }}" role="tab" id="doc_status">
                        {{__('Documents Status') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
