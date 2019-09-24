<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                <li>
                    <a class="nav-link" href="{{ route('account.index') }}" role="tab" id="account">
                        <i class="icon icon-widgets"></i> Accounts
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="category" href="{!! route('accountCategory.index') !!}" role="tab"
                    aria-controls="v-pills-buyers">
                        <i class="icon icon-format_list_bulleted"></i> Accounts Categories
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('accountMeta.index') }}" role="tab" id="meta">
                        <i class="icon icon-plus-circle"></i> Account meta
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="metaType" href="{!! route('accountMetaType.index') !!}" role="tab" >
                        <i class="icon icon icon-playlist_add"></i> Account meta type
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
