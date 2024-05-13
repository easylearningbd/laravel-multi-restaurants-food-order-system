@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

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

        <div class="row">
            <div class="col-xl-8">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Market Overview</h5>
                            <div class="ms-auto">
                                <div>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
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
                            <div class="col-xl-8">
                                <div>
                                    <div id="market-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="p-4">
                                    <div class="mt-0">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light-subtle text-dark font-size-16">
                                                    1
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Coinmarketcap</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+2.5%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light-subtle text-dark font-size-16">
                                                    2
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Binance</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+8.3%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light-subtle text-dark font-size-16">
                                                    3
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Coinbase</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12 fw-medium">-3.6%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light-subtle text-dark font-size-16">
                                                    4
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Yobit</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+7.1%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light-subtle text-dark font-size-16">
                                                    5
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Bitfinex</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12 fw-medium">-0.9%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="" class="btn btn-primary w-100">See All Balances <i
                                                class="mdi mdi-arrow-right ms-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->

            <div class="col-xl-4">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Sales by Locations</h5>
                            <div class="ms-auto">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#">USA</a>
                                        <a class="dropdown-item" href="#">Russia</a>
                                        <a class="dropdown-item" href="#">Australia</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sales-by-locations" data-colors='["#5156be"]' style="height: 250px"></div>

                        <div class="px-2 py-2">
                            <p class="mb-1">USA <span class="float-end">75%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                </div>
                            </div>

                            <p class="mt-3 mb-1">Russia <span class="float-end">55%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                    style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                </div>
                            </div>

                            <p class="mt-3 mb-1">Australia <span class="float-end">85%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                    style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Trading</h4>
                        <div class="flex-shrink-0">
                            <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab" role="tab">Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#sell-tab" role="tab">Sell</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="buy-tab" role="tabpanel">
                                <div class="float-end ms-2">
                                    <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4335.23</a></h5>
                                </div>
                                <h5 class="font-size-14 mb-4">Buy Coins</h5>
                                <div>
                                    <div class="form-group mb-3">
                                        <label>Payment method :</label>
                                        <select class="form-select">
                                            <option>Direct Bank Payment</option>
                                            <option>Credit / Debit Card</option>
                                            <option>Paypal</option>
                                            <option>Payoneer</option>
                                            <option>Stripe</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label>Add Amount :</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Amount</label>
                                            <select class="form-select" style="max-width: 90px;">
                                                <option value="BT" selected>BTC</option>
                                                <option value="ET">ETH</option>
                                                <option value="LT">LTC</option>
                                            </select>
                                            <input type="text" class="form-control" placeholder="0.00121255">
                                        </div>

                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Price</label>
                                            <input type="text" class="form-control" placeholder="$58,245">
                                            <label class="input-group-text">$</label>
                                        </div>

                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Total</label>
                                            <input type="text" class="form-control" placeholder="$36,854.25">
                                        </div>
                                    </div>  

                                    <div class="text-center">
                                        <button type="button" class="btn btn-success w-md">Buy Coin</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="sell-tab" role="tabpanel">
                                <div class="float-end ms-2">
                                    <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4235.23</a></h5>
                                </div>
                                <h5 class="font-size-14 mb-4">Sell Coins</h5>

                                <div>

                                    <div class="form-group mb-3">
                                        <label>Wallet ID :</label>
                                        <input type="email" class="form-control" placeholder="1cvb254ugxvfcd280ki">
                                    </div>

                                    <div>
                                        <label>Add Amount :</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Amount</label>
                                            
                                            <select class="form-select" style="max-width: 90px;">
                                                <option value="BT" selected>BTC</option>
                                                <option value="ET">ETH</option>
                                                <option value="LT">LTC</option>
                                            </select>
                                            <input type="text" class="form-control" placeholder="0.00121255">
                                        </div>

                                        <div class="input-group mb-3">
                                        
                                            <label class="input-group-text">Price</label>
                                            
                                            <input type="text" class="form-control" placeholder="$23,754.25">
                                            
                                            <label class="input-group-text">$</label>
                                        </div>

                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Total</label>
                                            <input type="text" class="form-control" placeholder="$6,852.41">
                                        </div>
                                    </div>  

                                    <div class="text-center">
                                        <button type="button" class="btn btn-danger w-md">Sell Coin</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Transactions</h4>
                        <div class="flex-shrink-0">
                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                        All 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                        Buy 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                        Sell  
                                    </a>
                                </li>
                            </ul>
                            <!-- end nav tabs -->
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body px-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                    <table class="table align-middle table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                    <table class="table align-middle table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                                <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                    <table class="table align-middle table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                        <div class="flex-shrink-0">
                            <select class="form-select form-select-sm mb-0 my-n1">
                                <option value="Today" selected="">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="Week">Last Week</option>
                                <option value="Month">Last Month</option>
                            </select>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body px-0">
                        <div class="px-3" data-simplebar style="max-height: 352px;">
                            <ul class="list-unstyled activity-wid mb-0">

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title bg-warning-subtle text-warning rounded-circle">
                                        <i class="bx bx-bitcoin font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                <p class="text-truncate text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">+0.5 BTC</h6>
                                                <div class="font-size-13">$178.53</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title  bg-primary-subtle text-primary rounded-circle">
                                        <i class="mdi mdi-ethereum font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                <p class="text-truncate text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">-20.5 ETH</h6>
                                                <div class="font-size-13">$3541.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title bg-warning-subtle text-warning rounded-circle">
                                        <i class="bx bx-bitcoin font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                <p class="text-truncate text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">+0.5 BTC</h6>
                                                <div class="font-size-13">$5791.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title  bg-primary-subtle text-primary rounded-circle">
                                        <i class="mdi mdi-litecoin font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                <p class="text-truncate text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">-1.5 LTC</h6>
                                                <div class="font-size-13">$5791.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>


                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title bg-warning-subtle text-warning rounded-circle">
                                        <i class="bx bx-bitcoin font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                <p class="text-truncate text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">+0.5 BTC</h6>
                                                <div class="font-size-13">$5791.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>

                                <li class="activity-list">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title  bg-primary-subtle text-primary rounded-circle">
                                        <i class="mdi mdi-litecoin font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                <p class="text-truncate text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">+.55 LTC</h6>
                                                <div class="font-size-13">$91.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>
                            </ul>
                        </div>    
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>

@endsection