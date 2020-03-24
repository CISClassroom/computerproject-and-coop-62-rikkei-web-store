<!-- Sidebar -->
<div class="bg-dark border-right sidebar pt-4" id="sidebar-wrapper" style="width: 257px;">
    <div class="row mr-1">
        <div class="col sidebar-heading text-light text-center ml-3">Navigation</div>
    </div>

    <a href="{{ route('index') }}"
        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light">
        <div class="icon-home-white">&emsp;Dashboard</div>
        <span class="badge badge-primary badge-pill"></span>
    </a>
    <div class="list-group list-group-flush">
        <div class="__sidebarlistMenu">
            <a href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-light"
                data-toggle="collapse" data-target="#collapse-orderManagement" aria-expanded="false"
                aria-controls="collapse-orderManagement">
                <div class="icon-order-white">&emsp;Order Management</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
            <ul id="collapse-orderManagement" class="list-group collapse show">
                <li>
                    <a href="{{ route('orders.queue') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-theater-white pl-3">&emsp;Queued</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.prepare') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-prepair-white pl-3">&emsp;Preparing</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.deliver') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-delivery-white pl-3">&emsp;Delivered</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.complete') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-finish-white pl-3">&emsp;Completed</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-clipboard-white pl-3">&emsp;All</div>
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
                data-toggle="collapse" data-target="#collapse-productManagement" aria-expanded="false"
                aria-controls="collapse-productManagement">
                <div class="icon-modules-white">&emsp;Product Management</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
            <ul id="collapse-productManagement" class="list-group collapse show">
                <li>
                    <a href="{{ route('products.index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-box-white pl-3">&emsp;Products</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('producttypes.index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-list-white pl-3">&emsp;Type</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('productcategories.index') }}"
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
                data-toggle="collapse" data-target="#collapse-PromotionEvents" aria-expanded="false"
                aria-controls="collapse-PromotionEvents">
                <div class="icon-star-white">&emsp;Manage Promotion</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
            <ul id="collapse-PromotionEvents" class="list-group collapse show">
                <li>
                    <a href="{{ route('promotions.index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-promotions-white pl-3">&emsp;Promotions</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mails.index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-megaphone-white pl-3">&emsp;Newsletter</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-coupon-white pl-3">&emsp;Promotion code</div>
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
                data-toggle="collapse" data-target="#collapse-articleManagement" aria-expanded="false"
                aria-controls="collapse-articleManagement">
                <div class="icon-shield-white">&emsp;Article Management</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
            <ul id="collapse-articleManagement" class="list-group collapse show">
                <li>
                    <a href="{{ route('articles.index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-newspaper-white pl-3">&emsp;Articles</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('articlecategories.index') }}"
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
                    <a href="{{ route('users.index') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-gray text-light">
                        <div class="icon-user-white pl-3">&emsp;Users</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                </li>
                <li>
                <a href="{{ route('roles.index') }}"
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
