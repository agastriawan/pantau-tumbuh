<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <div id="sidebar-menu">
            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets_portal/img/logo-2.png') }}" alt="" height="48">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets_portal/img/logo-2.png') }}" alt="" height="50">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets_portal/img/logo-2.png') }}" alt="" height="48">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets_portal/img/logo-2.png') }}" alt="" height="50">
                    </span>
                </a>
            </div>

            <ul id="side-menu">
                <li class="menu-title"></li>
                <li>
                    <a href="{{ url('/dashboard') }}" class="tp-link">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                @if (Auth::user()->role->id == 1 ) 
                <li class="menu-title mt-2">Orang Tua</li>
    
                <li>
                    <a href="{{ url('/orangtua/anak') }}" class="tp-link">
                        <i data-feather="user-plus"></i>
                        <span> Anak </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/monitoring') }}" class="tp-link">
                        <i data-feather="columns"></i>
                        <span> Monitoring </span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->role->id == 2 ) 
                <li class="menu-title mt-2">Tenaga Medis</li>

                <li>
                    <a href="{{ url('/monitoring') }}" class="tp-link">
                        <i data-feather="columns"></i>
                        <span> Monitoring </span>
                    </a>
                </li>
                @endif

                <li class="menu-title mt-2">Administrator</li>

                <li>
                    <a href="{{ url('/usermanagement') }}" class="tp-link">
                        <i data-feather="users"></i>
                        <span> User Management </span>
                    </a>
                </li>

                <li>
                    <a href="apps-contacts.html" class="tp-link">
                        <i data-feather="table"></i>
                        <span> Artikel </span>
                    </a>
                </li>

                <li>
                    <a href="apps-contacts.html" class="tp-link">
                        <i data-feather="package"></i>
                        <span> FAQ </span>
                    </a>
                </li>

                <li>
                    <a href="apps-contacts.html" class="tp-link">
                        <i data-feather="user"></i>
                        <span> Profile Website </span>
                    </a>
                </li>
            </ul>

        </div>
        <div class="clearfix"></div>
    </div>
</div>