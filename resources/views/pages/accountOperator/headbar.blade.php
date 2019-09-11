<header class="blue accent-3 relative">
    <div class="container-fluid text-white">
        <div class="row justify-content-between">
            <ul class="nav nav-material nav nav-tabs nav-material-white responsive-tab" id="v-pills-tab" role="tablist">

                {{-- <li class="nav-item">
                    <a class="nav-link" id="accounts" href="{{ route('accountOperator.index') }}" role="tab" a>
                        <i class="icon icon-widgets s-14"></i>
                        All Accounts
                    </a>
                </li> --}}
                
                {{-- <li>
                    <a class="nav-link" href="{{ route('accountOperator.index') }}" role="tab" id="account">
                        <i class="icon icon-widgets"></i> Accounts
                    </a>
                </li> --}}
                {{-- <li>
                    <a class="nav-link" id="category" href="{!! route('accountCategory.index') !!}" role="tab"
                        aria-controls="v-pills-buyers">
                        <i class=""></i> Accounts Categories
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('accountMeta.index') }}" role="tab" id="meta">
                        <i class=""></i> Account meta
                    </a>
                </li> --}}
                {{-- <li>
                    <a class="nav-link" href="{!! route('country.index') !!}" role="tab" id="countries">
                        <i class="icon-globe"></i> Country
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('document.index') }}" role="tab" id="document">
                        <i class="icon-document-text"></i> Document
                    </a>
                </li> --}}
                @if (isset($account))
                    <li class="nav-item">
                        <a class="nav-link" id="show" href="{{ route('accountOperator.show',$account) }}" role="tab" a>
                            <i class="icon icon-eye s-14"></i>
                            Accounts Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactsAsoc',$account) }}" id="contact"  role="tab" >
                            <i class="icon icon-contacts"></i> Account Contacts
                        </a>
                    </li>
                    {{-- <li>
                        <a class="nav-link" id="metaType" href="{!! route('accountMetaType.index') !!}" role="tab" >
                            <i class=""></i> Account meta type
                        </a>
                    </li> --}}
                @endif
            </ul>
        </div>
    </div>
</header>