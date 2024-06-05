@extends('frontend.dashboard.dashboard')
@section('dashboard')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<section class="offer-dedicated-body mt-4 mb-4 pt-2 pb-2">
    <div class="container">
       <div class="row">
          <div class="col-md-8">
             <div class="offer-dedicated-body-left">
    
 
                 

    <div class="pt-2"></div>
    <div class="bg-white rounded shadow-sm p-4 mb-4">
        <h4 class="mb-1">Choose a delivery address</h4>
        <h6 class="mb-3 text-black-50">Multiple addresses in this location</h6>
        <div class="row">
            <div class="col-md-6">
                <div class="bg-white card addresses-item mb-4 border border-success">
                <div class="gold-members p-4">
                    <div class="media">
                        <div class="mr-3"><i class="icofont-ui-home icofont-3x"></i></div>
                        <div class="media-body">
                            <h6 class="mb-1 text-black">Home</h6>
                            <p class="text-black">291/d/1, 291, Jawaddi Kalan, Ludhiana, Punjab 141002, India
                            </p>
                            <p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-success mr-2" href="#"> DELIVER HERE</a> 
                            <span>30MIN</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white card addresses-item mb-4">
                <div class="gold-members p-4">
                    <div class="media">
                        <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                        <div class="media-body">
                            <h6 class="mb-1 text-secondary">Work</h6>
                            <p>NCC, Model Town Rd Town, Ludhiana, Punjab 141002, India
                            </p>
                            <p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-secondary mr-2" href="#"> DELIVER HERE</a> 
                            <span>40MIN</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
    </div>
                <div class="pt-2"></div>
    <div class="bg-white rounded shadow-sm p-4 osahan-payment">
        <h4 class="mb-1">Choose payment method</h4>
        <h6 class="mb-3 text-black-50">Credit/Debit Cards</h6>
        <div class="row">
            <div class="col-sm-4 pr-0">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               
        <a class="nav-link active" id="v-pills-cash-tab" data-toggle="pill" href="#v-pills-cash" role="tab" aria-controls="v-pills-cash" aria-selected="false"><i class="icofont-money"></i> Pay on Delivery</a>

        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="icofont-credit-card"></i> Credit/Debit Cards</a>
                  
                
              

                </div>
            </div>
            <div class="col-sm-8 pl-0">
                <div class="tab-content h-100" id="v-pills-tabContent">
   
<div class="tab-pane fade show active" id="v-pills-cash" role="tabpanel" aria-labelledby="v-pills-cash-tab">
    <h6 class="mb-3 mt-0">Cash</h6>
    <p>Please keep exact change handy to help us serve you better</p>
    <hr>
    <form>
        <a href="thanks.html" class="btn btn-success btn-block btn-lg">PAY $1329
        <i class="icofont-long-arrow-right"></i></a>
    </form>
</div>

<div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <h6 class="mb-3 mt-0">Add new card</h6>
    <p>WE ACCEPT <span class="osahan-card">
        <i class="icofont-visa-alt"></i> <i class="icofont-mastercard-alt"></i> <i class="icofont-american-express-alt"></i> <i class="icofont-payoneer-alt"></i> <i class="icofont-apple-pay-alt"></i> <i class="icofont-bank-transfer-alt"></i> <i class="icofont-discover-alt"></i> <i class="icofont-jcb-alt"></i>
        </span>
    </p>
    <form>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputPassword4">Card number</label>
            <div class="input-group">
                <input type="number" class="form-control" placeholder="Card number">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icofont-card"></i></button>
                </div>
            </div>
            </div>
            <div class="form-group col-md-8">
            <label>Valid through(MM/YY)
            </label>
            <input type="number" class="form-control" placeholder="Enter Valid through(MM/YY)">
            </div>
            <div class="form-group col-md-4">
            <label>CVV
            </label>
            <input type="number" class="form-control" placeholder="Enter CVV Number">
            </div>
            <div class="form-group col-md-12">
            <label>Name on card
            </label>
            <input type="text" class="form-control" placeholder="Enter Card number">
            </div>
            <div class="form-group col-md-12">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Securely save this card for a faster checkout next time.</label>
            </div>
            </div>
            <div class="form-group col-md-12 mb-0">
            <a href="thanks.html" class="btn btn-success btn-block btn-lg">PAY $1329
            <i class="icofont-long-arrow-right"></i></a>
            </div>
        </div>
    </form>
</div>

                
                
                
                </div>
            </div>
        </div>
    </div>
             </div>
          </div>

          @php
          $id = Auth::user()->id;
          $profileData = App\Models\User::find($id);
      @endphp

          <div class="col-md-4">
             <div class="generator-bg rounded shadow-sm mb-4 p-4 osahan-cart-item">
                <div class="d-flex mb-4 osahan-cart-item-profile">
                   <img class="img-fluid mr-3 rounded-pill" alt="osahan" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}">
                   <div class="d-flex flex-column">
                      <h6 class="mb-1 text-white">{{ $profileData->name }}
                      </h6>
                      <p class="mb-0 text-white"><i class="icofont-location-pin"></i> {{ $profileData->address }}</p>
                   </div>
                </div>
                <div class="bg-white rounded shadow-sm mb-2">
                   <div class="gold-members p-2 border-bottom">
                      <p class="text-gray mb-0 float-right ml-2">$314</p>
                      <span class="count-number float-right">
                      <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                      <input class="count-number-input" type="text" value="1" readonly="">
                      <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                      </span>
                      <div class="media">
                         <div class="mr-2"><i class="icofont-ui-press text-danger food-item"></i></div>
                         <div class="media-body">
                            <p class="mt-1 mb-0 text-black">Chicken Tikka Sub</p>
                         </div>
                      </div>
                   </div>
                   <div class="gold-members p-2 border-bottom">
                      <p class="text-gray mb-0 float-right ml-2">$260</p>
                      <span class="count-number float-right">
                      <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                      <input class="count-number-input" type="text" value="1" readonly="">
                      <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                      </span>
                      <div class="media">
                         <div class="mr-2"><i class="icofont-ui-press text-success food-item"></i></div>
                         <div class="media-body">
                            <p class="mt-1 mb-0 text-black">Cheese corn Roll</p>
                         </div>
                      </div>
                   </div>
                   <div class="gold-members p-2 border-bottom">
                      <p class="text-gray mb-0 float-right ml-2">$260</p>
                      <span class="count-number float-right">
                      <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                      <input class="count-number-input" type="text" value="1" readonly="">
                      <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                      </span>
                      <div class="media">
                         <div class="mr-2"><i class="icofont-ui-press text-success food-item"></i></div>
                         <div class="media-body">
                            <p class="mt-1 mb-0 text-black">Cheese corn Roll</p>
                         </div>
                      </div>
                   </div>
                   <div class="gold-members p-2 border-bottom">
                      <p class="text-gray mb-0 float-right ml-2">$056</p>
                      <span class="count-number float-right">
                      <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                      <input class="count-number-input" type="text" value="1" readonly="">
                      <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                      </span>
                      <div class="media">
                         <div class="mr-2"><i class="icofont-ui-press text-success food-item"></i></div>
                         <div class="media-body">
                            <p class="mt-1 mb-0 text-black">Coke [330 ml]</p>
                         </div>
                      </div>
                   </div>
                   <div class="gold-members p-2 border-bottom">
                      <p class="text-gray mb-0 float-right ml-2">$652</p>
                      <span class="count-number float-right">
                      <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                      <input class="count-number-input" type="text" value="1" readonly="">
                      <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                      </span>
                      <div class="media">
                         <div class="mr-2"><i class="icofont-ui-press text-danger food-item"></i></div>
                         <div class="media-body">
                            <p class="mt-1 mb-0 text-black">Black Dal Makhani</p>
                         </div>
                      </div>
                   </div>
                   <div class="gold-members p-2">
                      <p class="text-gray mb-0 float-right ml-2">$122</p>
                      <span class="count-number float-right">
                      <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                      <input class="count-number-input" type="text" value="1" readonly="">
                      <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                      </span>
                      <div class="media">
                         <div class="mr-2"><i class="icofont-ui-press text-danger food-item"></i></div>
                         <div class="media-body">
                            <p class="mt-1 mb-0 text-black">Mixed Veg</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="mb-2 bg-white rounded p-2 clearfix">
                   <div class="input-group input-group-sm mb-2">
                      <input type="text" class="form-control" placeholder="Enter promo code">
                      <div class="input-group-append">
                         <button class="btn btn-primary" type="button" id="button-addon2"><i class="icofont-sale-discount"></i> APPLY</button>
                      </div>
                   </div>
                   <div class="input-group mb-0">
                      <div class="input-group-prepend">
                         <span class="input-group-text"><i class="icofont-comment"></i></span>
                      </div>
                      <textarea class="form-control" placeholder="Any suggestions? We will pass it on..." aria-label="With textarea"></textarea>
                   </div>
                </div>

                
                <div class="mb-2 bg-white rounded p-2 clearfix">
                   <p class="mb-1">Item Total <span class="float-right text-dark">$3140</span></p>
                   <p class="mb-1">Restaurant Charges <span class="float-right text-dark">$62.8</span></p>
                   <p class="mb-1">Delivery Fee <span class="text-info" data-toggle="tooltip" data-placement="top" title="Total discount breakup">
                      <i class="icofont-info-circle"></i>
                      </span> <span class="float-right text-dark">$10</span>
                   </p>
                   <p class="mb-1 text-success">Total Discount 
                      <span class="float-right text-success">$1884</span>
                   </p>
                   <hr />
                   <h6 class="font-weight-bold mb-0">TO PAY  <span class="float-right">$1329</span></h6>
                </div>
                <a href="thanks.html" class="btn btn-success btn-block btn-lg">PAY $1329
                <i class="icofont-long-arrow-right"></i></a>
             </div>
             <div class="pt-2"></div>
             <div class="alert alert-success" role="alert">
                You have saved <strong>$1,884</strong> on the bill
             </div>
             <div class="pt-2"></div>
             <div class="text-center pt-2">
             <img class="img-fluid" src="https://dummyimage.com/352x504/ccc/ffffff.png&text=Google+ads">
             </div>
          </div>
       </div>
    </div>
 </section>




@endsection