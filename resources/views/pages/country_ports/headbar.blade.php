<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                <li>
                    <a class="nav-link" href="{{ route('country.index') }}" role="tab" id="countries">
                        <i class="icon icon-globe s-14"></i> Country
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="ports" href="{!! route('port.index') !!}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class="icon icon-anchor amber-text s-14"></i> Ports
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
