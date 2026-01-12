{{-- ================= EDIT ROLE MODAL ================= --}}
<form action="{{ route('update_role') }}" method="POST">
    @csrf
    <input type="hidden" name="role_id" id="editRoleId">
    <div class="modal fade" id="editRoleModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Permission For This Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-4">
                        <label class="form-label">Role Name</label>
                        <input type="text" name="role_name" class="form-control" id="editRoleName" readonly>
                    </div>

                    <h6 class="fw-semibold mb-2">Permissions</h6>

                    <div class="d-flex justify-content-start flex-wrap">
                        <div class="form-check me-4">
                            <input class="form-check-input permission-checkbox" type="checkbox" name="permissions[]" value="View Country" id="editViewCountry">
                            <label class="form-check-label">View</label>
                        </div>

                        <div class="form-check me-4">
                            <input class="form-check-input permission-checkbox" type="checkbox" name="permissions[]" value="Edit Country" id="editEditCountry">
                            <label class="form-check-label">Edit</label>
                        </div>
                        <div class="form-check me-4">
                            <input class="form-check-input permission-checkbox" type="checkbox" name="permissions[]" value="Create Country" id="editCreateCountry">
                            <label class="form-check-label">Create</label>
                        </div>

                        <div class="form-check me-4">
                            <input class="form-check-input permission-checkbox" type="checkbox" name="permissions[]" value="Delete Country" id="editDeleteCountry">
                            <label class="form-check-label">Delete</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Role</button>
                </div>

            </div>
        </div>
    </div>
</form>



