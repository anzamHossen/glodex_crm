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

                <div class="modal-body px-0">
                    <div class="mb-3 px-3">
                        <label class="form-label">Role Name</label>
                        <input type="text" name="role_name" class="form-control" id="editRoleName" readonly>
                    </div>


                    <div class="pb-2 border-bottom px-3 d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">University Management</h5>
                        <div class="d-flex justify-content-start flex-wrap">

                            <div class="form-check me-4">
                                <input id="universityView" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="View Country">
                                <label for="universityView" class="form-check-label">View</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="universityEdit" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Edit Country">
                                <label for="universityEdit" class="form-check-label">Edit</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="universityCreate" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="Create Country">
                                <label for="universityCreate" class="form-check-label">Create</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="universityDelete" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="Delete Country">
                                <label for="universityDelete" class="form-check-label">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 pt-2 border-bottom px-3 d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">Country Management</h5>
                        <div class="d-flex justify-content-start flex-wrap">

                            <div class="form-check me-4">
                                <input id="viewCountry01" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="View Country">
                                <label for="viewCountry01" class="form-check-label">View</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="editCountry01" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Edit Country">
                                <label for="editCountry01" class="form-check-label">Edit</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="createCountry01"  class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Create Country">
                                <label for="createCountry01" class="form-check-label">Create</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="deleteCountry01" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Delete Country">
                                <label for="deleteCountry01" class="form-check-label">Delete</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer pt-0 border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Role</button>
                </div>

            </div>
        </div>
    </div>
</form>
