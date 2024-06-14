<style>
    .notification-read{
        background-color: #e9e9e9 ;
    }
    .notification-unread {
        background-color: bisque;
    }
</style>
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">Admin</span>
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">Admin</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

           

            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>

    @php
        $ncount = Auth::guard('admin')->user()->unreadNotifications()->count();
    @endphp     

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell" class="icon-lg"></i>
                    <span class="badge bg-danger rounded-pill">{{$ncount}}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small text-reset text-decoration-underline"> Unread ({{$ncount}})</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">

     @php
         $user = Auth::guard('admin')->user();
     @endphp                   

        @foreach ($user->notifications as $notification) 
<a href="{{ route('pending.order') }}" class="text-reset notification-item">
    <div class="d-flex {{ $notification->read_at ? 'notification-read' : 'notification-unread' }}" onclick="markNotificationRead('{{ $notification->id }}')">
        <div class="flex-shrink-0 avatar-sm me-3">
            <span class="avatar-title bg-primary rounded-circle font-size-16">
                <i class="bx bx-cart"></i>
            </span>
        </div>
        <div class="flex-grow-1">
            <h6 class="mb-1">{{ $notification->data['message'] }}</h6>
            <div class="font-size-13 text-muted">
                
                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span></p>
            </div>
        </div>
    </div>
</a>
@endforeach   

                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item right-bar-toggle me-2">
                    <i data-feather="settings" class="icon-lg"></i>
                </button>
            </div>

            @php
                 $id = Auth::guard('admin')->id();
                 $profileData = App\Models\Admin::find($id);
            @endphp

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ $profileData->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="mdi mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="{{ route('admin.change.password') }}"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>

<script>
    function markNotificationRead(notificationId){
        fetch('/mark-notification-as-read/'+notificationId,{
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({})
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('notification-count').textContent = data.count;
            const notificationElement = document.querySelector(`[onclick="markNotificationRead('${notificationId}')"]`);
            if (notificationElement) {
                notificationElement.classList.remove('notification-unread');
                notificationElement.classList.add('notification-read');
            }
        })
        .catch(error => {
            console.log('Error', error);
        });
    }
</script>