<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li>
                        <a class="{{ request()->is('Home') ? 'active' : '' }}" href="{{ url('Home') }}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                    </li>
                    @canany(['lihat-user','lihat-karyawan','lihat-member','lihat-user','lihat-bonus'])
                    <li class="menu-title">
                        <span>Master Administration</span>
                    </li>
                    @endcanany
                    @can('lihat-user')
                    <li class="submenu">
                        <a href="#"><i class="la la-user-plus"></i> <span>Users</span><span
                            class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->is('Users') ? 'active' : '' }}" href="{{ url('Users') }}">
                                All Users </a></li>
                            {{-- <li><a class="{{ request()->is('Roles') ? 'active' : '' }}" href="{{ url('Roles') }}">
                                All Roles </a></li> --}}
                        </ul>
                    </li>
                    @endcan
                    @can('lihat-karyawan')
                    <li class="submenu">
                        <a href="#"><i class="las la-user-circle"></i> <span> Karyawan </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->is('Karyawan') ? 'active' : '' }}"
                                    href="{{ route('Karyawans') }}"> All Karyawan </a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('lihat-member')
                    <li class="submenu">
                        <a href="#"><i class="las la-user-friends"></i> <span> Member </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->is('Members') ? 'active' : '' }}" href="{{ url('Member') }}">
                                All Members </a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('lihat-bonus')
                    <li class="submenu">
                        <a href="#"><i class="la la-money"></i> <span>Bonus</span><span
                            class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->is('Bonus') ? 'active' : '' }}" href="{{ url('Bonus') }}">
                                Bonus </a></li>

                        </ul>
                    </li>
                    @endcan
                    @canany(['lihat-deposit','lihat-withdraw'])
                    <li class="menu-title">
                        <span>Transaction</span>
                    </li>
                    @endcanany
                    @can('lihat-deposit')
                    <li class="submenu">
                        <a href="#"><i class="la la-money"></i> <span> Deposit </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->is('Deposit') ? 'active' : '' }}" href="{{ url('Deposit') }}"> All Deposit </a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('lihat-withdraw')
                    <li class="submenu">
                        <a href="#"><i class="la la-crosshairs"></i> <span> Withdraw </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="#"> All Withdraw </a></li>
                        </ul>
                    </li>
                    @endcan




                    @role('super-admin|admin')
                    <li class="menu-title">
                        <span>Configuration</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="profile.html"> Employee Profile </a></li>
                            <li><a href="client-profile.html"> Client Profile </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="register.html"> Register </a></li>
                            <li><a href="forgot-password.html"> Forgot Password </a></li>
                            <li><a href="otp.html"> OTP </a></li>
                            <li><a href="lock-screen.html"> Lock Screen </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
                    </li>
                    @endrole
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
