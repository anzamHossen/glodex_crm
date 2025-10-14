@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/country/country-details.css') }}">
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
                            <h4 class="header-title mb-0">Country Details</h4>
                            <div class="d-flex">
                                <a href="{{ route('country_list') }}" class="btn btn-sm btn-secondary me-2">
                                    <i class="ti ti-arrow-back-up"
                                        style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>
                                    Go Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="" style="background-color: #0a1929; font-family: 'Poppins', sans-serif;">
                                <!-- Hero Section -->
                                <section class="py-5">
                                    <div class="container">
                                        <div class="row align-items-center g-4">
                                            <div class="col-lg-5">
                                                <img src="{{ asset('back-end/assets/images/flags/uk.svg') }}" alt="United Kingdom flag"
                                                    class="img-fluid shadow-lg rounded-4">
                                            </div>
                                            <div class="col-lg-7 text-white">
                                                <p class="text-uppercase mb-2 opacity-75" style="letter-spacing: 2px; font-size: 0.875rem;">
                                                    Europe
                                                </p>
                                                <h1 class="display-3 fw-bold mb-3">United Kingdom</h1>
                                                <p class="lead opacity-90">
                                                    Discover world-class education opportunities in one of the most prestigious academic destinations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Stats Section -->
                                <section class="py-5">
                                    <div class="container">
                                        <div class="row g-4 text-center">
                                            <div class="col-md-6 col-lg-4 col-xl">
                                                <div class="card h-100 border-0 shadow-sm" style="background-color: #132f4c; border-radius: 1rem;">
                                                    <div class="card-body p-4">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3"
                                                            style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#00BFFF,#1E90FF);">
                                                            <i class="ti ti-graduation-cap text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">165+</h3>
                                                        <p class="text-white opacity-75 mb-0">Total Universities</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl">
                                                <div class="card h-100 border-0 shadow-sm" style="background-color: #132f4c; border-radius: 1rem;">
                                                    <div class="card-body p-4">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3"
                                                            style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#00BFFF,#1E90FF);">
                                                            <i class="ti ti-book-2 text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">50,000+</h3>
                                                        <p class="text-white opacity-75 mb-0">Total Courses</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl">
                                                <div class="card h-100 border-0 shadow-sm" style="background-color: #132f4c; border-radius: 1rem;">
                                                    <div class="card-body p-4">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3"
                                                            style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#00BFFF,#1E90FF);">
                                                            <i class="ti ti-users text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">67.3M</h3>
                                                        <p class="text-white opacity-75 mb-0">Population</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl">
                                                <div class="card h-100 border-0 shadow-sm" style="background-color: #132f4c; border-radius: 1rem;">
                                                    <div class="card-body p-4">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3"
                                                            style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#00BFFF,#1E90FF);">
                                                            <i class="ti ti-map-pin text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">London</h3>
                                                        <p class="text-white opacity-75 mb-0">Capital</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl">
                                                <div class="card h-100 border-0 shadow-sm" style="background-color: #132f4c; border-radius: 1rem;">
                                                    <div class="card-body p-4">
                                                        <div class="d-inline-flex align-items-center justify-content-center mb-3"
                                                            style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#00BFFF,#1E90FF);">
                                                            <i class="ti ti-trending-up text-white fs-3"></i>
                                                        </div>
                                                        <h3 class="h2 fw-bold text-white mb-2">$3.1T</h3>
                                                        <p class="text-white opacity-75 mb-0">GDP</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Description -->
                                <section class="py-5">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <div class="card border-0 shadow-sm p-5" style="background-color: #132f4c; border-radius: 1rem;">
                                                    <h2 class="h3 fw-bold text-white mb-4">About United Kingdom</h2>
                                                    <p class="text-white opacity-90 lh-lg" style="font-size: 1.05rem;">
                                                        The United Kingdom has a rich educational heritage dating back centuries, with some of the world's oldest and most prestigious universities. The UK education system is renowned for its academic excellence, research opportunities, and diverse student community. Students from around the globe choose the UK for its world-class institutions, innovative teaching methods, and strong industry connections.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Universities -->
                                <section class="py-5">
                                    <div class="container">
                                        <div class="text-center mb-5">
                                            <h2 class="h2 fw-bold text-white mb-3">Top Universities</h2>
                                            <p class="text-white opacity-75">Explore the leading institutions offering world-class education</p>
                                        </div>

                                        <div class="row g-4">
                                            @foreach ([
                                                ['name' => 'University of Oxford', 'image' => 'oxford-university-building.jpg', 'ranking' => '#1 in UK'],
                                                ['name' => 'University of Cambridge', 'image' => 'cambridge-university-building.jpg', 'ranking' => '#2 in UK'],
                                                ['name' => 'Imperial College London', 'image' => 'imperial-college-london-building.jpg', 'ranking' => '#3 in UK'],
                                                ['name' => 'London School of Economics', 'image' => 'lse-building.jpg', 'ranking' => '#4 in UK'],
                                            ] as $university)
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card border-0 shadow-sm h-100 university-card" style="background-color: #132f4c; border-radius: 1rem; transition: transform 0.3s ease;">
                                                        <img src="{{ asset('images/' . $university['image']) }}" alt="{{ $university['name'] }}" class="card-img-top rounded-top-4" style="height:200px;object-fit:cover;">
                                                        <div class="card-body p-4">
                                                            <span class="badge mb-3 text-white" style="background:linear-gradient(135deg,#00BFFF,#1E90FF);font-size:0.75rem;padding:0.5rem 1rem;">
                                                                {{ $university['ranking'] }}
                                                            </span>
                                                            <h5 class="text-white fw-bold mb-3">{{ $university['name'] }}</h5>
                                                            <a href="#" class="btn w-100 text-white border-0" style="background:linear-gradient(135deg,#00BFFF,#1E90FF);border-radius:0.5rem;padding:0.75rem;font-weight:500;">
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>

                                <!-- Back Button -->
                                <section class="py-5 text-center">
                                    <div class="container">
                                        <a href="#" class="btn btn-lg text-white border-0 d-inline-flex align-items-center gap-2"
                                            style="background: linear-gradient(135deg, #00BFFF, #1E90FF); border-radius: 0.75rem; padding: 1rem 2.5rem; font-weight: 500; text-decoration: none;">
                                            <i class="ti ti-arrow-left"></i>
                                            Back to All Countries
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
