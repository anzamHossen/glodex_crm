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
                                <a href="{{ route('add_new_university') }}" class="btn btn-sm btn-gradient">
                                    <i class="ti ti-plus" style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>
                                    Add New
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table id="dataTable" class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Status</th>
                                            <th>university Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($universities as  $university)
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
                                                            <a href="{{ route('edit_university', $university->id) }}" class="dropdown-item d-flex align-items-center gap-1" title="Login As">
                                                                <i class="ti ti-edit ti-md"></i> <span>Edit</span>
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                            onclick="confirmDelete({{ $university->id }})"
                                                            class="dropdown-item d-flex align-items-center gap-1"
                                                            title="Delete">
                                                                <i class="ti ti-trash ti-md"></i> <span>Delete</span>
                                                            </a>
                                                            <form id="delete-university-form-{{ $university->id }}" method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($university->status == 1)
                                                        <span class="badge bg-primary badge bg-primary px-2 py-1 fs-11 me-2">Active</span>
                                                    @else
                                                        <span class="badge bg-success badge bg-primary px-2 py-1 fs-11 me-2">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>{{ $university->university_name ?? 'Not Added' }}</td>
                                                <td>{{ $university->admission_email ?? 'Not Added' }}</td>
                                                <td>{{ $university->admission_phone ?? 'Not Added' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div>
                    </div>
                </div>
            </div>
            {{-- university card --}}
            <div class="row">
                <div class="col-12 col-sm-2 col-md-2 col-lg-4 col-xl-3">
                    <div class="university-card border rounded-4 shadow-md h-full py-3 px-2">
                        <div class="university-card-header pb-3 d-flex align-items-center justify-content-between  ">
                            <div class="university-logo">
                                <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" alt="Logo" class="img-fluid">
                            </div>
                            <div class="text-end">
                                <h1 class="university-title mb-0" >University Name</h1>
                                <p class="university-subtitle mb-0">United States • New York</p>
                            </div>
                        </div>
                        {{-- <div class="card-body-custom">
                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <p class="contact-text mb-0">info@university.edu</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <p class="contact-text mb-0">+1234567890</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="bi bi-globe"></i>
                                </div>
                                <p class="contact-text mb-0">www.university.edu</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <p class="contact-text mb-0">123 University St., City</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div>
                                    <span class="badge-commission">Commission</span>
                                </div>
                            </div>
                            <button class="courses-btn btn-gradient">
                                <i class="bi bi-mortarboard-fill me-2"></i>
                                View Courses
                            </button>
                        </div> --}}
                        <div class="card-body-custom">
                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="ti ti-mail-filled"></i>
                                </div>
                                <p class="contact-text mb-0">info@university.edu</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="ti ti-phone-filled"></i>
                                </div>
                                <p class="contact-text mb-0">+1234567890</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="ti ti-world-www"></i>
                                </div>
                                <p class="contact-text mb-0">www.university.edu</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="ti ti-map-pin-filled"></i>
                                </div>
                                <p class="contact-text mb-0">123 University St., City</p>
                            </div>

                            <div class="contact-item py-1 d-flex align-items-center">
                                <div class="contact-icon">
                                    <i class="ti ti-currency-dollar"></i>
                                </div>
                                <div>
                                <span class="badge-commission">Commission</span>
                                </div>
                            </div>

                            <button class="btn btn-sm py-2 btn-gradient w-100 mt-3">
                                <i class="ti ti-graduation-cap-filled me-2"></i>
                                View Courses
                            </button>
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
                    const form = document.getElementById(`delete-university-form-${id}`);
                    form.action = "{{ route('delete_university', '') }}/" + id;
                    form.submit();
                }
            });
        }
    </script>
@endpush
