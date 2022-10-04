<!-- Modal -->
<div class="modal fade" id="addProject" tabindex="-1" aria-labelledby="addProjectLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProjectLabel">Add Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <label class="form-label">Project Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="date" class="form-control" name="deadline" id="deadline">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="client" id="client">
                        </div>
                    </div>
                    <div class="col-12 d-grid">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>