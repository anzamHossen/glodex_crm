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
                       <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                            <h4 class="header-title mb-0">Courses</h4>
                            <div class="d-flex">
                                <a href="{{ route('add_new_course') }}" class="btn btn-sm btn-gradient">
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
                                            <th>Course Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as  $course)
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
                            </div> <!-- end table-responsive-->



                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="program-card">
                        <div class="card-header-section">
                            <h1 class="program-title">Master of Business Administration</h1>
                            <div class="university-info">
                                <div class="university-details">
                                    <h3>Stanford University</h3>
                                    <p><i class="bi bi-geo-alt-fill"></i> United States</p>
                                </div>
                                <div class="university-logo">
                                    <img src="{{ asset('back-end/assets/images/dr-profile/image-upload.jpg') }}" alt="Stanford University Logo">
                                </div>
                            </div>
                        </div>

                        <div class="card-body-section">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="bi bi-mortarboard-fill"></i> Program Level
                                    </div>
                                    <div class="info-value">Master's</div>
                                </div>

                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="bi bi-calendar-check"></i> Intake Month
                                    </div>
                                    <div class="info-value">September</div>
                                </div>

                                <div class="info-item highlight">
                                    <div class="info-label">
                                        <i class="bi bi-cash-coin"></i> Application Fees
                                    </div>
                                    <div class="info-value price">$275</div>
                                </div>

                                <div class="info-item highlight">
                                    <div class="info-label">
                                        <i class="bi bi-currency-dollar"></i> Tuition Fees/Year
                                    </div>
                                    <div class="info-value price">$82,000</div>
                                </div>

                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="bi bi-clock-history"></i> Program Length
                                    </div>
                                    <div class="info-value">2 Years</div>
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
