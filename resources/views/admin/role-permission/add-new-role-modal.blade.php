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

                <div class="modal-body px-0">

                    {{-- Role Name --}}
                    <div class="mb-3 px-3">
                        <label class="form-label">Role Name</label>
                        <input type="text" name="role_name" class="form-control" required>
                    </div>

                    {{-- Country Permissions --}}

                    <div class="d-flex justify-content-between align-items-center flex-wrap pb-2 border-bottom px-3">
                        <h5 class="fw-semibold mb-0">Administrator Access</h5>
                        <div class="form-check me-4">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="View Country">
                            <label class="form-check-label">Select All</label>
                        </div>
                    </div>
                    <div class="pb-2 pt-2 border-bottom px-3 d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">Country Management</h5>
                        <div class="d-flex justify-content-start flex-wrap ">

                            <div class="form-check me-4">
                                <input id="viewCountry" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="View Country">
                                <label for="viewCountry" class="form-check-label">View</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="editCountry" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Edit Country">
                                <label for="editCountry" class="form-check-label">Edit</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="createCountry" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Create Country">
                                <label for="createCountry" class="form-check-label">Create</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="deleteCountry" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Delete Country">
                                <label for="deleteCountry" class="form-check-label">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 pt-2 border-bottom px-3 d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">University Management</h5>
                        <div class="d-flex justify-content-start flex-wrap">

                            <div class="form-check me-4">
                                <input id="viewUniversity1" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="View Country">
                                <label for="viewUniversity1" class="form-check-label">View</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="editUniversity1" class="form-check-input" type="checkbox" name="permissions[]"
                                    value="Edit Country">
                                <label for="editUniversity1" class="form-check-label">Edit</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="createUniversity1" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="Create Country">
                                <label for="createUniversity1"  class="form-check-label">Create</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="deleteUniversity1" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="Delete Country">
                                <label for="deleteUniversity1" class="form-check-label">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 pt-2 border-bottom px-3 d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">Institute Management</h5>
                        <div class="d-flex justify-content-start flex-wrap">

                            <div class="form-check me-4">
                                <input id="viewInstitute" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="View Country">
                                <label for="viewInstitute" class="form-check-label">View</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="editInstitute" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="Edit Country">
                                <label for="editInstitute" class="form-check-label">Edit</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="createInstitute" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="Create Country">
                                <label for="createInstitute" class="form-check-label">Create</label>
                            </div>

                            <div class="form-check me-4">
                                <input id="deleteInstitute" class="form-check-input" type="checkbox"
                                    name="permissions[]" value="Delete Country">
                                <label for="deleteInstitute" class="form-check-label">Delete</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer border-0 pt-0">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save Role</button>
                </div>
            </div>
        </div>
    </div>
</form>
