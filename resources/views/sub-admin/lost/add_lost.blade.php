{{-- add new lost and found --}}
<div class="modal fade" id="addNewLostModal" tabindex="-1" aria-labelledby="addNewLostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewLostModalLabel">Add New Lost</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addLostForm" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="lostType" class="form-label">Object type:</label>
                            <input type="text" class="form-control" id="lostType" name="object_type" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="middleName" class="form-label">Middle Initial:</label>
                            <input type="text" class="form-control" id="middleName" placeholder="Optional" name="middle_name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="lostCourse" class="form-label">Role:</label>
                            <input type="text" class="form-control" id="lostCourse" name="course" required>
                        </div>
                        <div class="mb-3">
                            <label for="lostImage" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="lostImage" name="object_img">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
