@extends('layouts.app')
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
                                <a href="{{ route('add_new_course') }}" class="btn btn-sm btn-primary">
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