@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-9 col-lg-8">
<div class="card">
<div class="card-body">
    <div class="row">
        <div class="col-sm order-2 order-sm-1">
            <div class="d-flex align-items-start mt-3 mt-sm-0">
                <div class="flex-shrink-0">
                    <div class="avatar-xl me-3">
                        <img src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="" class="img-fluid rounded-circle d-block">
                    </div>
                </div>
                <div class="flex-grow-1">
    <div>
        <h5 class="font-size-16 mb-1">{{ $profileData->name }}</h5>
        <p class="text-muted font-size-13">{{ $profileData->email }}</p>

        <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
            <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{ $profileData->phone }}</div>
            <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{ $profileData->address }}</div>
        </div>
    </div>
                </div>
            </div>
        </div>
        
    </div>

                         
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

               
                <!-- end tab content -->
            </div>
            <!-- end col -->

            
            <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container-fluid -->
</div>


@endsection