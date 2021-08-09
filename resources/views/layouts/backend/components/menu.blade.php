    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo">
                                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                            <h2 class="brand-text mb-0">{{config('app.name')}}</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container" data-menu="menu-container">

                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li :class="this.$router.history.current.name=='dashboard' ?  'nav-item active' : 'nav-item'" >
                        <router-link exact  class="nav-link d-flex align-items-center" to="/"><i data-feather="home"></i><span data-i18n="Dashboard">Dashboard</span></router-link>
                    </li>
                    <li  :class="groupActive('/payment')" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather='dollar-sign'></i><span data-i18n="Payments">Payments</span>
                         </a>
                        <ul class="dropdown-menu " >
                            <li>
                                <router-link class="dropdown-item d-flex align-items-center" to="/payment/stripe" data-i18n="Stripe">
                                <img class="menuicon-img" src="{{getIconImg('stripe','webp')}}" alt="">
                                <span data-i18n="Stripe">Stripe </span></router-link>
                            </li>

                            <li>
                                <router-link class="dropdown-item d-flex align-items-center" to="/payment/paypal" data-i18n="Paypal">
                                    <img class="menuicon-img" src="{{getIconImg('paypal','png')}}" alt="">
                                <span data-i18n="Paypal">Paypal</span></router-link>
                            </li>
                        </ul>
                    </li>
                    <li :class="groupActive('/user')" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="user"></i><span data-i18n="User Management">User Management</span></a>
                        <ul class="dropdown-menu ">

                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/user/users" data-toggle="dropdown" data-i18n="Colors">

                                    <i data-feather='users'></i>
                                    <span data-i18n="Users">Users</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/user/roles" data-toggle="dropdown" data-i18n="Roles">
                                    <i data-feather='user-check'></i>
                                    <span data-i18n="Roles">Roles</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/user/permissions" data-toggle="dropdown" data-i18n="Permissions">
                                    <i data-feather='unlock'></i>
                                    <span data-i18n="Permissions">Permissions</span>
                                </router-link>
                            </li>


                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                        <i data-feather='package'></i>
                        <span data-i18n="Variants">Variants</span>
                    </a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/categories" data-toggle="dropdown" data-i18n="Categories">

                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Categories">Categories</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/api-vendors" data-toggle="dropdown" data-i18n="Api Vendors">

                                    <i data-feather='globe'></i>
                                    <span data-i18n="Api Vendors">Api Vendors</span>
                                </router-link>
                            </li>

                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/units" data-toggle="dropdown" data-i18n="Units">

                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Units">Units</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/departments" data-toggle="dropdown" data-i18n="Departments">
                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Departments">Departments</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/brands" data-toggle="dropdown" data-i18n="brands">
                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Brands">Brands</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/agents" data-toggle="dropdown" data-i18n="Agents">
                                    <i data-feather='users'></i>
                                    <span data-i18n="Agents">Agents</span>
                                </router-link>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather='link'></i>
                        <span data-i18n="Other Pages">Other Pages</span>
                    </a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/leads" data-toggle="dropdown" data-i18n="Leads">

                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Leads">Leads</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/orders" data-toggle="dropdown" data-i18n="Orders">
                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Orders">Orders</span>
                                </router-link>
                            </li>
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/brands" data-toggle="dropdown" data-i18n="brands">
                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Brands">Brands</span>
                                </router-link>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather='settings'></i>
                        <span data-i18n="settings">Settings</span>
                    </a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <router-link class="dropdown-item d-flex align-items-center" to="/leads" data-toggle="dropdown" data-i18n="Api Vendor config">

                                    <i data-feather='link-2'></i>
                                    <span data-i18n="Api Vendor config">Api Vendor's Config</span>
                                </router-link>
                            </li>


                        </ul>
                    </li>






                </ul>
            </div>
        </div>
    </div>





<style>

</style>


