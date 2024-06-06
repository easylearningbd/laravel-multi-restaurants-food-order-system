@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp
<div class="col-md-3">
    <div class="osahan-account-page-left shadow-sm rounded bg-white h-100">
       <div class="border-bottom p-4">
          <div class="osahan-user text-center">
             <div class="osahan-user-media">
                <img class="mb-3 rounded-pill shadow-sm mt-1" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="gurdeep singh osahan">
                <div class="osahan-user-media-body">
                   <h6 class="mb-2">{{$profileData->name}}</h6>
                   <p class="mb-1">{{$profileData->phone}}</p>
                   <p>{{$profileData->email}}</p>
           
                </div>
             </div>
          </div>
       </div>
       <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}"  href="{{ route('dashboard') }}" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> Profile</a>
         </li>

         <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'change.password' ? 'active' : '' }}"  href="{{ route('change.password') }}" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> Change Password </a>
         </li>

         <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'all.wishlist' ? 'active' : '' }}"  href="{{ route('all.wishlist') }}" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> Favourites </a>
         </li>

         <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'user.order.list' ? 'active' : '' }}"  href="{{ route('user.order.list') }}" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> Orders </a>
         </li>

          
          <li class="nav-item">
             <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false"><i class="icofont-sale-discount"></i> Offers</a>
          </li>
           
          <li class="nav-item">
             <a class="nav-link" id="payments-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="false"><i class="icofont-credit-card"></i> Payments</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="addresses-tab" data-toggle="tab" href="#addresses" role="tab" aria-controls="addresses" aria-selected="false"><i class="icofont-location-pin"></i> Addresses</a>
          </li>
       </ul>
    </div>
 </div>