@extends('client.client_dashboard')
@section('client')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Admin Pending Review</h4>

                    

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
                <th>User</th>
                <th>Resturant</th>
                <th>Comment</th>
                <th>Rating</th>                
                <th>Status</th>  
            </tr>
            </thead>


            <tbody>
           @foreach ($allreviews as $key=> $item)  
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item['user']['name'] }}</td>
                <td>{{ $item['client']['name'] }}</td>
                <td>{{ Str::limit($item->comment, 50, '...')  }}</td>
                <td>
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="bx bxs-star {{ $i <= $item->rating ? 'text-warning' : 'text-secondary' }}"></i>
                    @endfor 
                    </td> 
                <td> 
                    @if ($item->status == 1)
                    <span class="text-success"><b>Active</b></span>
                    @else
                    <span class="text-danger"><b>InActive</b></span>
                    @endif
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