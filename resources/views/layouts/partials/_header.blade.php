<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        {{-- <div class="w-150px mt-3 mb-3 ml-3"> --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo">
                        {{ Html::image('assets/img/basic/logo.png', 'a picture', ['alt' => 'Logo']) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                aria-controls="userSettingsCollapse"
                class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img src="img/avatar/{{ Auth::user()->Empleado->Persona->imagen}}" alt="User Image" class="user_avatar" alt="a picture">
                        {{-- {{ Html::image('img/avatar/'.Auth::user()->Empleado->Persona->id;, 'a picture', ['class' => 'user_avatar', 'alt' => 'a picture']) }} --}}
                    </div>
                    <div class="float-left info">
                        <p class="font-weight-light mt-0 mb-0 user-name">{{ Auth::user()->Empleado->Persona->fullname() }}</p>
                        <p class="font-weight-light mt-0 mb-0">{{ Auth::user()->email }}</p>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="#" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Mi Perfil
                        </a>
                        {{-- <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i></a> --}}
                        <a href="{{ route('passwordReset') }}" class="list-group-item list-group-item-action">
                            <i class="mr-2 icon-security text-purple"></i>Cambiar Clave
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ url('home') }}" class="nav-link active">
                    <i class="icon icon-dashboard blue-text s-24"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="treeview">
                {{-- <a href="{{ route('accountOperator.index') }}"> --}}
                <a href="#">
                    <i class="icon icon-cogs blue-text s-24"></i>
                    {{-- <span>{{ __('Accounts') }}</span></a> --}}
                    <span>Configuración</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-keyboard blue-text s-24"></i> <span>Administración</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('user.index') }}">
                            <i class="icon icon-circle-o text-primary s-18"></i> <span>{{ __('Users') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('empleados.index') }}">
                            <i class="icon icon-circle-o text-primary s-18"></i> <span>Empleados</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ route('user.index') }}">
                    <i class="icon icon-bar-chart blue-text s-24"></i>
                    {{-- {{ __('Users') }} --}}
                    <span>Reportes</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
            </li>
            {{-- <li class="treeview no-b"><a href="{{ route('operationIndexAsoc') }}">
                    <i class="icon icon-repeat2 light-green-text s-24"></i>
                    <span>{{ __('Operations') }}</span></a>
            </li>
            <li class="treeview no-b"><a href="{{ route('payments.index') }}">
                    <i class="icon icon-payment amber-text s-24"></i>
                    <span>{{ __('Payments') }}</span></a>
            </li>
            <li>
                <a href="{!! route('bank_transaction.index') !!}">
                    <i class="icon icon-bank s-14"></i> <span>{{ __('Bank Transaction') }}</span>
                </a>
            </li> --}}
            {{-- <li class="treeview"><a href="#">
            <i class="icon icon icon-package blue-text s-18"></i>
            <span>{{ __('Workflow Rules') }}</span></a>
        </li> --}}
            {{-- <li><a href="{{ route('document.index') }}">
                    <i class="icon icon-documents3 text-blue s-18"></i>
                    <span>{{ __('Documents') }}</span></a>
            </li> --}}
            {{-- <li class="treeview"><a href="#">
            <i class="icon icon-bar-chart2 pink-text s-18"></i>
            <span>{{ __('Reports') }}</span>
        </a> --}}
            </li>
            <li class="header light mt-3">
                {{-- <strong>{{ __('CONFIGURATION') }}</strong> --}}
                <strong>{{ __('MISELANEOS') }}</strong>
            </li>
            {{-- <li class="treeview">
                <a href="{{ route('user.index') }}">
                    <i class="icon icon-user blue-text s-18"></i>{{ __('Users') }}
                </a>
            </li> --}}
            {{-- <li class="treeview">
                <a href="#">
                    <i class="icon icon-goals-1 amber-text s-18"></i> <span>{{ __('Datatables') }}</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('account.index') }}">
                            <i class="icon icon-widgets amber-text s-14"></i> <span>{{ __('Accounts') }}</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{!! route('accountCategory.index') !!}">
                                    <i class="icon icon-format_list_bulleted amber-text s-14"></i>
                                    <span>{{ __('Accounts Categories') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('accountMeta.index') }}">
                                    <i class="icon icon-plus-circle amber-text s-14"></i>
                                    <span>{{ __('Account meta') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('accountMetaType.index') }}">
                                    <i class="icon icon icon-playlist_add amber-text s-14"></i>
                                    <span>{{ __('Account meta type') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('docsInstruction.index') }}">
                                    <i class="icon icon-document amber-text s-14"></i>
                                    <span>{{ __('DocsInstruction') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('accountCourrier.index') }}">
                                    <i class="icon icon-truck amber-text s-14"></i>
                                    <span>{{ __('Account Courrier') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{!! route('logunit.index') !!}">
                            <i class="icon icon-filter_9_plus amber-text s-14"></i> <span>{{ __('logunit') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! route('bank.index') !!}">
                            <i class="icon icon-bank amber-text s-14"></i> <span>{{ __('Banks') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('documentsType.index') }}">
                            <i class="icon icon-widgets amber-text s-14"></i> <span>{{ __('Documents Type') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('operations.index') }}">
                            <i class="icon icon-repeat2 amber-text s-14"></i> <span>{{ __('Operations') }}</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{!! route('business.index') !!}">
                                    <i class="icon icon-next_week amber-text s-14"></i>
                                    <span>{{ __('Line Business') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cargoUnit.index') }}">
                                    <i class="icon icon-barometer amber-text s-14"></i>
                                    <span>{{ __('Cargo units') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orderPmtTerm.index') }}">
                                    <i class="icon icon-cash-register amber-text s-14"></i>
                                    <span>{{ __('Order Pmt Terms') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('freightRates.index') }}">
                                    <i class="icon icon-cash-register amber-text s-14"></i>
                                    <span>{{ __('Freight Rates') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('freightLines.index') }}">
                                    <i class="icon icon-cash-register amber-text s-14"></i>
                                    <span>{{ __('Freight Lines') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{!! route('incoterm.index') !!}">
                            <i class="icon icon-text-width amber-text s-14"></i> <span>{{ __('Incoterm') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('document.index') }}">
                            <i class="icon icon-document amber-text s-14"></i> <span>{{ __('Documents') }}</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{!! route('doc_status.index') !!}">
                                    <i class="icon icon-document amber-text s-14"></i>
                                    <span>{{ __('Documents Status') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('documentsType.index') }}">
                                    <i class="icon icon-document amber-text s-14"></i>
                                    <span>{{ __('Documents Type') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('payments.index') }}">
                            <i class="icon icon-payment amber-text s-14"></i> <span>{{ __('Payments') }}</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('partner_bank.index') }}">
                                    <i class="icon icon-bank amber-text s-14"></i>
                                    <span>{{ __('Partner Banks') }}</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('mvTypes.index') }}">
                                    <i class="icon icon-bank amber-text s-14"></i> <span>{{ __('Mv Type') }}</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('mvConcepts.index') }}">
                                    <i class="icon icon-bank amber-text s-14"></i>
                                    <span>{{ __('Mv Concept') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('payments.index') }}">
                            <i class="icon icon-table amber-text s-14"></i> <span>{{ __('Products') }}</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('product_line.index') }}">
                                    <i class="icon icon-table amber-text s-14"></i>
                                    <span>{{ __('Product Line') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product_gen.index') }}">
                                    <i class="icon icon-table amber-text s-14"></i>
                                    <span>{{ __('Product Gender') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{!! route('currier.index') !!}">
                            <i class="icon icon-text-width amber-text s-14"></i> <span>Currier</span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! route('shelf_life.index') !!}">
                            <i class="icon icon-text-width amber-text s-14"></i> <span>Shelf Life</span>
                        </a>
                    </li>
                    <li>
                        <a href="panel-element-alerts.html">
                            <i class="icon icon-exclamation-circle amber-text s-14"></i>
                            <span>{{ __('Alerts') }}</span>
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
                    <i class="icon icon-package blue-text s-18"></i> <span>{{ __('Status') }}</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="{{ route('accountContact.index') }}">
                    <i class="icon icon-contacts pink-text s-18 "></i> <span>{{ __('Contacts') }}</span>
                </a>
            </li> --}}
            <li class="treeview ">
                <a href="{{ route('language') }}">
                    <i class="icon icon-text-width blue-text s-24"></i> 
                    <span>{{ __('Languages') }}</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="{{ route('language') }}">
                    <i class="icon icon-file-text blue-text s-24"></i> 
                    {{-- <span>{{ __('Languages') }}</span> --}}
                    <span>Documentación</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
<!--Sidebar End-->
