@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Role in Permission</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <a href="{{ route('add.roles.permission') }}" class="btn btn-primary waves-effect waves-light">Add Role Permission</a> 
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
                <th>Role Name</th>
                <th>Permission Name </th> 
                <th>Action </th> 
            </tr>
            </thead>


            <tbody>
           @foreach ($roles as $key=> $item)  
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    @foreach ($item->permissions as $prem)
                        <span class="badge bg-danger">{{ $prem->name }}</span>
                    @endforeach
                    
                </td> 

                <td><a href="{{ route('admin.edit.roles',$item->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                <a href="{{ route('admin.delect.roles',$item->id) }}" class="btn btn-danger waves-effect waves-light" id="delete">Delete</a>
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