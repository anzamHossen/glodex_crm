@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/course/course-list.css') }}">
@endpush
@section('content')
<div class="wrapper">
    <div class="page-container">
        <div class="row mt-2">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                        <h4 class="header-title mb-0">Courses</h4>
                        <div class="d-flex items-center gap-2">
                            <a href="{{ route('add_new_course') }}" class="btn btn-sm glodex-blue-btn">
                                <i class="ti ti-plus" style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>
                                Add New
                            </a>
                            <a href="#" class="btn btn-sm glodex-blue-btn" id="addNewCountryBtn">
                                <i class="ti ti-rotate me-2"></i>
                                Refresh
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="glodex-show-entries d-flex align-items-center justify-content-between flex-wrap gap-3">

                                    <!-- Show entries dropdown -->
                                    <form method="GET" action="#" class="d-flex align-items-center gap-2">
                                        <label for="glodex-show-entries" class="form-label mb-0">Show</label>
                                        <select name="per_page" id="glodex-show-entries" class="form-select form-select-sm w-auto">
                                            <option value="8">8</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span>entries</span>
                                        <input type="hidden" name="search_country" value="{{ request('search_country') }}">
                                    </form>

                                    <!-- Search form -->
                                    <form action="#" method="GET" class="d-flex align-items-center align-items-end">
                                        <div class="glodex-search-field d-flex align-items-center">
                                            <input type="search" name="search_country" id="glodex-country-search"
                                                class="form-control form-control-sm mb-0"
                                                value="{{ request('search_country') }}" placeholder="Search country...">
                                            <button type="submit" class="btn btn-sm glodex-blue-btn">
                                                <i class="ti ti-search" style="font-size: 1.3rem;"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row pb-4">
                            @foreach ($courses as $course)
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-3">
                                    <div class="course-list-card border position-relative">

                                        <!-- 3 Dots Dropdown -->
                                        <div class="btn-group glodex-custom-3dot-dropdown">
                                            <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('course_details', $course->id) }}"><i class="ti ti-map-pin me-2"></i> CourseDetails</a></li>
                                                <li><a class="dropdown-item" href="{{ route('edit_course', $course->id) }}"><i class="ti ti-edit me-2"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#"  onclick="confirmDelete({{ $course->id }})"><i class="ti ti-trash me-2"></i> Delete</a>
                                                    <form id="delete-course-form-{{ $course->id }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Card Header Section -->
                                        <div class="card-header-section">
                                            <h1 class="course-title">{{ $course->course_name ?? 'Not Added' }}</h1>
                                            <div class="university-info">
                                                <div class="university-details">
                                                    <h3>{{ $course->university->university_name ?? 'Not Added' }}</h3>
                                                    <p><i class="ti ti-flag"></i>{{ $course->country->country_name ?? 'Not Added' }}</p>
                                                </div>
                                                <div class="university-logo">
                                                   <img src="{{ $course->university && $course->university->logo && file_exists(public_path($course->university->logo))
                                                            ? asset($course->university->logo)
                                                            : asset('back-end/assets/images/dr-profile/image-upload.jpg') }}"
                                                    alt="{{ $course->university->university_name ?? 'University Logo' }}"
                                                    class="img-fluid rounded-4">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card Body Section -->
                                        <div class="card-body-section">
                                            <div class="info-grid">
                                                <div class="info-item">
                                                    <h4 class="d-flex align-items-center gap-1">
                                                        <i class="ti ti-school" style="font-size: 18px;"></i> Program Level
                                                    </h4>
                                                    <div class="info-value"> {{ $course->CourseProgram->course_program ?? 'N/A' }}</div>
                                                </div>

                                                <div class="info-item">
                                                    <h4 class="d-flex align-items-center gap-1">
                                                        <i class="ti ti-calendar-check" style="font-size: 18px;"></i> Intake Month
                                                    </h4>
                                                    <div class="info-value">{{ $course->intake_month_names ?? 'Not Added' }}/Year</div>
                                                </div>
                                            </div>

                                            <div class="info-grid">
                                                <div class="info-item">
                                                    <h4 class="d-flex align-items-center gap-1">
                                                        <i class="ti ti-brand-framer" style="font-size: 18px;"></i> Application Fees
                                                    </h4>
                                                    <div class="info-value price">{{ $course->application_fee ?? 'Not Added' }}</div>
                                                </div>

                                                <div class="info-item">
                                                    <h4 class="d-flex align-items-center gap-1">
                                                        <i class="ti ti-currency-dollar" style="font-size: 18px;"></i> Tuition Fees/Year
                                                    </h4>
                                                    <div class="info-value price">{{ $course->tuition_fee_per_year ?? 'Not Added' }}</div>
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
                                                        <i class="ti ti-award-off" style="font-size: 18px;"></i>Program Type
                                                    </h4>
                                                    <div class="info-value">Full-Time</div>
                                                </div>
                                            </div>

                                            <div class="pt-2 d-flex justify-content-center">
                                                <a href="#" class="btn btn-sm btn-gradient">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="pagination-container">
                                    {{ $courses->appends(request()->query())->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <p>
                                    Showing {{ $courses->count() }} records on page {{ $courses->currentPage() }} of {{ $courses->lastPage() }}
                                    (Total: {{ $courses->total() }} records)
                                </p>
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
