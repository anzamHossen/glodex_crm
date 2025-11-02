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
                                                        src="{{ $universityDetails->cover_image && file_exists(public_path($universityDetails->cover_image)) ? asset($universityDetails->cover_image) : asset('back-end/assets/images/dr-profile/image-upload.jpg') }}"
                                                        alt="cover photo">
                                                        <div class="country-details-top-info">
                                                            <div class="text-white country-details-top-info-inner">
                                                                <h1 class="display-5 fw-bold mb-2">
                                                                    {{ $universityDetails->country->country_name ?? 'Not Added'}}
                                                                </h1>
                                                                <p class="lead">
                                                                    Discover world-class education opportunities in one of the most prestigious academic destinations.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="country-details-cover-bottom-flag">
                                                            <img
                                                                src="{{ $universityDetails->logo && file_exists(public_path($universityDetails->logo)) ? asset($universityDetails->logo) : asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="United Kingdom flag"
                                                                class="img-fluid rounded-circle">
                                                        </div>
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
                                                        <div class="info-value">{{ $universityDetails->university_name }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Country</div>
                                                        <div class="info-value">{{ $universityDetails->country->country_name ?? 'Not Added'}}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">City</div>
                                                        <div class="info-value">{{ $universityDetails->university_city ?? 'Not Added'}}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Email</div>
                                                        <div class="info-value">
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <i class="bi bi-envelope me-2"></i>{{ $universityDetails->admission_email ?? 'Not Added'}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Phone</div>
                                                        <div class="info-value">
                                                            <i class="bi bi-telephone me-2"></i>{{ $universityDetails->admission_phone ?? 'Not Added'}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Website</div>
                                                        <div class="info-value">
                                                            <a href="#" target="_blank" class="text-decoration-none text-white">
                                                                <i class="bi bi-globe me-2"></i>{{ $universityDetails->website_link ?? 'Not Added'}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Location</div>
                                                        <div class="info-value">
                                                            <i class="bi bi-pin-map me-2"></i>{{ $universityDetails->address ?? 'Not Added'}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-card">
                                                        <div class="info-label">Commission For Us</div>
                                                        <div class="info-value">{{ $universityDetails->commission_for_us ?? 'Not Added' }}</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="description-box">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 class="section-title">
                                                            <i class="ti ti-file-text me-2"></i>About the University
                                                        </h3>
                                                        <h4 class="text-white"> {!! $universityDetails->description !!}</h4>
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
