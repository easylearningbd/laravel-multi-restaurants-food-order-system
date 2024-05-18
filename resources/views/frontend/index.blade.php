@extends('frontend.master')
@section('content')
<section class="section pt-5 pb-5 products-section">
    <div class="container">
       <div class="section-header text-center">
          <h2>Popular Brands</h2>
          <p>Top restaurants, cafes, pubs, and bars in Ludhiana, based on trends</p>
          <span class="line"></span>
       </div>
       <div class="row">

          <div class="col-md-3">  
                <div class="item pb-3">
                   <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                      <div class="list-card-image">
                         <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                         <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                         <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                         <a href="detail.html">
                         <img src="{{ asset('frontend/img/list/1.png') }}" class="img-fluid item-img">
                         </a>
                      </div>
                      <div class="p-3 position-relative">
                         <div class="list-card-body">
                            <h6 class="mb-1"><a href="detail.html" class="text-black">World Famous</a></h6>
                            <p class="text-gray mb-3">North Indian • American • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                         </div>
                         <div class="list-card-badge">
                            <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                         </div>
                      </div>
                   </div>
                </div>  
          </div> 
          {{-- // end col md-3 --}}


          <div class="col-md-3">  
            <div class="item pb-3">
               <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                  <div class="list-card-image">
                     <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                     <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                     <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                     <a href="detail.html">
                     <img src="{{ asset('frontend/img/list/1.png') }}" class="img-fluid item-img">
                     </a>
                  </div>
                  <div class="p-3 position-relative">
                     <div class="list-card-body">
                        <h6 class="mb-1"><a href="detail.html" class="text-black">World Famous</a></h6>
                        <p class="text-gray mb-3">North Indian • American • Pure veg</p>
                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                     </div>
                     <div class="list-card-badge">
                        <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                     </div>
                  </div>
               </div>
            </div>  
      </div> 
      {{-- // end col md-3 --}}


      <div class="col-md-3">  
        <div class="item pb-3">
           <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
              <div class="list-card-image">
                 <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                 <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                 <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                 <a href="detail.html">
                 <img src="{{ asset('frontend/img/list/1.png') }}" class="img-fluid item-img">
                 </a>
              </div>
              <div class="p-3 position-relative">
                 <div class="list-card-body">
                    <h6 class="mb-1"><a href="detail.html" class="text-black">World Famous</a></h6>
                    <p class="text-gray mb-3">North Indian • American • Pure veg</p>
                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                 </div>
                 <div class="list-card-badge">
                    <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                 </div>
              </div>
           </div>
        </div>  
  </div> 
  {{-- // end col md-3 --}}

  <div class="col-md-3">  
    <div class="item pb-3">
       <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
          <div class="list-card-image">
             <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
             <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
             <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
             <a href="detail.html">
             <img src="{{ asset('frontend/img/list/1.png') }}" class="img-fluid item-img">
             </a>
          </div>
          <div class="p-3 position-relative">
             <div class="list-card-body">
                <h6 class="mb-1"><a href="detail.html" class="text-black">World Famous</a></h6>
                <p class="text-gray mb-3">North Indian • American • Pure veg</p>
                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
             </div>
             <div class="list-card-badge">
                <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
             </div>
          </div>
       </div>
    </div>  
</div> 
{{-- // end col md-3 --}}


<div class="col-md-3">  
    <div class="item pb-3">
       <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
          <div class="list-card-image">
             <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
             <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
             <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
             <a href="detail.html">
             <img src="{{ asset('frontend/img/list/1.png') }}" class="img-fluid item-img">
             </a>
          </div>
          <div class="p-3 position-relative">
             <div class="list-card-body">
                <h6 class="mb-1"><a href="detail.html" class="text-black">World Famous</a></h6>
                <p class="text-gray mb-3">North Indian • American • Pure veg</p>
                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
             </div>
             <div class="list-card-badge">
                <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
             </div>
          </div>
       </div>
    </div>  
</div> 
{{-- // end col md-3 --}}


<div class="col-md-3">  
    <div class="item pb-3">
       <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
          <div class="list-card-image">
             <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
             <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
             <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
             <a href="detail.html">
             <img src="{{ asset('frontend/img/list/1.png') }}" class="img-fluid item-img">
             </a>
          </div>
          <div class="p-3 position-relative">
             <div class="list-card-body">
                <h6 class="mb-1"><a href="detail.html" class="text-black">World Famous</a></h6>
                <p class="text-gray mb-3">North Indian • American • Pure veg</p>
                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
             </div>
             <div class="list-card-badge">
                <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
             </div>
          </div>
       </div>
    </div>  
</div> 
{{-- // end col md-3 --}}




       </div>
    </div>
 </section>

 @endsection