@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/university/university-list.css') }}">
@endpush
@section('content')
    <!-- Begin page -->
    <div class="wrapper">
        <div class="page-container">
            <div class="row mt-2">
                <div class="col-xl-12">
                    <div class="card">
                       <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                            <h4 class="header-title mb-0">University List</h4>
                            <div class="d-flex">
                                <a href="{{ route('add_new_university') }}" class="btn btn-sm glodex-blue-btn">
                                    <i class="ti ti-plus" style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>
                                    Add New
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-4">
                {{-- show entries --}}
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="glodex-show-entries ">

                            <!-- Show entries dropdown -->
                            <form class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="glodex-show-entries" class="form-label mb-0">Show</label>
                                    <select name="glodex-show-entries" id="glodex-show-entries" class="form-select form-select-sm w-auto">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    </select>
                                    <span>entries</span>
                                </div>
                                <!-- Search form -->
                                <div class="d-flex align-items-center align-items-end">
                                    <div class="glodex-show-entries-select">
                                        <select class="form-control"  id="university_id" name="university_id" data-choices id="choices-single-default">
                                            <option value="">Select University</option>
                                            <option value="Oxford" > Oxford</option>
                                            <option value="Harvard" >Harvard</option>
                                            <option value="City"> City</option>
                                            <option value="Oxford">Oxford</option>
                                        </select>
                                    </div>
                                    <div class="glodex-search-field d-flex align-items-center">
                                        <input
                                            type="search"
                                            name="glodex-country-search"
                                            id="glodex-country-search"
                                            class="form-control form-control-sm mb-0"
                                            placeholder="Search"

                                        >
                                        <button type="submit" class="btn btn-sm glodex-blue-btn"><i class="ti ti-search" style="font-size: 1.3rem;"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    @foreach($universities as  $university)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                            <div class="university-card border rounded-4 shadow-md py-3 px-2 position-relative h-100">
                                <!-- 3-dot Dropdown -->
                                <div class="btn-group glodex-custom-3dot-dropdown position-absolute top-0 end-0 m-2">
                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Courses</a></li>
                                        <li><a class="dropdown-item" href="{{ route('university_details', $university->id) }}">University Details</a></li>
                                        <li><a class="dropdown-item" href="{{ route('edit_university', $university->id) }}">Edit</a></li>
                                        <li>
                                            <a class="dropdown-item"  href="#" onclick="confirmDelete({{ $university->id }})">Delete</a>
                                            <form id="delete-university-form-{{ $university->id }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="university-card-header d-flex align-items-center gap-1 pb-3">
                                    <div class="university-logo flex-shrink-0">
                                        <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" alt="Logo" class="img-fluid">
                                    </div>
                                    <div class="text-end flex-grow-1">
                                        <h5 class="university-title mb-0">{{ $university->university_name }}</h5>
                                        <p class="university-subtitle mb-0 text-muted">{{ $university->country->country_name ?? 'Not added' }} • {{ $university->university_city ?? 'Not added' }}</p>
                                    </div>
                                </div>
                                <div class="card-body-custom">
                                    <div class="contact-item py-1 d-flex align-items-center">
                                        <div class="contact-icon me-2">
                                            <i class="ti ti-mail-filled"></i>
                                        </div>
                                        <p class="contact-text mb-0">{{ $university->admission_email ?? 'Not added' }}</p>
                                    </div>
                                    <div class="contact-item py-1 d-flex align-items-center">
                                        <div class="contact-icon me-2">
                                            <i class="ti ti-phone-filled"></i>
                                        </div>
                                        <p class="contact-text mb-0">{{ $university->admission_phone ?? 'Not added' }}</p>
                                    </div>
                                    <div class="contact-item py-1 d-flex align-items-center">
                                        <div class="contact-icon me-2">
                                            <i class="ti ti-world-www"></i>
                                        </div>
                                        <p class="contact-text mb-0">{{ $university->website_link ?? 'Not added'}}</p>
                                    </div>
                                    <div class="contact-item py-1 d-flex align-items-center">
                                        <div class="contact-icon me-2">
                                            <i class="ti ti-map-pin-filled"></i>
                                        </div>
                                        <p class="contact-text mb-0">{{ $university->address ?? 'Not added'}}</p>
                                    </div>
                                    <div class="contact-item py-1 d-flex align-items-center">
                                        <div class="contact-icon me-2">
                                            <i class="ti ti-currency-dollar"></i>
                                        </div>
                                        <span class="badge-commission">Commission {{ $university->commission_for_us ?? 'Not added'}}</span>
                                    </div>
                                    <button class="btn btn-sm py-2 btn-gradient w-100 mt-3">
                                        <i class="ti ti-graduation-cap-filled me-2"></i>
                                        View Courses
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    const form = document.getElementById(`delete-university-form-${id}`);
                    form.action = "{{ route('delete_university', '') }}/" + id;
                    form.submit();
                }
            });
        }
    </script>
@endpush
