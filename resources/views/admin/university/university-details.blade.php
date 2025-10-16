@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/country/country-details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/university/university-details.css') }}">
@endpush
@section('content')
    <!-- Begin page -->
    <div class="wrapper">
        <div class="page-container">
            <div class="row mt-2">
                <div class="col-xl-12">
                    <div class="card">
                        <div
                            class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                            <h4 class="header-title mb-0">University Details</h4>
                            <div class="d-flex">
                                <a href="{{ route('university_list') }}" class="btn btn-sm btn-gradient me-2">
                                    <i class="ti ti-arrow-back-up"
                                        style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>
                                    Go Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="country-details-container">
                                <section class="py-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="country-details-cover-photo border-0 shadow-sm position-relative">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{asset('back-end/assets/images/sellers/s-1.svg') }}"
                                                        alt="cover photo">
                                                        <div class="country-details-top-info">
                                                            <div class="text-white country-details-top-info-inner">
                                                                <p class="text-uppercase mb-2" style="letter-spacing: 2px; font-size: 0.875rem;">
                                                                   Europe
                                                                </p>
                                                                <h1 class="display-5 fw-bold mb-2">Italy</h1>
                                                                <p class="lead">
                                                                    Discover world-class education opportunities in one of the most prestigious academic destinations.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="country-details-cover-bottom-flag">
                                                            <img
                                                                src="{{ asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="United Kingdom flag"
                                                                class="img-fluid rounded-circle">
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="py-4">
                                    <div class="container">
                                        <div class="row g-2 text-center country-details-stats-section">
                                            <div class="col-md-6 col-lg-4 col-xl col-sm-6">
                                                <div class="card h-100 border-0 shadow-sm">
                                                    <div class="card-body p-3">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3 country-details-stats-icon"
                                                            >
                                                            <i class="ti ti-school text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $totalUniversities ?? 0 }}+</h3>
                                                        <p class="text-white opacity-75 mb-0">Total Universities</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl col-sm-6">
                                                <div class="card h-100 border-0 shadow-sm">
                                                    <div class="card-body p-3">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3 country-details-stats-icon"
                                                            >
                                                            <i class="ti ti-book-2 text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $totalCourses ?? 0 }}+</h3>
                                                        <p class="text-white opacity-75 mb-0">Total Courses</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl col-sm-6">
                                                <div class="card h-100 border-0 shadow-sm">
                                                    <div class="card-body p-3">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3 country-details-stats-icon"
                                                            >
                                                            <i class="ti ti-users text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $country->country_population ?? 0 }}</h3>
                                                        <p class="text-white opacity-75 mb-0">Population</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl col-sm-6">
                                                <div class="card h-100 border-0 shadow-sm">
                                                    <div class="card-body p-3">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3 country-details-stats-icon"
                                                            >
                                                            <i class="ti ti-map-pin text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $country->country_capital ?? 0 }}</h3>
                                                        <p class="text-white opacity-75 mb-0">Capital</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl col-sm-6">
                                                <div class="card h-100 border-0 shadow-sm">
                                                    <div class="card-body p-3">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3 country-details-stats-icon"
                                                            >
                                                            <i class="ti ti-trending-up text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $country->country_gdp ?? 0 }}</h3>
                                                        <p class="text-white opacity-75 mb-0">GDP</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="py-4">
                                    <div class="container">
                                        <div class="row justify-content-center country-details-description">
                                            <div class="col-lg-10 col-sm-12 col-12">
                                                <div class="card border-0 shadow-sm p-4 mb-0">
                                                    <h3 class="h4">About Germany </h3>
                                                    <p class="text-white">
                                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. In a quis, quo ratione, necessitatibus quia neque provident impedit commodi vero dolor porro! Sunt mollitia beatae iure inventore, impedit neque architecto.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="py-4">
                                    <div class="container">
                                        <div class="info-section row">
                                            <div class="col-md-12">
                                                <h2 class="section-title">
                                                    <i class="bi bi-building me-2"></i>University Information
                                                </h2>
                                            </div>
                                        </div>

                                            <div class="row pb-4">
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">University Name</div>
                                                        <div class="info-value">Harvard University</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Country</div>
                                                        <div class="info-value">Germany</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">City</div>
                                                        <div class="info-value">Berlin</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Email</div>
                                                        <div class="info-value">
                                                            <a href="mailto:admission@university.edu" class="text-decoration-none" style="color: #00bcd4;">
                                                                <i class="bi bi-envelope me-2"></i>admission@university.edu
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Phone</div>
                                                        <div class="info-value">
                                                            <i class="bi bi-telephone me-2"></i>+49 123 456 7890
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Website</div>
                                                        <div class="info-value">
                                                            <a href="https://www.university.edu" target="_blank" class="text-decoration-none" style="color: #00bcd4;">
                                                                <i class="bi bi-globe me-2"></i>www.university.edu
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Location</div>
                                                        <div class="info-value">
                                                            <i class="bi bi-pin-map me-2"></i>123 University Street, Berlin, Germany
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Commission For Us</div>
                                                        <div class="info-value">5%</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Commission For Agent</div>
                                                        <div class="info-value">3%</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="description-box">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 class="section-title">
                                                            <i class="ti ti-file-text me-2"></i>About the University
                                                        </h3>
                                                        <p class="text-white">This prestigious institution offers world-class education with state-of-the-art facilities and renowned faculty members. Students from around the globe come here to pursue their academic dreams and build successful careers.</p>
                                                        <p class="text-white">The university is known for its cutting-edge research programs, diverse student community, and strong industry connections that provide excellent career opportunities for graduates.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                {{-- <section class="pb-4 text-center">
                                    <div class="container">
                                        <a href="#" class="btn btn-gradient btn-lg text-white border-0 d-inline-flex align-items-center gap-2"
                                            >
                                            <i class="ti ti-arrow-left"></i>
                                            Back to All Countries
                                        </a>
                                    </div>
                                </section> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->
@endsection
