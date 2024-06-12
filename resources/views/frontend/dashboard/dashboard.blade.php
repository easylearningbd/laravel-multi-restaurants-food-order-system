<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <meta name="csrf-token" content="{{ csrf_token() }}" >
      <title>User Dashboard - Online Food Ordering Website</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{ asset('frontend/img/favicon.png') }}">
      <!-- Bootstrap core CSS-->
      <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{ asset('frontend/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{ asset('frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
      <!-- Select2 CSS-->
      <link href="{{ asset('frontend/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="{{ asset('frontend/css/osahan.css') }}" rel="stylesheet">

      <link rel="stylesheet" href="{{ asset('frontend/vendor/owl-carousel/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/vendor/owl-carousel/owl.theme.css') }}">

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
      
      <script src="https://js.stripe.com/v3/"></script> 
   </head>
   <body>

    @include('frontend.dashboard.header')

    @yield('dashboard')

    @include('frontend.dashboard.footer')


    <!-- jQuery -->
 <script src="{{ asset('frontend/vendor/jquery/jquery-3.3.1.slim.min.js') }}"></script>
 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- Select2 JavaScript-->
 <script src="{{ asset('frontend/vendor/select2/js/select2.min.js') }}"></script>
 <script src="{{ asset('frontend/vendor/owl-carousel/owl.carousel.js') }}"></script>
 <!-- Custom scripts for all pages-->
 <script src="{{ asset('frontend/js/custom.js') }}"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
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

 
 <script type="text/javascript">
         $.ajaxSetup({
            headers:{
               'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
         });
</script>

{{-- //// Apply Coupon start /////////////// --}}
<script>
    function ApplyCoupon() {
      var coupon_name = $('#coupon_name').val();
      $.ajax({
         type: "POST",
         dataType: "json",
         data:{coupon_name:coupon_name},
         url:"/apply-coupon",
         success:function(data){

             // Start Message 

             const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  
                  showConfirmButton: false,
                  timer: 3000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    icon: 'success', 
                    title: data.success, 
                    });
                    location.reload();

            }else{
               
           Toast.fire({
                    type: 'error',
                    icon: 'error', 
                    title: data.error, 
                    })
                }

              // End Message 


         }
      })
    }
</script>

<script>
   function couponRemove(){
      $.ajax({
         type:"GET",
         dataType:"json",
         url:"/remove-coupon",
         success:function(data){

            // Start Message 

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  
                  showConfirmButton: false,
                  timer: 3000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    icon: 'success', 
                    title: data.success, 
                    });
                    location.reload();

            }else{
               
           Toast.fire({
                    type: 'error',
                    icon: 'error', 
                    title: data.error, 
                    })
                }

              // End Message 

         }
      })
   }
</script>



</body>
</html>