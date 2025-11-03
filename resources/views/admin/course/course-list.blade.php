@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/course/course-list.css') }}">
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
                            <h4 class="header-title mb-0">Courses</h4>
                            <div class="d-flex">
                                <a href="{{ route('add_new_course') }}" class="btn btn-sm glodex-blue-btn">
                                    <i class="ti ti-plus"
                                        style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>
                                    Add New
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            {{-- <div class="table-responsive-sm">
                                <table id="dataTable" class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Course Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>
                                                    <div class="dropdown position-relative">
                                                        <button
                                                            type="button"
                                                            class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ti ti-dots-vertical ti-md"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="{{ route('edit_course', $course->id) }}" class="dropdown-item d-flex align-items-center gap-1" title="Login As">
                                                                <i class="ti ti-edit ti-md"></i> <span>Edit</span>
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                            onclick="confirmDelete({{ $course->id }})"
                                                            class="dropdown-item d-flex align-items-center gap-1"
                                                            title="Delete">
                                                                <i class="ti ti-trash ti-md"></i> <span>Delete</span>
                                                            </a>
                                                            <form id="delete-course-form-{{ $course->id }}" method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $course->course_name ?? 'Not Added' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>  --}}
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div
                                        class="glodex-show-entries d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <!-- Show entries dropdown -->
                                        <div class="d-flex align-items-center gap-2">
                                            <form method="GET" action="#">
                                                <div class="d-flex align-items-center gap-2">
                                                    <label for="glodex-show-entries" class="form-label mb-0">Show</label>
                                                    <select name="per_page" id="glodex-show-entries"
                                                        class="form-select form-select-sm w-auto" ">
                                                                <option value="8" >8</option>
                                                                <option value="20" >20</option>
                                                                <option value="50" >50</option>
                                                                <option value="100" >100</option>
                                                            </select>
                                                            <span>entries</span>
                                                        </div>

                                                        {{-- @if (request()->has('search_country')) --}}
                                                            <input type="hidden" name="search_country" value="{{ request('search_country') }}">
                                                        {{-- @endif --}}
                                                     <form>
                                                    </div>
                                                    <!-- Search form -->
                                                    <form action="#"  method="GET" class="d-flex align-items-center align-items-end">
                                                        <div class="glodex-search-field d-flex align-items-center">
                                                            <input type="search" name="search_country" id="glodex-country-search" class="form-control form-control-sm mb-0" value="" placeholder="Search country...">
                                                            <button type="submit" class="btn btn-sm glodex-blue-btn"><i class="ti ti-search" style="font-size: 1.3rem;"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

            <div class="row  pb-4">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-3">
                    <div class="course-list-card border position-relative">
                        {{-- 3 dots --}}
                        <div class="btn-group glodex-custom-3dot-dropdown">
                            <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-school me-2"></i> Universities</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-book-2 me-2"></i> Courses</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-map-pin me-2"></i> Country Details</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i> Edit</a></li>
                                <li>
                                    <a class="dropdown-item" href="#" ><i class="ti ti-trash me-2"></i> Delete</a>
                                    <form id="delete-country-for" method="POST" style="display: none;">
                                        {{-- @csrf
                        @method('DELETE') --}}
                                    </form>
                                </li>
                            </ul>
                        </div>
                        {{-- 3 dots --}}
                        <div class="card-header-section ">
                            <h1 class="course-title">Master of Business Administration</h1>
                            <div class="university-info">
                                <div class="university-details">
                                    <h3>Stanford University</h3>
                                    <p><i class="ti ti-flag"></i> United States</p>
                                </div>
                                <div class="university-logo">
                                    <img src="{{ asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="Stanford University Logo">
                                </div>
                            </div>
                        </div>

                        <div class="card-body-section">
                            <div class="info-grid">
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-school" style="font-size: 18px;"></i> Program Level
                                    </h4>
                                    <div class="info-value">Master's</div>
                                </div>

                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-calendar-check" style="font-size: 18px;"></i> Intake Month
                                    </h4>
                                    <div class="info-value">September</div>
                                </div>
                            </div>
                            <div class="info-grid">
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-brand-framer" style="font-size: 18px;"></i> Application Fees
                                    </h4>
                                    <div class="info-value price">$ 275</div>
                                </div>

                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-currency-dollar" style="font-size: 18px;"></i> Tuition Fees/Year
                                    </h4>
                                    <div class="info-value price">$ 82,000</div>
                                </div>
                            </div>

                            <div class="info-grid">
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-brand-codepen" style="font-size: 18px;"></i> Program Length
                                    </h4>
                                    <div class="info-value">2 Years</div>
                                </div>
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-award-off" style="font-size: 18px;"></i> Tuition Fees/Year
                                    </h4>
                                    <div class="info-value price">$ 82,000</div>
                                </div>
                            </div>
                            <div class="pt-2 d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-gradient ">View Details </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-3">
                    <div class="course-list-card border position-relative">
                        {{-- 3 dots --}}
                        <div class="btn-group glodex-custom-3dot-dropdown">
                            <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-school me-2"></i> Universities</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-book-2 me-2"></i> Courses</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-map-pin me-2"></i> Course Details</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i> Edit</a></li>
                                <li>
                                    <a class="dropdown-item" href="#" ><i class="ti ti-trash me-2"></i> Delete</a>
                                    <form id="delete-country-for" method="POST" style="display: none;">
                                        {{-- @csrf
                        @method('DELETE') --}}
                                    </form>
                                </li>
                            </ul>
                        </div>
                        {{-- 3 dots --}}
                        <div class="card-header-section ">
                            <h1 class="course-title">Master of Business Administration</h1>
                            <div class="university-info">
                                <div class="university-details">
                                    <h3>Stanford University</h3>
                                    <p><i class="ti ti-flag"></i> United States</p>
                                </div>
                                <div class="university-logo">
                                    <img src="{{ asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="Stanford University Logo">
                                </div>
                            </div>
                        </div>

                        <div class="card-body-section">
                            <div class="info-grid">
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-school" style="font-size: 18px;"></i> Program Level
                                    </h4>
                                    <div class="info-value">Master's</div>
                                </div>

                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-calendar-check" style="font-size: 18px;"></i> Intake Month
                                    </h4>
                                    <div class="info-value">September</div>
                                </div>
                            </div>
                            <div class="info-grid">
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-brand-framer" style="font-size: 18px;"></i> Application Fees
                                    </h4>
                                    <div class="info-value price">$ 275</div>
                                </div>

                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-currency-dollar" style="font-size: 18px;"></i> Tuition Fees/Year
                                    </h4>
                                    <div class="info-value price">$ 82,000</div>
                                </div>
                            </div>

                            <div class="info-grid">
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-brand-codepen" style="font-size: 18px;"></i> Program Length
                                    </h4>
                                    <div class="info-value">2 Years</div>
                                </div>
                                <div class="info-item">
                                    <h4 class="d-flex align-items-center gap-1">
                                        <i class="ti ti-award-off" style="font-size: 18px;"></i> Tuition Fees/Year
                                    </h4>
                                    <div class="info-value price">$ 82,000</div>
                                </div>
                            </div>
                            <div class="pt-2 d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-gradient ">View Details </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-3">
                <div class="course-list-card border position-relative">
                    {{-- 3 dots --}}
                    <div class="btn-group glodex-custom-3dot-dropdown">
                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="ti ti-school me-2"></i> Universities</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-book-2 me-2"></i> Courses</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-map-pin me-2"></i> Country Details</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i> Edit</a></li>
                            <li>
                                <a class="dropdown-item" href="#" ><i class="ti ti-trash me-2"></i> Delete</a>
                                <form id="delete-country-for" method="POST" style="display: none;">
                                    {{-- @csrf
                        @method('DELETE') --}}
                                </form>
                            </li>
                        </ul>
                    </div>
                    {{-- 3 dots --}}
                    <div class="card-header-section ">
                        <h1 class="course-title">Master of Business Administration</h1>
                        <div class="university-info">
                            <div class="university-details">
                                <h3>Stanford University</h3>
                                <p><i class="ti ti-flag"></i> United States</p>
                            </div>
                            <div class="university-logo">
                                <img src="{{ asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="Stanford University Logo">
                            </div>
                        </div>
                    </div>

                    <div class="card-body-section">
                        <div class="info-grid">
                            <div class="info-item">
                                <h4 class="d-flex align-items-center gap-1">
                                    <i class="ti ti-school" style="font-size: 18px;"></i> Program Level
                                </h4>
                                <div class="info-value">Master's</div>
                            </div>

                            <div class="info-item">
                                <h4 class="d-flex align-items-center gap-1">
                                    <i class="ti ti-calendar-check" style="font-size: 18px;"></i> Intake Month
                                </h4>
                                <div class="info-value">September</div>
                            </div>
                        </div>
                        <div class="info-grid">
                            <div class="info-item">
                                <h4 class="d-flex align-items-center gap-1">
                                    <i class="ti ti-brand-framer" style="font-size: 18px;"></i> Application Fees
                                </h4>
                                <div class="info-value price">$ 275</div>
                            </div>

                            <div class="info-item">
                                <h4 class="d-flex align-items-center gap-1">
                                    <i class="ti ti-currency-dollar" style="font-size: 18px;"></i> Tuition Fees/Year
                                </h4>
                                <div class="info-value price">$ 82,000</div>
                            </div>
                        </div>

                        <div class="info-grid">
                            <div class="info-item">
                                <h4 class="d-flex align-items-center gap-1">
                                    <i class="ti ti-brand-codepen" style="font-size: 18px;"></i> Program Length
                                </h4>
                                <div class="info-value">2 Years</div>
                            </div>
                            <div class="info-item">
                                <h4 class="d-flex align-items-center gap-1">
                                    <i class="ti ti-award-off" style="font-size: 18px;"></i> Tuition Fees/Year
                                </h4>
                                <div class="info-value price">$ 82,000</div>
                            </div>
                        </div>
                        <div class="pt-2 d-flex justify-content-center">
                            <a href="#" class="btn btn-sm btn-gradient ">View Details </a>
                        </div>
                    </div>
                </div>
            </div>
                                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-3">
                                                                                <div class="course-list-card border position-relative">
                                                                                    {{-- 3 dots --}}
                                                                                    <div class="btn-group glodex-custom-3dot-dropdown">
                                                                                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                            <i class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-school me-2"></i> Universities</a></li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-book-2 me-2"></i> Courses</a></li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-map-pin me-2"></i> Country Details</a></li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i> Edit</a></li>
                                                                                            <li>
                                                                                                <a class="dropdown-item" href="#" ><i class="ti ti-trash me-2"></i> Delete</a>
                                                                                                <form id="delete-country-for" method="POST" style="display: none;">
                                                                                                    {{-- @csrf
                                                                                        @method('DELETE') --}}
                                                                                                </form>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    {{-- 3 dots --}}
                                                                                    <div class="card-header-section ">
                                                                                        <h1 class="course-title">Master of Business Administration</h1>
                                                                                        <div class="university-info">
                                                                                            <div class="university-details">
                                                                                                <h3>Stanford University</h3>
                                                                                                <p><i class="ti ti-flag"></i> United States</p>
                                                                                            </div>
                                                                                            <div class="university-logo">
                                                                                                <img src="{{ asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="Stanford University Logo">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="card-body-section">
                                                                                        <div class="info-grid">
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-school" style="font-size: 18px;"></i> Program Level
                                                                                                </h4>
                                                                                                <div class="info-value">Master's</div>
                                                                                            </div>

                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-calendar-check" style="font-size: 18px;"></i> Intake Month
                                                                                                </h4>
                                                                                                <div class="info-value">September</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-grid">
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-brand-framer" style="font-size: 18px;"></i> Application Fees
                                                                                                </h4>
                                                                                                <div class="info-value price">$ 275</div>
                                                                                            </div>

                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-currency-dollar" style="font-size: 18px;"></i> Tuition Fees/Year
                                                                                                </h4>
                                                                                                <div class="info-value price">$ 82,000</div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="info-grid">
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-brand-codepen" style="font-size: 18px;"></i> Program Length
                                                                                                </h4>
                                                                                                <div class="info-value">2 Years</div>
                                                                                            </div>
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-award-off" style="font-size: 18px;"></i> Tuition Fees/Year
                                                                                                </h4>
                                                                                                <div class="info-value price">$ 82,000</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pt-2 d-flex justify-content-center">
                                                                                            <a href="#" class="btn btn-sm btn-gradient ">View Details </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-3">
                                                                                <div class="course-list-card border position-relative">
                                                                                    {{-- 3 dots --}}
                                                                                    <div class="btn-group glodex-custom-3dot-dropdown">
                                                                                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                            <i class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-school me-2"></i> Universities</a></li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-book-2 me-2"></i> Courses</a></li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-map-pin me-2"></i> Country Details</a></li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i> Edit</a></li>
                                                                                            <li>
                                                                                                <a class="dropdown-item" href="#" ><i class="ti ti-trash me-2"></i> Delete</a>
                                                                                                <form id="delete-country-for" method="POST" style="display: none;">
                                                                                                    {{-- @csrf
                                                                                        @method('DELETE') --}}
                                                                                                </form>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    {{-- 3 dots --}}
                                                                                    <div class="card-header-section ">
                                                                                        <h1 class="course-title">Master of Business Administration</h1>
                                                                                        <div class="university-info">
                                                                                            <div class="university-details">
                                                                                                <h3>Stanford University</h3>
                                                                                                <p><i class="ti ti-flag"></i> United States</p>
                                                                                            </div>
                                                                                            <div class="university-logo">
                                                                                                <img src="{{ asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="Stanford University Logo">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="card-body-section">
                                                                                        <div class="info-grid">
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-school" style="font-size: 18px;"></i> Program Level
                                                                                                </h4>
                                                                                                <div class="info-value">Master's</div>
                                                                                            </div>

                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-calendar-check" style="font-size: 18px;"></i> Intake Month
                                                                                                </h4>
                                                                                                <div class="info-value">September</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-grid">
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-brand-framer" style="font-size: 18px;"></i> Application Fees
                                                                                                </h4>
                                                                                                <div class="info-value price">$ 275</div>
                                                                                            </div>

                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-currency-dollar" style="font-size: 18px;"></i> Tuition Fees/Year
                                                                                                </h4>
                                                                                                <div class="info-value price">$ 82,000</div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="info-grid">
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-brand-codepen" style="font-size: 18px;"></i> Program Length
                                                                                                </h4>
                                                                                                <div class="info-value">2 Years</div>
                                                                                            </div>
                                                                                            <div class="info-item">
                                                                                                <h4 class="d-flex align-items-center gap-1">
                                                                                                    <i class="ti ti-award-off" style="font-size: 18px;"></i> Tuition Fees/Year
                                                                                                </h4>
                                                                                                <div class="info-value price">$ 82,000</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pt-2 d-flex justify-content-center">
                                                                                            <a href="#" class="btn btn-sm btn-gradient ">View Details </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <!-- END wrapper -->
@endsection
@push('page-js')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
            <script>
                function confirmDelete(id) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.getElementById(`delete-course-form-${id}`);
                            form.action = "{{ route('delete_course', '') }}/" + id;
                            form.submit();
                        }
                    });
                }
            </script>
@endpush
