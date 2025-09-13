@extends('layouts.app')
@section('content')
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-container">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                        </div>
                        <div class="mt-3 mt-sm-0">
                            <form action="javascript:void(0);">
                                <div class="row g-2 mb-0 align-items-center">
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="btn btn-light">
                                            <i class="ti ti-sort-ascending me-1"></i> Sort By
                                        </a>
                                    </div>
                                    <!--end col-->
                                    <div class="col-sm-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-0 shadow" data-provider="flatpickr" data-deafult-date="01 May to 31 May" data-date-format="d M" data-range-date="true">
                                            <span class="input-group-text bg-primary border-primary text-white">
                                                <i class="ti ti-calendar fs-15"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div> <!-- end row-->

            <div class="row">
                <div class="col">
                    <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 text-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Orders</h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="solar:case-round-minimalistic-bold-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">687.3k</h3>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 9.19%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Returns</h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">9.62k</h3>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 26.87%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Avg. Sales Earnings</h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">$98.24 <small class="text-muted">USD</small></h3>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 3.51%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Number of Visits</h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="solar:eye-bold-duotone"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">87.94M</h3>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 1.05%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Overview</h4>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-light bg-opacity-50">
                                    <div class="row text-center">
                                        <div class="col-md-3 col-6">
                                            <p class="text-muted mt-3 mb-1">Revenue</p>
                                            <h4 class="mb-3">
                                                <span class="ti ti-square-rounded-arrow-down text-success me-1"></span>
                                                <span>$29.5k</span>
                                            </h4>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <p class="text-muted mt-3 mb-1">Expenses</p>
                                            <h4 class="mb-3">
                                                <span class="ti ti-square-rounded-arrow-up text-danger me-1"></span>
                                                <span>$15.07k</span>
                                            </h4>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <p class="text-muted mt-3 mb-1">Investment</p>
                                            <h4 class="mb-3">
                                                <span class="ti ti-chart-infographic me-1"></span>
                                                <span>$3.6k</span>
                                            </h4>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <p class="text-muted mt-3 mb-1">Savings</p>
                                            <h4 class="mb-3">
                                                <span class="ti ti-pig me-1"></span>
                                                <span>$6.9k</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div dir="ltr">
                                        <div id="revenue-chart" class="apex-charts" data-colors="#6ac75a,#465dff,#783bff,#f7577e"></div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                    <h4 class="header-title">Top Traffic by Source</h4>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div id="multiple-radialbar" class="apex-charts" data-colors="#465dff,#6ac75a,#783bff,#f7577e"></div>

                                    <div class="row mt-2">
                                        <div class="col">
                                            <div class="d-flex justify-content-between align-items-center p-1">
                                                <div>
                                                    <i class="ti ti-circle-filled fs-12 align-middle me-1 text-primary"></i>
                                                    <span class="align-middle fw-semibold">Direct</span>
                                                </div>
                                                <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-down text-danger"></i> 965</span>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center p-1">
                                                <div>
                                                    <i class="ti ti-circle-filled fs-12 text-success align-middle me-1"></i>
                                                    <span class="align-middle fw-semibold">Social</span>
                                                </div>
                                                <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-up text-success"></i> 75</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-between align-items-center p-1">
                                                <div>
                                                    <i class="ti ti-circle-filled fs-12 text-secondary align-middle me-1"></i>
                                                    <span class="align-middle fw-semibold"> Marketing</span>
                                                </div>
                                                <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-up text-success"></i> 102</span>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center p-1">
                                                <div>
                                                    <i class="ti ti-circle-filled fs-12 text-danger align-middle me-1"></i>
                                                    <span class="align-middle fw-semibold">Affiliates</span>
                                                </div>
                                                <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-down text-danger"></i> 96</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="d-flex card-header justify-content-between align-items-center">
                                    <h4 class="header-title">Brands Listing</h4>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light">Add Brand <i class="ti ti-plus ms-1"></i></a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="bg-light bg-opacity-50 py-1 text-center">
                                        <p class="m-0"><b>69</b> Active brands out of <span class="fw-medium">102</span></p>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-custom table-centered table-sm table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                    <img src="assets/images/products/logo/logo-1.svg" alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Clothing</span> <br />
                                                                <h5 class="fs-14 mt-1">Zaroan - Brazil</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 2020</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">1.5k</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">8,950</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span class="avatar-title bg-info-subtle rounded-circle">
                                                                    <img src="assets/images/products/logo/logo-4.svg" alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Clothing</span> <br />
                                                                <h5 class="fs-14 mt-1">Jocky-Johns - USA</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 1985</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">205</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">1,258</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span class="avatar-title bg-secondary-subtle rounded-circle">
                                                                    <img src="assets/images/products/logo/logo-5.svg" alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Lifestyle</span> <br />
                                                                <h5 class="fs-14 mt-1">Ginne - India</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 2001</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">89</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">338</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span class="avatar-title bg-danger-subtle rounded-circle">
                                                                    <img src="assets/images/products/logo/logo-6.svg" alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Fashion</span> <br />
                                                                <h5 class="fs-14 mt-1">DDoen - Brazil</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 1995</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">650</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">6,842</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                    <img src="assets/images/products/logo/logo-8.svg" alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Manufacturing</span> <br />
                                                                <h5 class="fs-14 mt-1">Zoddiak - Canada</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 1963</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">109</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">952</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->

                                <div class="card-footer">
                                    <div class="align-items-center justify-content-between row text-center text-sm-start">
                                        <div class="col-sm">
                                            <div class="text-muted">
                                                Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">15</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <ul class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> <!-- -->
                                </div>

                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xxl-6">
                            <div class="card card-h-100">
                                <div class="card-header d-flex flex-wrap align-items-center gap-2 border-bottom border-dashed">
                                    <h4 class="header-title me-auto">Top Selling Products</h4>

                                    <div class="d-flex gap-2 justify-content-end text-end">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Import <i class="ti ti-download ms-1"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Export <i class="ti ti-file-export ms-1"></i></a>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-custom align-middle table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="assets/images/products/p-1.png" alt="Product-1" class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">ASOS High Waist Tshirt</a></h5>
                                                        <span class="text-muted fs-12">07 April 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$79.49</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">82</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$6,518.18</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="assets/images/products/p-7.png" alt="Product-1" class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Marco Single Sofa</a></h5>
                                                        <span class="text-muted fs-12">25 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$128.50</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">37</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$4,754.50</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="assets/images/products/p-4.png" alt="Product-1" class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Smart Headphone </a></h5>
                                                        <span class="text-muted fs-12">17 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$39.99</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">64</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$2,559.36</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="assets/images/products/p-5.png" alt="Product-1" class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Lightweight Jacket</a></h5>
                                                        <span class="text-muted fs-12">12 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$20.00</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">184</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$3,680.00</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="assets/images/products/p-6.png" alt="Product-1" class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Marco Shoes</a></h5>
                                                        <span class="text-muted fs-12">05 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$28.49</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">69</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$1,965.81</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->

                                <div class="card-footer">
                                    <div class="align-items-center justify-content-between row text-center text-sm-start">
                                        <div class="col-sm">
                                            <div class="text-muted">
                                                Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">10</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <ul class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> <!-- -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                </div> <!-- end col-->

                <div class="col-auto info-sidebar">
                    <div class="alert alert-primary d-flex align-items-center">
                        <iconify-icon icon="solar:help-bold-duotone" class="fs-24 me-1"></iconify-icon> <b>Help line:</b> <span class="fw-medium ms-1">+(012) 123 456 78</span>
                    </div>

                    <div class="card bg-primary">
                        <div class="card-body" style="background-image: url(assets/images/png/arrows.svg); background-size: contain; background-repeat: no-repeat; background-position: right bottom;">
                            <h1><i class="ti ti-receipt-tax text-white"></i></h1>
                            <h4 class="text-white">Estimated tax for this year</h4>
                            <p class="text-white text-opacity-75">We kindly encourage you to review your recent transactions</p>
                            <a href="#!" class="btn btn-sm rounded-pill btn-info">Activate Now</a>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-3 justify-content-between align-items-center">
                                <h4 class="header-title">Recent Orders:</h4>
                                <div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-circle btn-icon"><i class="ti ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                <div class="avatar-md flex-shrink-0">
                                    <img src="assets/images/products/p-6.png" alt="product-pic" height="36">
                                </div>
                                <div>
                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.html" class="stretched-link link-reset">Marco Shoes</a></h5>
                                    <span class="text-muted fs-12">$29.99 x 1 = $29.99</span>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                <div class="avatar-md flex-shrink-0">
                                    <img src="assets/images/products/p-1.png" alt="product-pic" height="36">
                                </div>
                                <div>
                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.html" class="stretched-link link-reset">High Waist Tshirt</a></h5>
                                    <span class="text-muted fs-12">$9.99 x 3 = $29.97</span>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                <div class="avatar-md flex-shrink-0">
                                    <img src="assets/images/products/p-3.png" alt="product-pic" height="36">
                                </div>
                                <div>
                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.html" class="stretched-link link-reset">Comfirt Chair</a></h5>
                                    <span class="text-muted fs-12">$49.99 x 1 = $49.99</span>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-soft-danger px-2 py-1">Return</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                <div class="avatar-md flex-shrink-0">
                                    <img src="assets/images/products/p-4.png" alt="product-pic" height="36">
                                </div>
                                <div>
                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.html" class="stretched-link link-reset">Smart Headphone</a></h5>
                                    <span class="text-muted fs-12">$39.99 x 1 = $39.99</span>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-2 position-relative">
                                <div class="avatar-md flex-shrink-0">
                                    <img src="assets/images/products/p-2.png" alt="product-pic" height="36">
                                </div>
                                <div>
                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.html" class="stretched-link link-reset">Laptop Bag</a></h5>
                                    <span class="text-muted fs-12">$12.99 x 4 = $51.96</span>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                </div>
                            </div>

                            <div class="mt-3 text-center">
                                <a href="#!" class="text-decoration-underline fw-semibold ms-auto link-offset-2 link-dark">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0 border-top border-dashed">
                            <h4 class="header-title px-3 mb-2 mt-3">Recent Activity:</h4>
                            <div class="my-3 px-3" data-simplebar style="max-height: 370px;">
                                <div class="timeline-alt py-0">
                                    <div class="timeline-item">
                                        <i class="ti ti-basket bg-info-subtle text-info timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">You sold an item</a>
                                            <span class="mb-1">Paul Burgess just purchased “My - Admin Dashboard”!</span>
                                            <p class="mb-0 pb-3">
                                                <small class="text-muted">5 minutes ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="ti ti-rocket bg-primary-subtle text-primary timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Product on the Theme Market</a>
                                            <span class="mb-1">Reviewer added
                                                <span class="fw-medium">Admin Dashboard</span>
                                            </span>
                                            <p class="mb-0 pb-3">
                                                <small class="text-muted">30 minutes ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="ti ti-message bg-info-subtle text-info timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Robert Delaney</a>
                                            <span class="mb-1">Send you message
                                                <span class="fw-medium">"Are you there?"</span>
                                            </span>
                                            <p class="mb-0 pb-3">
                                                <small class="text-muted">2 hours ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="ti ti-photo bg-primary-subtle text-primary timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Audrey Tobey</a>
                                            <span class="mb-1">Uploaded a photo
                                                <span class="fw-medium">"Error.jpg"</span>
                                            </span>
                                            <p class="mb-0 pb-3">
                                                <small class="text-muted">14 hours ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="ti ti-basket bg-info-subtle text-info timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">You sold an item</a>
                                            <span class="mb-1">Paul Burgess just purchased “My - Admin Dashboard”!</span>
                                            <p class="mb-0 pb-3">
                                                <small class="text-muted">16 hours ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="ti ti-rocket bg-primary-subtle text-primary timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Product on the Bootstrap Market</a>
                                            <span class="mb-1">Reviewer added
                                                <span class="fw-medium">Admin Dashboard</span>
                                            </span>
                                            <p class="mb-0 pb-3">
                                                <small class="text-muted">22 hours ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="ti ti-message bg-info-subtle text-info timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Robert Delaney</a>
                                            <span class="mb-1">Send you message
                                                <span class="fw-medium">"Are you there?"</span>
                                            </span>
                                            <p class="mb-0 pb-2">
                                                <small class="text-muted">2 days ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end timeline -->
                            </div> <!-- end slimscroll -->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row-->

        </div> <!-- container -->          
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center gap-2 px-3 py-3 offcanvas-header border-bottom border-dashed">
            <h5 class="flex-grow-1 mb-0">Theme Settings</h5>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0 h-100" data-simplebar>
            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center" for="layout-color-light">
                                <iconify-icon icon="solar:sun-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center" for="layout-color-dark">
                                <iconify-icon icon="solar:cloud-sun-2-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Layout Mode</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                            <label class="form-check-label p-0 avatar-xl w-100" for="layout-mode-fluid">
                                <div>
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column rounded-2">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </div>

                                <div>
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                            <span class="d-block p-1 bg-dark-subtle rounded me-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </div>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Fluid</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-layout-mode" id="data-layout-detached" value="detached">
                            <label class="form-check-label p-0 avatar-xl w-100" for="data-layout-detached">
                                <span class="d-flex h-100 flex-column">
                                    <span class="bg-light d-flex p-1 align-items-center border-bottom ">
                                        <span class="d-block p-1 bg-dark-subtle rounded me-1"></span>
                                        <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                        <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        <span class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                    </span>
                                    <span class="d-flex h-100 p-1 px-2">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100"></span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                </span>

                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Detached</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>

                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-brand" value="brand">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-brand">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-primary"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Gradient</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Menu Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light" value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3" style="--ct-dark-rgb: 64,73,84;">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark" value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                    <div class="col-3">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-brand" value="brand">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-brand">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-primary"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Brand</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 .border-bottom .border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Sidebar Size</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-default" value="default">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-default">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Default</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-compact" value="compact">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-compact">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Compact</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small" value="condensed">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Condensed</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small-hover" value="sm-hover">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hover View</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full" value="full">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-full">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="d-block p-1 bg-dark-subtle mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Full Layout</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-fullscreen" value="fullscreen">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-fullscreen">
                                <span class="d-flex h-100">
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hidden</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Container Width</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-container-position" id="container-width-fixed" value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                        <input type="radio" class="btn-check" name="data-container-position" id="container-width-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="container-width-scrollable">Boxed</label>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Layout Position</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 px-3 py-2 offcanvas-header border-top border-dashed">
            <button type="button" class="btn w-50 btn-soft-danger" id="reset-layout">Reset</button>
            <button type="button" class="btn w-50 btn-soft-info">Buy Now</button>
        </div>

    </div>
@endsection