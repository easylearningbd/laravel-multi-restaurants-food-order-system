@include('frontend.dashboard.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp

<section class="section pt-4 pb-4 osahan-account-page">
    <div class="container">
       <div class="row">
          
        @include('frontend.dashboard.sidebar')


<div class="col-md-9">
    <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
            <h4 class="font-weight-bold mt-0 mb-4">User Profile </h4>
            
            
    <div class="bg-white card mb-4 order-list shadow-sm">
        <div class="gold-members p-4">
           
  <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
  @csrf
                
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $profileData->name }}" id="example-text-input">
                        </div>
            
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Email</label>
                            <input class="form-control" name="email" type="email" value="{{ $profileData->email }}" id="example-text-input">
                        </div>
            
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Phone</label>
                            <input class="form-control" name="phone" type="text" value="{{ $profileData->phone }}" id="example-text-input">
                        </div>
                          
                    </div>
                </div>
            
                <div class="col-lg-6">
                    <div class="mt-3 mt-lg-0">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Address</label>
                            <input class="form-control" name="address" type="text" value="{{ $profileData->address }}" id="example-text-input">
                        </div>
            
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Profile Image</label>
                            <input class="form-control" name="photo" type="file"  id="image">
                        </div>
                        <div class="mb-3">
                             
                            <img id="showImage" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="" class="rounded-circle p-1 bg-primary" width="110">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                        </div>
                          
                    </div>
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
    </div>
 </section>

 <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>


 @include('frontend.dashboard.footer')