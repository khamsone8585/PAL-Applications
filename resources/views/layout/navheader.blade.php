<div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
            </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg"> <i class="ion ion-android-person d-lg-none"></i>
                    <div class="d-sm-none d-lg-inline-block">Hi, Khamsone SOULIPANYA</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="profile.html" class="dropdown-item has-icon"> <i class="ion ion-android-person"></i> Profile </a>
                    <a href="#" class="dropdown-item has-icon"> <i class="ion ion-log-out"></i> Logout </a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand"> <a href="index.html">PAL Administrator </a> </div>
            <div class="sidebar-user">
                <div class="sidebar-user-picture"> <img alt="image" src="{{asset('assets/img/pal_logo.png')}}"> </div>
                <div class="sidebar-user-details">
                    <div class="user-name">Khamsone SOULIPANYA</div>
                    <div class="user-role"> Administrator </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li> <a href="{{route('admin')}}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a> </li>
                <li class="menu-header">Components <Menu:c></Menu:c></li>
                <li> <a href="{{route('service')}}"><i class="ion ion-gear-b"></i><span>Service</span></a>
                </li>
                <li> <a href="{{route('news')}}"><i class="ion ion-flag"></i><span>News and Event</span></a>
                </li>
                <li> <a href="{{route('hero')}}"><i class="ion ion-home"></i><span>Hero</span></a> </li>
                <li> <a href="{{route('about')}}"><i class="ion ion-clipboard"></i><span>About</span></a> </li>
                <li> <a href="{{route('ourclient')}}"><i class="ion ion-stats-bars"></i><span>Our Client</span></a> </li>
                <li> <a href="{{route('contact')}}"><i class="ion ion-ios-location-outline"></i><span>Contact US</span></a> </li>
            </ul>
        </aside>
    </div>