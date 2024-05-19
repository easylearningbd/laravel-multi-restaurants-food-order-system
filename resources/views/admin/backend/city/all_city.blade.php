@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All City</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('add.city') }}" class="btn btn-primary waves-effect waves-light">Add City</a>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                     
                    <div class="card-body">

        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
            <thead>
            <tr>
                <th>Sl</th>
                <th>City Name</th>
                <th>City Slug </th>
                <th>Action </th> 
            </tr>
            </thead>


            <tbody>
           @foreach ($city as $key=> $item)  
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->city_name }}</td>
                <td>{{ $item->city_slug }}</td>
                <td><a href="{{ route('edit.category',$item->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                <a href="{{ route('delete.category',$item->id) }}" class="btn btn-danger waves-effect waves-light" id="delete">Delete</a>
                </td> 
            </tr>
            @endforeach    
            
            </tbody>
        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row --> 

         
    </div> <!-- container-fluid -->
</div>



@endsection