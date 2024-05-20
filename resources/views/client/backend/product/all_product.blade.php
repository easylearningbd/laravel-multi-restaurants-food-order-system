@extends('client.client_dashboard')
@section('client')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Product</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('add.product') }}" class="btn btn-primary waves-effect waves-light">Add Product</a>
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
                <th>Image</th>
                <th>Name</th>
                <th>Menu</th>
                <th>Price</th>
                <th>QTY</th>
                <th>Discount</th>
                <th>Status</th>
                <th>Action </th> 
            </tr>
            </thead>


            <tbody>
           @foreach ($product as $key=> $item)  
            <tr>
                <td>{{ $key+1 }}</td>
                <td><img src="{{ asset($item->image) }}" alt="" style="width: 70px; height:40px;"></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->menu_id }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->discount_price  }}</td>
                <td> 
                    @if ($item->status == 1)
                    <span class="text-success"><b>Active</b></span>
                    @else
                    <span class="text-danger"><b>InActive</b></span>
                    @endif
                </td>
                
                <td><a href="{{ route('edit.menu',$item->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                <a href="{{ route('delete.menu',$item->id) }}" class="btn btn-danger waves-effect waves-light" id="delete">Delete</a>
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