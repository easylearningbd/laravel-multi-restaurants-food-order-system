@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Admin All Report</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                           
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

<div class="row">
    
    <div class="col">
        <div class="card"> 
            <div class="card-body">

<div>
  
    <div class="">
        <div class="row" >
            
<div class="col-sm-4">
    <div class="card">
    <form id="myForm" action="{{ route('admin.search.bydate') }}" method="post" enctype="multipart/form-data">
        @csrf
        
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h4>Search By Date</h4>
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-label">Date</label>
                    <input class="form-control" type="date" name="date"  id="example-text-input">
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                </div>
        
            </div>
        </div> 
    </div>
    </form> 
</div>
</div>

<div class="col-sm-4">
    <div class="card">
    <form id="myForm" action="{{ route('admin.search.bymonth') }}" method="post" enctype="multipart/form-data">
        @csrf
        
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h4>Search By Month</h4>
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-label">Select Month:</label>
                    <select name="month" class="form-select">
                        <option selected>Select Month</option>
                        <option value="Janurary">Janurary</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>

                    <label for="example-text-input" class="form-label">Select Year:</label>
                    <select name="year_name" class="form-select">
                        <option selected>Select Year</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option> 
                    </select>

                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                </div>
        
            </div>
        </div> 
    </div>
    </form> 
</div>
</div>



<div class="col-sm-4">
    <div class="card">
    <form id="myForm" action="{{ route('admin.search.byyear') }}" method="post" enctype="multipart/form-data">
        @csrf
        
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h4>Search By Year</h4>
                <div class="form-group mb-3"> 
                    <label for="example-text-input" class="form-label">Select Year:</label>
                    <select name="year" class="form-select">
                        <option selected>Select Year</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option> 
                    </select>

                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
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
    </div> <!-- end col -->

 

 
</div> <!-- end row --> 
  
         
    </div> <!-- container-fluid -->
</div>

 
   


@endsection