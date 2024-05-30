@extends('client.client_dashboard')
@section('client')

@php
    $id = Auth::guard('client')->id();
    $client = App\Models\Client::find($id);
    $status = $client->status;
@endphp

<div class="page-content">
    <div class="container-fluid">

        @if ($status === '1')
        <h4>Restaurant Account is <span class="text-success">Active</span> </h4>
        @else   
        <h4>Restaurant Account is <span class="text-danger">InActive</span> </h4> 
        <p class="text-danger"><b>Plz wait admin will check and approve your account </b> </p> 
        @endif

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">My Wallet</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="865.2">0</span>k
                                </h4>
                            </div>

                            <div class="col-6">
                                <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+$20.9k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Trades</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="6258">0</span>
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-danger-subtle text-danger">-29 Trades</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Invested Amount</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="4.32">0</span>M
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+ $2.8k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit Ration</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="12.57">0</span>%
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+2.95%</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->    
        </div><!-- end row-->

        <div class="row">
            <div class="col-xl-5">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Wallet Balance</h5>
                            <div class="ms-auto">
                                <div>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-sm">
                                <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts"></div>
                            </div>
                            <div class="col-sm align-self-center">
                                <div class="mt-4 mt-sm-0">
                                    <div>
                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i> Bitcoin</p>
                                        <h6>0.4412 BTC = <span class="text-muted font-size-14 fw-normal">$ 4025.32</span></h6>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i> Ethereum</p>
                                        <h6>4.5701 ETH = <span class="text-muted font-size-14 fw-normal">$ 1123.64</span></h6>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i> Litecoin</p>
                                        <h6>35.3811 LTC = <span class="text-muted font-size-14 fw-normal">$ 2263.09</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-xl-8">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <h5 class="card-title me-2">Invested Overview</h5>
                                    <div class="ms-auto">
                                        <select class="form-select form-select-sm">
                                            <option value="MAY" selected="">May</option>
                                            <option value="AP">April</option>
                                            <option value="MA">March</option>
                                            <option value="FE">February</option>
                                            <option value="JA">January</option>
                                            <option value="DE">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-sm">
                                        <div id="invested-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                    </div>
                                    <div class="col-sm align-self-center">
                                        <div class="mt-4 mt-sm-0">
                                            <p class="mb-1">Invested Amount</p>
                                            <h4>$ 6134.39</h4>

                                            <p class="text-muted mb-4"> + 0.0012.23 ( 0.2 % ) <i class="mdi mdi-arrow-up ms-1 text-success"></i></p>

                                            <div class="row g-0">
                                                <div class="col-6">
                                                    <div>
                                                        <p class="mb-2 text-muted text-uppercase font-size-11">Income</p>
                                                        <h5 class="fw-medium">$ 2632.46</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="mb-2 text-muted text-uppercase font-size-11">Expenses</p>
                                                        <h5 class="fw-medium">-$ 924.38</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <!-- card -->
                        <div class="card bg-primary text-white shadow-primary card-h-100">
                            <!-- card body -->
                            <div class="card-body p-0">
                                <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">                                                   
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title rounded-circle bg-light-subtle text-white font-size-24">
                                                        <i class="mdi mdi-currency-btc"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Bitcoin</b> News</h4>
                                                <p class="text-white-50 font-size-13">Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin. </p>
                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                        <div class="carousel-item">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title rounded-circle bg-light-subtle text-white font-size-24">
                                                        <i class="mdi mdi-ethereum"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>ETH</b> News</h4>
                                                <p class="text-white-50 font-size-13">Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin. </p>
                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                        <div class="carousel-item">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title rounded-circle bg-light-subtle text-white font-size-24">
                                                        <i class="mdi mdi-litecoin"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Litecoin</b> News</h4>
                                                <p class="text-white-50 font-size-13">Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin. </p>
                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                    </div>
                                    <!-- end carousel-inner -->
                                    
                                    <div class="carousel-indicators carousel-indicators-rounded">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                            aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <!-- end carousel-indicators -->
                                </div>
                                <!-- end carousel -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end col -->
        </div> <!-- end row-->

        
    </div>
    <!-- container-fluid -->
</div>

@endsection