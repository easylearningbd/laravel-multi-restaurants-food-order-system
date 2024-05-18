@include('frontend.dashboard.header')
<section class="section pt-4 pb-4 osahan-account-page">
    <div class="container">
       <div class="row">
          <div class="col-md-3">
             <div class="osahan-account-page-left shadow-sm rounded bg-white h-100">
                <div class="border-bottom p-4">
                   <div class="osahan-user text-center">
                      <div class="osahan-user-media">
                         <img class="mb-3 rounded-pill shadow-sm mt-1" src="img/user/4.png" alt="gurdeep singh osahan">
                         <div class="osahan-user-media-body">
                            <h6 class="mb-2">Gurdeep Singh</h6>
                            <p class="mb-1">+91 85680-79956</p>
                            <p>iamosahan@gmail.com</p>
                            <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
                         </div>
                      </div>
                   </div>
                </div>
                <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                   <li class="nav-item">
                      <a class="nav-link active" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> Orders</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false"><i class="icofont-sale-discount"></i> Offers</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" id="favourites-tab" data-toggle="tab" href="#favourites" role="tab" aria-controls="favourites" aria-selected="false"><i class="icofont-heart"></i> Favourites</a>
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
          <div class="col-md-9">
             <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                      <h4 class="font-weight-bold mt-0 mb-4">Past Orders</h4>
                      <div class="bg-white card mb-4 order-list shadow-sm">
                         <div class="gold-members p-4">
                            <a href="#">
                               <div class="media">
                                  <img class="mr-4" src="img/3.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                     <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                     <h6 class="mb-2">
                            <a href="detail.html" class="text-black">Gus's World Famous Fried Chicken
                            </a></h6>
                            <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 730 S Mendenhall Rd, Memphis, TN 38117, USA
                            </p>
                            <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                            <p class="text-dark">Veg Masala Roll x 1, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                            </p>
                            <hr>
                            <div class="float-right">
                            <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-headphone-alt"></i> HELP</a>
                            <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a>
                            </div>
                            <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span>  $300
                            </p>
                            </div>
                            </div>
                            </a>
                         </div>
                      </div>
                      <div class="bg-white card mb-4 order-list shadow-sm">
                         <div class="gold-members p-4">
                            <a href="#">
                               <div class="media">
                                  <img class="mr-4" src="img/4.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                     <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                     <h6 class="mb-2">
                            <a href="detail.html" class="text-black">Jimmy's Famous American Tavern
                            </a></h6>
                            <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 1733 Ocean Ave, Santa Monica, CA 90401, USA
                            </p>
                            <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                            <p class="text-dark">Veg Masala Roll x 5, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                            </p>
                            <hr>
                            <div class="float-right">
                            <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-headphone-alt"></i> HELP</a>
                            <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a>
                            </div>
                            <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span>  $500
                            </p>
                            </div>
                            </div>
                            </a>
                         </div>
                      </div>
                      <div class="bg-white card  order-list shadow-sm">
                         <div class="gold-members p-4">
                            <a href="#">
                               <div class="media">
                                  <img class="mr-4" src="img/5.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                     <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                     <h6 class="mb-2">
                            <a href="detail.html" class="text-black">The Famous Restaurant
                            </a></h6>
                            <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 953 S Main St, Centerville, OH 45459, USA
                            </p>
                            <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                            <p class="text-dark">Veg Masala Roll x 5, Veg Penne Pasta in Red Sauce x 1
                            </p>
                            <hr>
                            <div class="float-right">
                            <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-headphone-alt"></i> HELP</a>
                            <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a>
                            </div>
                            <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span>  $420
                            </p>
                            </div>
                            </div>
                            </a>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                      <h4 class="font-weight-bold mt-0 mb-4">Offers</h4>
                      <div class="row mb-4 pb-2">
                         <div class="col-md-6">
                            <div class="card offer-card shadow-sm">
                               <div class="card-body">
                                  <h5 class="card-title"><img src="img/bank/1.png"> OSAHANEAT50</h5>
                                  <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                  <p class="card-text">Use code OSAHANEAT50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $200</p>
                                  <a href="#" class="card-link">COPY CODE</a>
                                  <a href="#" class="card-link">KNOW MORE</a>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="card offer-card shadow-sm">
                               <div class="card-body">
                                  <h5 class="card-title"><img src="img/bank/2.png"> EAT730</h5>
                                  <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                  <p class="card-text">Use code EAT730 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $600</p>
                                  <a href="#" class="card-link">COPY CODE</a>
                                  <a href="#" class="card-link">KNOW MORE</a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row mb-4 pb-2">
                         <div class="col-md-6">
                            <div class="card offer-card shadow-sm">
                               <div class="card-body">
                                  <h5 class="card-title"><img src="img/bank/3.png"> SAHAN50</h5>
                                  <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                  <p class="card-text">Use code SAHAN50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $200</p>
                                  <a href="#" class="card-link">COPY CODE</a>
                                  <a href="#" class="card-link">KNOW MORE</a>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="card offer-card shadow-sm">
                               <div class="card-body">
                                  <h5 class="card-title"><img src="img/bank/4.png"> GURDEEP50</h5>
                                  <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                  <p class="card-text">Use code GURDEEP50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $600</p>
                                  <a href="#" class="card-link">COPY CODE</a>
                                  <a href="#" class="card-link">KNOW MORE</a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                            <div class="card offer-card shadow-sm">
                               <div class="card-body">
                                  <h5 class="card-title"><img src="img/bank/1.png"> OSAHANEAT50</h5>
                                  <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                  <p class="card-text">Use code OSAHANEAT50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $200</p>
                                  <a href="#" class="card-link">COPY CODE</a>
                                  <a href="#" class="card-link">KNOW MORE</a>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="card offer-card shadow-sm">
                               <div class="card-body">
                                  <h5 class="card-title"><img src="img/bank/2.png"> EAT730</h5>
                                  <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                  <p class="card-text">Use code EAT730 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $600</p>
                                  <a href="#" class="card-link">COPY CODE</a>
                                  <a href="#" class="card-link">KNOW MORE</a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="favourites" role="tabpanel" aria-labelledby="favourites-tab">
                      <h4 class="font-weight-bold mt-0 mb-4">Favourites</h4>
                      <div class="row">
                         <div class="col-md-4 col-sm-6 mb-4 pb-2">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                               <div class="list-card-image">
                                  <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                  <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                  <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                  <a href="detail.html">
                                  <img src="img/list/4.png" class="img-fluid item-img">
                                  </a>
                               </div>
                               <div class="p-3 position-relative">
                                  <div class="list-card-body">
                                     <h6 class="mb-1"><a href="detail.html" class="text-black">Famous Dave's Bar-B-Que
                                        </a>
                                     </h6>
                                     <p class="text-gray mb-3">Vegetarian • Indian • Pure veg</p>
                                     <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–30 min</span> <span class="float-right text-black-50"> $350 FOR TWO</span></p>
                                  </div>
                                  <div class="list-card-badge">
                                     <span class="badge badge-danger">OFFER</span> <small> Use Coupon OSAHAN50</small>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-4 col-sm-6 mb-4 pb-2">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                               <div class="list-card-image">
                                  <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                  <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                  <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                  <a href="detail.html">
                                  <img src="img/list/5.png" class="img-fluid item-img">
                                  </a>
                               </div>
                               <div class="p-3 position-relative">
                                  <div class="list-card-body">
                                     <h6 class="mb-1"><a href="detail.html" class="text-black">Thai Famous Cuisine</a></h6>
                                     <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                     <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 30–35 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                  </div>
                                  <div class="list-card-badge">
                                     <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-4 col-sm-6 mb-4 pb-2">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                               <div class="list-card-image">
                                  <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                  <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                  <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                  <a href="detail.html">
                                  <img src="img/list/6.png" class="img-fluid item-img">
                                  </a>
                               </div>
                               <div class="p-3 position-relative">
                                  <div class="list-card-body">
                                     <h6 class="mb-1"><a href="detail.html" class="text-black">The osahan Restaurant
                                        </a>
                                     </h6>
                                     <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                     <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
                                  </div>
                                  <div class="list-card-badge">
                                     <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-4 col-sm-6 mb-4 pb-2">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                               <div class="list-card-image">
                                  <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                  <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                  <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                  <a href="detail.html">
                                  <img src="img/list/7.png" class="img-fluid item-img">
                                  </a>
                               </div>
                               <div class="p-3 position-relative">
                                  <div class="list-card-body">
                                     <h6 class="mb-1"><a href="detail.html" class="text-black">Stan's Restaurant
                                        </a>
                                     </h6>
                                     <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                     <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                  </div>
                                  <div class="list-card-badge">
                                     <span class="badge badge-danger">OFFER</span> <small>65% Coupon OSAHAN50</small>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-4 col-sm-6 mb-4 pb-2">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                               <div class="list-card-image">
                                  <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                  <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                  <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                  <a href="detail.html">
                                  <img src="img/list/8.png" class="img-fluid item-img">
                                  </a>
                               </div>
                               <div class="p-3 position-relative">
                                  <div class="list-card-body">
                                     <h6 class="mb-1"><a href="detail.html" class="text-black">Polo Lounge
                                        </a>
                                     </h6>
                                     <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                     <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                  </div>
                                  <div class="list-card-badge">
                                     <span class="badge badge-danger">OFFER</span> <small> Coupon OSAHAN50</small>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-4 col-sm-6 mb-4 pb-2">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                               <div class="list-card-image">
                                  <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                  <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                  <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                  <a href="detail.html">
                                  <img src="img/list/9.png" class="img-fluid item-img">
                                  </a>
                               </div>
                               <div class="p-3 position-relative">
                                  <div class="list-card-body">
                                     <h6 class="mb-1"><a href="detail.html" class="text-black">Jack Fry's
                                        </a>
                                     </h6>
                                     <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                     <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                  </div>
                                  <div class="list-card-badge">
                                     <span class="badge badge-danger">OFFER</span> <small>65% </small>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-12 text-center load-more">
                            <button class="btn btn-primary" type="button" disabled>
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            Loading...
                            </button>   
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="payments-tab">
                      <h4 class="font-weight-bold mt-0 mb-4">Payments</h4>
                      <div class="row">
                         <div class="col-md-6">
                            <div class="bg-white card payments-item mb-4 shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/1.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p>VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="bg-white card payments-item mb-4 shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/2.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p>VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row pt-2 pb-2">
                         <div class="col-md-6">
                            <div class="bg-white card payments-item mb-4 shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/3.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p>VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="bg-white card payments-item mb-4 shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/4.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p>VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                            <div class="bg-white card payments-item mb-4 shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/5.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p>VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="bg-white card payments-item mb-4 shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/6.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p>VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row pt-2">
                         <div class="col-md-6">
                            <div class="bg-white card payments-item shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/1.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p class="text-black">VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="bg-white card payments-item shadow-sm">
                               <div class="gold-members p-4">
                                  <a href="#">
                                     <div class="media">
                                        <img class="mr-3" src="img/bank/2.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                           <p>VALID TILL 10/2025</p>
                                           <p class="mb-0 text-black font-weight-bold">
                                  <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                  </div>
                                  </div>
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
                      <h4 class="font-weight-bold mt-0 mb-4">Manage Addresses</h4>
                      <div class="row">
                         <div class="col-md-6">
                            <div class="bg-white card addresses-item mb-4 border border-primary shadow">
                               <div class="gold-members p-4">
                                  <div class="media">
                                     <div class="mr-3"><i class="icofont-ui-home icofont-3x"></i></div>
                                     <div class="media-body">
                                        <h6 class="mb-1 text-secondary">Home</h6>
                                        <p class="text-black">Osahan House, Jawaddi Kalan, Ludhiana, Punjab 141002, India
                                        </p>
                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal"  href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="bg-white card addresses-item mb-4 shadow-sm">
                               <div class="gold-members p-4">
                                  <div class="media">
                                     <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                                     <div class="media-body">
                                        <h6 class="mb-1">Work</h6>
                                        <p>NCC, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
                                        </p>
                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row pt-2 pb-2">
                         <div class="col-md-6">
                            <div class="bg-white card addresses-item mb-4  shadow-sm">
                               <div class="gold-members p-4">
                                  <div class="media">
                                     <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                     <div class="media-body">
                                        <h6 class="mb-1">Other</h6>
                                        <p>Delhi Bypass Rd, Jawaddi Taksal, Ludhiana, Punjab 141002, India
                                        </p>
                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="bg-white card addresses-item mb-4  shadow-sm">
                               <div class="gold-members p-4">
                                  <div class="media">
                                     <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                     <div class="media-body">
                                        <h6 class="mb-1">Other</h6>
                                        <p>MT, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
                                        </p>
                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                            <div class="bg-white card addresses-item shadow-sm">
                               <div class="gold-members p-4">
                                  <div class="media">
                                     <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                     <div class="media-body">
                                        <h6 class="mb-1">Other</h6>
                                        <p>GNE Rd, Jawaddi Taksal, Ludhiana, Punjab 141002, India
                                        </p>
                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="bg-white card addresses-item shadow-sm">
                               <div class="gold-members p-4">
                                  <div class="media">
                                     <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                     <div class="media-body">
                                        <h6 class="mb-1">Other</h6>
                                        <p>GTTT, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
                                        </p>
                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

 @include('frontend.dashboard.footer')