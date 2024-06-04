@extends('frontend.dashboard.dashboard')
@section('dashboard')
 
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
            <h4 class="font-weight-bold mt-0 mb-4">Change Password   </h4>
            
            
    <div class="bg-white card mb-4 order-list shadow-sm">
        <div class="gold-members p-4">
           
            <form action="{{ route('user.password.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="mb-6">
                            <label for="example-text-input" class="form-label">Old Password</label>
                            <input class="form-control @error('old_password') is-invalid @enderror" type="password" name="old_password" id="old_password">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
            
                        <div class="mb-6">
                            <label for="example-text-input" class="form-label">New Password</label>
                            <input class="form-control @error('new_password') is-invalid @enderror" type="password" name="new_password" id="new_password">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
            
                        <div class="mb-6">
                            <label for="example-text-input" class="form-label">Confirm New Password</label>
                            <input class="form-control" type="password" name="new_password_confirmation" id="new_password_confirmation">
                        </div><br>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
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



@endsection