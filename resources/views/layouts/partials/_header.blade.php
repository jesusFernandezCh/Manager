<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-150px mt-3 mb-3 ml-3">
            {{ Html::image('assets/img/basic/logo.png', 'a picture', array('alt'=>'Logo')) }}
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        {{ Html::image('img/avatar/'.Auth::user()->image, 'a picture', array('class'=>'user_avatar','alt'=>'a picture')) }}
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">{{ Auth::user()->fullname }}</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                        class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="{{ route('passwordReset') }}" class="list-group-item list-group-item-action">
                            <i class="mr-2 icon-security text-purple"></i>Change Password
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
        <li class="treeview"><a href="{{url('home')}}">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="treeview"><a href="{{ route('accountOperator.index') }}">
            <i class="icon icon-package blue-text s-18"></i>
            <span>{{ __('Accounts') }}</span></a>
        </li>
        <li class="treeview no-b"><a href="{{ route('operationIndexAsoc') }}">
            <i class="icon icon-group_work light-green-text s-18"></i>
            <span>{{ __('Operations') }}</span></a>
        </li>
        <li class="treeview"><a href="#">
            <i class="icon icon icon-package blue-text s-18"></i>
            <span>{{ __('Workflow Rules') }}</span></a>
        </li>
        <li><a href="{{ route('document.index') }}">
            <i class="icon icon-documents3 text-blue s-18"></i>
            <span>{{ __('Documents') }}</span></a>
        </li>
        <li class="treeview"><a href="#">
            <i class="icon icon-bar-chart2 pink-text s-18"></i>
            <span>{{ __('Reports') }}</span>
        </a>
    </li>
    <li class="header light mt-3">
        <strong>{{ __('CONFIGURATION') }}</strong>
    </li>
    <li class="treeview">
        <a href="{{ route('user.index') }}">
            <i class="icon icon-account_box light-green-text s-18"></i>{{ __('Users') }}
        </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="icon icon-goals-1 amber-text s-18"></i> <span>{{ __('Datatables') }}</span>
        <i class="icon icon-angle-left s-18 pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li>
            <a href="{{ route('account.index') }}">
                <i class="icon icon-widgets amber-text s-14"></i> <span>{{ __('Accounts') }}</span>
            </a>
        </li>
        <li>
            <a href="{!! route('logunit.index') !!}">
                <i class="icon icon-filter_9_plus amber-text s-14"></i> <span>{{ __('logunit') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('documentsType.index') }}">
                <i class="icon icon-widgets amber-text s-14"></i> <span>{{ __('Documents Type') }}</span>
            </a>
        </li>
         <li>
            <a href="{!! route('operations.index') !!}">
                <i class="icon icon-group_work amber-text s-14"></i> <span>{{ __('Operations')}}</span>
            </a>
        </li>
        <li>
            <a href="{!! route('incoterm.index') !!}">
                <i class="icon icon-text-width amber-text s-14"></i> <span>{{ __('Incoterm')}}</span>
            </a>
        </li>
        <li>
            <a href="panel-element-tabels.html">
                <i class="icon icon-table amber-text s-14"></i> <span>{{ __('Payments') }}</span>
            </a>
        </li>
        <li>
            <a href="panel-element-alerts.html">
                <i class="icon icon-exclamation-circle amber-text s-14"></i> <span>{{ __('Alerts') }}</span>
            </a>
        </li>
    </ul>
</li>
<li class="treeview ">
    <a href="{!! route('country.index') !!}">
        <i class="icon icon-globe blue-text s-18 "></i>
        <span>{{ __('Country/Ports') }}</span>
    </a>
</li>
<li class="treeview ">
    <a href="{{ route('currency.index') }}">
        <i class="icon icon-wpforms light-green-text s-18 "></i>
        <span>{{ __('Currency') }}</span>
    </a>
</li>
<li>
    <a class="nav-link" href="{{ route('status.index') }}" role="tab" id="status">
        <i class="icon icon-package blue-text s-18"></i> <span>{{__('Status')}}</span>
    </a>
</li>
<li class="treeview ">
    <a href="{{ route('accountContact.index') }}">
        <i class="icon icon-contacts pink-text s-18 "></i> <span>{{ __('Contacts') }}</span>
    </a>
</li>
<li class="treeview ">
    <a href="{{ route('language') }}">
        <i class="icon icon-package text-lime s-18"></i> <span>{{ __('Languages') }}</span>
    </a>
</li>
</ul>
</section>
</aside>
<!--Sidebar End-->