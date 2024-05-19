<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" data-key="t-menu">Menu</li>

        <li>
            <a href="index.html">
                <i data-feather="home"></i>
                <span data-key="t-dashboard">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="grid"></i>
                <span data-key="t-apps">Category</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="{{ route('all.category') }}">
                        <span data-key="t-calendar">All Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('add.category') }}">
                        <span data-key="t-chat">Add Category</span>
                    </a>
                </li> 
               
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="grid"></i>
                <span data-key="t-apps">City</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="{{ route('all.city') }}">
                        <span data-key="t-calendar">All City</span>
                    </a>
                </li>
 
            </ul>
        </li>
        

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="users"></i>
                <span data-key="t-authentication">Authentication</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                
            </ul>
        </li>

         
        <li class="menu-title mt-2" data-key="t-components">Elements</li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="briefcase"></i>
                <span data-key="t-components">Components</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="gift"></i>
                <span data-key="t-ui-elements">Extended</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                
            </ul>
        </li>
  

    </ul>

    <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
        <div class="card-body">
            <img src="assets/images/giftbox.png" alt="">
            <div class="mt-4">
                <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
               
            </div>
        </div>
    </div>
</div>
        <!-- Sidebar -->
    </div>
</div>