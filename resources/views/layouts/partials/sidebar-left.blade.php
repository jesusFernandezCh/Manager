<div class="page has-sidebar-left">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                <div class="search-bar">
                    <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                    placeholder="start typing...">
                </div>
                <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
            </div>
        </div>
    </div>
    <div class="has-sidebar-left navbar navbar-expand navbar-dark justify-content-between bd-navbar blue darken-4 fixed-top">
    {{-- <div class="navbar navbar-expand d-flex navbar-dark justify-content-between bd-navbar blue accent-3 shadow"> --}}
        <div class="relative">
            <div class="d-flex">
                <div>
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <div class="d-none d-md-block">
                    @yield('title')
                </div>
            </div>
        </div>
        <!--Top Menu Start -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages-->
                <li class="dropdown custom-dropdown messages-menu">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="icon-message "></i>
                        <span class="badge badge-success badge-mini rounded-circle">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu pl-2 pr-2">
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="assets/img/dummy/u4.png" alt="">
                                            <span class="avatar-badge busy"></span>
                                        </div>
                                        <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="assets/img/dummy/u1.png" alt="">
                                            <span class="avatar-badge online"></span>
                                        </div>
                                        <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="assets/img/dummy/u1.png" alt="">
                                            <span class="avatar-badge idle"></span>
                                        </div>
                                        <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="assets/img/dummy/u3.png" alt="">
                                            <span class="avatar-badge busy"></span>
                                        </div>
                                        <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                        </li>
                        <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- Notifications -->
                <li class="dropdown custom-dropdown notifications-menu">
                    <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-notifications "></i>
                        <span class="badge badge-danger badge-mini rounded-circle">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer p-2 text-center"><a href="#">View all</a></li>
                    </ul>
                </li>
                 <!-- Language-->
                <li class="dropdown custom-dropdown notifications-menu">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="icon-language2 "></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="header">Langueges</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                    <ul class="menu pl-2 pr-2">
                    {{-- @foreach ($lang=\App\Language::all() as $row)
                                <li>
                                    <a href="{{ route('lang', $row->abbreviation) }}">{{ $row->language }}</a>
                                </li>
                    @endforeach --}}
                </ul>
                       
 
                        </li>
                    </ul>
                </li>
                <!-- END Language-->
                <li>
                    <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                        aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class=" icon-search3 "></i>
                    </a>
                </li>
                <!-- Right Sidebar Toggle Button -->
                <li>
                    <a class="nav-link ml-2" data-toggle="control-sidebar">
                        <i class="icon-tasks "></i>
                    </a>
                </li>
                <!-- User Account-->
                <li class="dropdown custom-dropdown user user-menu ">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        {{-- {{ Html::image('img/avatar/'.Auth::user()->image, 'a picture', array('class'=>'user-image','alt'=>'a picture')) }} --}}
                         {{-- <img src="img/avatar/{{ Auth::user()->image}}" alt="User Image" class="user-image"> --}}
                        <i class="icon-more_vert "></i>
                    </a>
                    <div class="dropdown-menu p-4 dropdown-menu-right">
                        <div class="row box justify-content-between my-4">
                            <div class="col">
                                <a href="#">
                                    <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                    <div class="pt-1">Apps</div>
                                </a>
                            </div>
                            <div class="col"><a href="#">
                                <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                <div class="pt-1">Profile</div>
                            </a></div>
                            <div class="col">
                                <a href="#">
                                    <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                    <div class="pt-1">Settings</div>
                                </a>
                            </div>
                        </div>
                        <div class="row box justify-content-between my-4">
                            <div class="col">
                                <a href="#">
                                    <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                    <div class="pt-1">Favourites</div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#">
                                    <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                    <div class="pt-1">Saved</div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#">
                                    <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                    <div class="pt-1">Settings</div>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row box justify-content-between my-4">
                            <div class="col">
                                <a href="#">
                                    <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                    <div class="pt-1">Apps</div>
                                </a>
                            </div>
                            <div class="col"><a href="#">
                                <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                <div class="pt-1">Profile</div>
                            </a></div>
                            <div class="col">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-power-off red avatar  r-5"></i>
                                    <div class="pt-1">Exit</div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class=" position-fixed d-block pt-5 mt-3" style="z-index:1; width:100%;">
        @yield('top-menu')
    </div>
    <div>
        @yield('maincontent')
    </div>
</div>