<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                <li>
                    <a class="nav-link" href="{{ route('product_line.index') }}" role="tab" id="product_line">
                        <i class="icon icon-widgets"></i> {{__('Product Line') }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('product_gen.index') }}" role="tab" id="product_gen">
                        {{__('Product Gender') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
