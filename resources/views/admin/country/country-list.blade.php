@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/country/country-list.css') }}">
@endpush

@section('content')
    <!-- Begin page -->
    <div class="wrapper">
        <div class="page-container">
            <div class="row mt-2">
                <div class="col-xl-12">
                    <div class="card">
                       <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                            <h4 class="header-title mb-0">Country List</h4>
                            <div class="d-flex">
                                <a href="{{ route('add_new_country') }}" class="btn btn-sm btn-primary">
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
                                            <th>Name</th>
                                            <th>Continent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($countries as  $country)
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
                                                            <a href="{{ route('edit_country', $country->id) }}" class="dropdown-item d-flex align-items-center gap-1" title="Login As">
                                                                <i class="ti ti-edit ti-md"></i> <span>Edit</span>
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                            onclick="confirmDelete({{ $country->id }})"
                                                            class="dropdown-item d-flex align-items-center gap-1"
                                                            title="Delete">
                                                                <i class="ti ti-trash ti-md"></i> <span>Delete</span>
                                                            </a>
                                                            <form id="delete-country-form-{{ $country->id }}" method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($country->status == 1)
                                                        <span class="badge bg-primary badge bg-primary px-2 py-1 fs-11 me-2">Active</span>
                                                    @else
                                                        <span class="badge bg-success badge bg-primary px-2 py-1 fs-11 me-2">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>{{ $country->country_name ?? 'Not Added' }}</td>
                                                <td>{{ $country->countryContinent->continent_name ?? '--' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div>
                        <section class="glodex-country-list-section p-3">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="glodex-country-list-item position-relative h-100 bg-white border rounded-4 p-3 shadow-sm">
                                        <div class="glodex-country-list-img position-relative overflow-hidden">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-4" alt="image">
                                        <div class="glodex-country-list-img-overlay"></div>
                                        <div class="glodex-country-list-img-sm">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        </div>
                                        <div class="glodex-country-list-content text-center mt-3">
                                            <h3 class="mb-1 fw-bold text-dark">United States</h3>
                                            <span class="  d-block mb-2">North America</span>
                                        <div class="glodex-country-info d-flex align-items-center justify-content-between text-center px-3">
                                            <div>
                                                <p class="mb-0">Total University</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                            <div>
                                                <p class="mb-0">Total Courses</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                        </div>
                                            <button class="btn btn-sm btn-gradient mt-3 px-3 py-1">Active</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="glodex-country-list-item position-relative h-100 bg-white border rounded-4 p-3 shadow-sm">
                                        <div class="glodex-country-list-img position-relative overflow-hidden">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-4" alt="image">
                                        <div class="glodex-country-list-img-overlay"></div>
                                        <div class="glodex-country-list-img-sm">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        </div>
                                        <div class="glodex-country-list-content text-center mt-3">
                                            <h3 class="mb-1 fw-bold text-dark">United States</h3>
                                            <span class="  d-block mb-2">North America</span>
                                        <div class="glodex-country-info d-flex align-items-center justify-content-between text-center px-3">
                                            <div>
                                                <p class="mb-0">Total University</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                            <div>
                                                <p class="mb-0">Total Courses</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                        </div>
                                            <button class="btn btn-sm btn-gradient mt-3 px-3 py-1">Active</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="glodex-country-list-item position-relative h-100 bg-white border rounded-4 p-3 shadow-sm">
                                        <div class="glodex-country-list-img position-relative overflow-hidden">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-4" alt="image">
                                        <div class="glodex-country-list-img-overlay"></div>
                                        <div class="glodex-country-list-img-sm">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        </div>
                                        <div class="glodex-country-list-content text-center mt-3">
                                            <h3 class="mb-1 fw-bold text-dark">United States</h3>
                                            <span class="  d-block mb-2">North America</span>
                                        <div class="glodex-country-info d-flex align-items-center justify-content-between text-center px-3">
                                            <div>
                                                <p class="mb-0">Total University</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                            <div>
                                                <p class="mb-0">Total Courses</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                        </div>
                                            <button class="btn btn-sm btn-gradient mt-3 px-3 py-1">Active</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="glodex-country-list-item position-relative h-100 bg-white border rounded-4 p-3 shadow-sm">
                                        <div class="glodex-country-list-img position-relative overflow-hidden">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-4" alt="image">
                                        <div class="glodex-country-list-img-overlay"></div>
                                        <div class="glodex-country-list-img-sm">
                                            <img src="{{ asset('back-end/assets/images/flags/us.svg') }}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        </div>
                                        <div class="glodex-country-list-content text-center mt-3">
                                            <h3 class="mb-1 fw-bold text-dark">United States</h3>
                                            <span class="  d-block mb-2">North America</span>
                                        <div class="glodex-country-info d-flex align-items-center justify-content-between text-center px-3">
                                            <div>
                                                <p class="mb-0">Total University</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                            <div>
                                                <p class="mb-0">Total Courses</p>
                                                <p class="mb-0 fw-semibold">150</p>
                                            </div>
                                        </div>
                                            <button class="btn btn-sm btn-gradient mt-3 px-3 py-1">Active</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
                    // Select the correct form for this country
                    const form = document.getElementById(`delete-country-form-${id}`);
                    // Set action using Laravel route helper
                    form.action = "{{ route('delete_country', '') }}/" + id;
                    form.submit();
                }
            });
        }
    </script>
@endpush
