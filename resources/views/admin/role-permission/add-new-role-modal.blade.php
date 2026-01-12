{{-- ================= ADD / EDIT ROLE MODAL ================= --}}
<form class="row g-6" method="POST" action="{{ route('save_role') }}">
@csrf
    <div class="modal fade" id="rolePermissionModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Role</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    {{-- Role Name --}}
                    <div class="mb-4">
                        <label class="form-label">Role Name</label>
                        <input type="text" name="role_name" class="form-control" required>
                    </div>

                    {{-- Country Permissions --}}
                    <h5 class="fw-semibold mb-2">Country Management</h5>
                    <div class="d-flex justify-content-start flex-wrap">

                        <div class="form-check me-4">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="View Country">
                            <label class="form-check-label">View</label>
                        </div>

                        <div class="form-check me-4">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="Edit Country">
                            <label class="form-check-label">Edit</label>
                        </div>

                        <div class="form-check me-4">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="Create Country">
                            <label class="form-check-label">Create</label>
                        </div>

                        <div class="form-check me-4">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="Delete Country">
                            <label class="form-check-label">Delete</label>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save Role</button>
                </div>
            </div>
        </div>
    </div>
</form>


