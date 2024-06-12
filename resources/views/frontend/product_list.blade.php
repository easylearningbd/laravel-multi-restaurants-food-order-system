@foreach ($filterProducts as $product)
<div class="col-md-4 col-sm-6 mb-4 pb-2">
<div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
    <div class="list-card-image">
        <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
        <div class="favourite-heart text-danger position-absolute"><a href="{{ route('res.details',$product->client_id) }}"><i class="icofont-heart"></i></a></div>
        <div class="member-plan position-absolute"><span class="badge badge-dark">FPromoted</span></div>
        <a href="{{ route('res.details',$product->client_id) }}">
        <img src="{{ asset($product->image) }}" class="img-fluid item-img">
        </a>
    </div>
    <div class="p-3 position-relative">
        <div class="list-card-body">
        <h6 class="mb-1"><a href="{{ route('res.details',$product->client_id) }}" class="text-black"> {{ $product->name}}</a></h6>
      
        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> {{ $product->price }}</span></p>
        </div>
        <div class="list-card-badge">
        <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
        </div>
    </div>
</div>
</div>    
@endforeach