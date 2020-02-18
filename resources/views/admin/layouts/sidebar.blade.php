<!-- Sidebar -->
<div class="bg-dark border-right sidebar pt-4" id="sidebar-wrapper" style="width: 257px;">
    <div class="row mr-1">
        <div class="col sidebar-heading text-light text-center ml-3">Navigation</div>
        {{-- <div class="col sidebar-heading text-right icon-close" id="menu-toggle" data-toggle="collapse" data-target="#collapseNavTitle"
    aria-expanded="false" aria-controls="collapseNavTitle"></div> --}}
    </div>

    {{-- <div class="list-group list-group-flush">
        <div class="__sidebarlistMenu">
            <a href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light"
                data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                <div class="icon-home-white">&emsp;Test Dropdown</div>
                <span class="badge badge-primary badge-pill">14</span>
            </a>


            <ul id="collapse-1" class="list-group collapse">
                <a href="#" class="text-decoration-none">
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light">
                        <span class="icon-user-white pl-3">&emsp;item#1</span>
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                </a>
                <a href="#" class="text-decoration-none">
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light">
                        <span class="icon-user-white pl-3">&emsp;item#2</span>
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                </a>
            </ul>
        </div>
    </div> --}}

    <a href="/admin/dashboard"
        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light">
        <div class="icon-home-white">&emsp;Dashboard</div>
        <span class="badge badge-primary badge-pill"></span>
    </a>

    <div class="list-group list-group-flush">
        <div class="__sidebarlistMenu">
            <a href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light"
                data-toggle="collapse" data-target="#collapse-productManagement" aria-expanded="false"
                aria-controls="collapse-productManagement">
                <div class="icon-modules-white">&emsp;Product Management</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
            <ul id="collapse-productManagement" class="list-group collapse show">
                <li>
                    <a href="/admin/products"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-box-white pl-3">&emsp;Products</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="/admin/producttypes"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-list-white pl-3">&emsp;Type</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="/admin/productcategories"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-style-white pl-3">&emsp;Category</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="list-group list-group-flush">
        <div class="__sidebarlistMenu">
            <a href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light"
                data-toggle="collapse" data-target="#collapse-usersControll" aria-expanded="false"
                aria-controls="collapse-usersControll">
                <div class="icon-shield-white">&emsp;Users Controll</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
            <ul id="collapse-usersControll" class="list-group collapse show">
                <li>
                    <a href="/admin/users"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-user-white pl-3">&emsp;Users</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="/admin/roles"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-key-white pl-3">&emsp;Roles</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <a href="#" class="list-group-item list-group-item-action bg-dark text-light">Profile</a>
    <a href="#" class="list-group-item list-group-item-action bg-dark text-light">Status</a>
</div>
<!-- /#sidebar-wrapper -->
