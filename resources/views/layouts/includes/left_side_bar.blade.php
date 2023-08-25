<aside class="main-sidebar sidebar-dark-gray elevation-4">
    <a href="{{ route('home') }}" class="brand-link" style="text-align: center">
        <span class="brand-text font-weight-bold">ICAP ASSETS</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link {{ setIsActive('/') }} {{ setIsActive('home') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('assets.create') }}" class="nav-link {{ setIsActive('create-new-asset') }}"
                        style="padding-left: ">
                        <i class="fa fa-list nav-icon" style="font-size: smaller"></i>
                        <p>Create New Asset</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('assets.index') }}" class="nav-link {{ setIsActive('edit-asset') }} {{ setIsActive('assets') }}"
                        style="padding-left: ">
                        <i class="fa fa-list nav-icon" style="font-size: smaller"></i>
                        <p>All Assets</p>
                    </a>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>
