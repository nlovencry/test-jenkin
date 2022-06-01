<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('home') }}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.profile.index') }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.pengguna.index') }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-account-multiple-outline"></i><span class="hide-menu">User</span></a>
                </li>
                            <hr>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.category.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-package-variant"></i><span
                            class="hide-menu">Category</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.kerusakan.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-wrench"></i><span
                            class="hide-menu">Kerusakan</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.transaction.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-trending-up"></i><span
                            class="hide-menu">Transaction</span></a></li>
                            <hr>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <div class="sidebar-footer">
        <div class="row">

            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                        class="mdi mdi-power" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    </i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
