<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url(Admin::url('/')) }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">{!! config('admin.logo-mini', config('admin.name')) !!}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            @if(config('admin.logo-image'))
                <img src="{{url(config('admin.logo-image'))}}" style="width:auto;height:48px"
                     alt="{{config('admin.name')}}"/>
            @else
                {!! config('admin.logo', config('admin.name')) !!}
            @endif
        </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

            {!! Admin::getNavbar()->render() !!}

            <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ url(Admin::user()->avatar) }}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Admin::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ url(Admin::user()->avatar) }}" class="img-circle" alt="User Image">

                            <p>
                                {{ Admin::user()->name }}
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url(Admin::url('auth/setting')) }}"
                                   class="btn btn-default btn-flat">{{ trans('admin::lang.setting') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url(Admin::url('auth/logout')) }}"
                                   class="btn btn-default btn-flat">{{ trans('admin::lang.logout') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                {{--<li>--}}
                {{--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </nav>
</header>