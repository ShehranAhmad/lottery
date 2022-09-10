<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto mt-0"><a class="navbar-brand mt-0" style="padding-top: 10px;" href="">
                    <div class="brand-logo" style="background-image: url('{{ asset($setting['favicon'] ?? '')  }}');"></div>
                    <h2 class="brand-text mb-0"><img src="{{ asset($setting['logo'] ?? '')  }}" style="width: 120px;" alt=""></h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i>Dashboard</a></li>

            <li class=" navigation-header"><span>Others</span></li>
            <li class="nav-item @routeis('admin.inquiries*') active @endrouteis "><a href="{{route('admin.inquiries')}}"><i class="feather icon-message-square"></i>Inquiries</a></li>

            <li class="nav-item @routeis('admin.blogs*') active @endrouteis "><a href="{{route('admin.blogs.list')}}"><i class="feather icon-globe"></i>Blog's</a></li>
            <li class="nav-item @routeis('admin.setting.index') active @endrouteis"><a href="{{ route('admin.setting.index') }}"><i class="feather icon-settings"></i>Settings</a></li>
            <li class="nav-item @routeis('admin.setting.meta.tags') active @endrouteis"><a href="{{ route('admin.setting.meta.tags') }}"><i class="feather icon-list"></i>Meta Tags</a></li>






        </ul>
    </div>
</div>
