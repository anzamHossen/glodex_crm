@extends('layouts.app')
@section('title', '| Roles')

@section('content')
    <div class="wrapper">
        <div class="page-container">
            <div class="row mt-2">
                <div class="col-xl-12">
                    <div class="card">

                        {{-- HEADER --}}
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Roles</h4>
                            <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#assignRoleModal">
                                <i class="ti ti-plus me-1"></i> Assign Role
                            </button>
                        </div>

                        {{-- BODY --}}
                        <div class="card-body">
                            <div class="row g-4">

                                @php
                                    $roles = [
                                        'Superadmin',
                                        'BDM Admin',
                                        'Application Team',
                                        'B2C Admin',
                                        'Course Creator',
                                    ];
                                @endphp

                                {{-- ROLE CARDS --}}
                                @foreach ($roles as $role)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card h-100 shadow-sm border-start border-primary mb-0">
                                            <div class="card-body p-x-4 py-3">
                                                <h5 class="fw-semibold mb-1">{{ $role }}</h5>

                                                {{-- EDIT ROLE --}}
                                                <div class="d-flex align-items-center justify-content-between ">
                                                    <a href="javascript:void(0)" class="text-primary edit-role-btn"
                                                        data-bs-toggle="modal" data-bs-target="#rolePermissionModal"
                                                        data-role="{{ $role }}">
                                                        Edit Role
                                                    </a>
                                                    <i class="ti ti-copy ti-md text-heading"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- ADD NEW ROLE CARD --}}
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 d-flex align-items-center justify-content-center shadow-sm border-start border-primary mb-0"
                                        style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#rolePermissionModal">
                                        <div class="card-body w-100 p-x-4 py-3 ">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div style="font-size:32px">👩‍💼</div>
                                                <button class="btn btn-primary">Add New Role</button>
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

    {{-- ================= ASSIGN ROLE MODAL ================= --}}
    <div class="modal fade" id="assignRoleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Assign Role</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select class="form-select">
                            @foreach ($roles as $role)
                                <option>{{ $role }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">User</label>
                        <select class="form-select">
                            <option>John Doe</option>
                            <option>Jane Smith</option>
                            <option>Bob Johnson</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </div>

    {{-- ================= ADD / EDIT ROLE MODAL ================= --}}
    <div class="modal fade" id="rolePermissionModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <div>
                        <h5 class="modal-title" id="permissionModalTitle">Add New Role</h5>
                        <small class="text-muted">Set role permissions</small>
                    </div>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    {{-- ROLE NAME --}}
                    <div class="mb-4">
                        <label class="form-label fw-medium">Role Name</label>
                        <input type="text" class="form-control" id="roleNameInput" placeholder="Enter role name">
                    </div>

                    {{-- PERMISSIONS --}}
                    <h6 class="fw-semibold mb-3">Role Permissions</h6>

                    @php
                        $permissions = [
                            'Partner Management' => ['View', 'Edit', 'Create', 'Delete'],
                            'Student Management' => ['View', 'Edit', 'Create', 'Delete'],
                            'Partner Student Management' => ['View', 'Edit', 'Delete'],
                            'Counselor Management' => ['View', 'Edit', 'Create', 'Delete'],
                            'Staff Management' => ['View', 'Edit', 'Create', 'Delete'],
                            'Lead Management' => ['View', 'Create', 'Edit', 'Delete'],
                            'My Lead' => ['View'],
                            'Accounting Management' => ['View'],
                        ];
                    @endphp

                    @foreach ($permissions as $group => $perms)
                        <div class="border-bottom pb-3 mb-3">
                            <div class="row align-items-center">
                                <div class="col-md-4 fw-medium">{{ $group }}</div>
                                <div class="col-md-8">
                                    <div class="row">
                                        @foreach ($perms as $perm)
                                            <div class="col-6 col-md-3 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input permission-checkbox" type="checkbox">
                                                    <label class="form-check-label">{{ $perm }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="modal-footer bg-light">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="permissionSubmitBtn">Submit</button>
                </div>

            </div>
        </div>
    </div>
@endsection

{{-- ================= PAGE JS ================= --}}
@push('page-js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const modalTitle = document.getElementById('permissionModalTitle');
            const submitBtn = document.getElementById('permissionSubmitBtn');
            const roleInput = document.getElementById('roleNameInput');
            const checkboxes = document.querySelectorAll('.permission-checkbox');

            function resetPermissionModal() {
                modalTitle.innerText = 'Add New Role';
                submitBtn.innerText = 'Submit';
                roleInput.value = '';
                checkboxes.forEach(cb => cb.checked = false);
            }

            // ADD NEW ROLE
            document.querySelectorAll('[data-bs-target="#rolePermissionModal"]:not(.edit-role-btn)')
                .forEach(btn => btn.addEventListener('click', resetPermissionModal));

            // EDIT ROLE
            document.querySelectorAll('.edit-role-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    modalTitle.innerText = 'Edit Role';
                    submitBtn.innerText = 'Update';
                    roleInput.value = this.dataset.role;
                });
            });

        });
    </script>
@endpush
