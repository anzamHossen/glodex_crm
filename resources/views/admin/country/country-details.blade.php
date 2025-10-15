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
                                                <img src="{{ $country->flag && file_exists(public_path($country->flag)) ? asset($country->flag) : asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="United Kingdom flag"
                                                    class="img-fluid shadow-lg rounded-4">
                                            </div>
                                            <div class="col-lg-7 text-white">
                                                <p class="text-uppercase mb-2 opacity-75" style="letter-spacing: 2px; font-size: 0.875rem;">
                                                    {{ $country->countryContinent->continent_name ?? 'Not Added' }}
                                                </p>
                                                <h1 class="display-3 fw-bold mb-3">{{ $country->country_name ?? 'Not Added' }}</h1>
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
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $totalUniversities ?? 0 }}+</h3>
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
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $totalCourses ?? 0 }}+</h3>
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
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $country->country_population }}</h3>
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
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $country->country_capital }}</h3>
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
                                                        <h3 class="h2 fw-bold text-white mb-2">{{ $country->country_gdp }}</h3>
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
                                                    <h2 class="h3 fw-bold text-white mb-4">About {{ $country->country_name }}</h2>
                                                    <p class="text-white opacity-90 lh-lg" style="font-size: 1.05rem;">
                                                        {!! $country->description !!}
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
                                            @forelse ($randomUniversities as $university)
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card border-0 shadow-sm h-100 university-card" 
                                                        style="background-color: #132f4c; border-radius: 1rem; transition: transform 0.3s ease;">
                                                        <img src="{{ $university->logo && file_exists(public_path($university->logo)) ? asset($university->logo) : asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" 
                                                            alt="{{ $university->university_name }}" 
                                                            class="card-img-top rounded-top-4" 
                                                            style="height:200px;object-fit:cover;">
                                                        <div class="card-body p-4">
                                                            <h5 class="text-white fw-bold mb-3">{{ $university->university_name }}</h5>
                                                            <a href="#" 
                                                            class="btn w-100 text-white border-0" 
                                                            style="background:linear-gradient(135deg,#00BFFF,#1E90FF);
                                                                    border-radius:0.5rem;padding:0.75rem;font-weight:500;">
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="text-white">No universities available for this country.</p>
                                            @endforelse
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
