<button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://school.roshan.oucreate.com/'">Back to Main Page</button>

<!-- Modal -->
<div class="modal fade" id="newStudentModal" tabindex="-1" aria-labelledby="newStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newStudentModalLabel">Hogwarts Admission Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="sName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="sName" name="sName" required>
                    </div>
                    <div class="mb-3">
                        <label for="sAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="sAddress" name="sAddress" rows="3" required></textarea>
                    </div>
                  
                    <div class="mb-3">
                        <label for="sDOB" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="sDOB" name="sDOB" required>
                    </div>
                    <div class="mb-3">
                        <label for="sClass" class="form-label">Student Class</label>
                        <input type="text" class="form-control" id="sClass" name="sClass" required>
                    </div>
                    <div class="mb-3">
                        <label for="sEssay" class="form-label">Write in 600 words why you deserve a place in Hogwarts.</label>
                        <textarea class="form-control" id="sEssay" name="sEssay" rows="6" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="sPreferredHouse" class="form-label">House you prefer to be in</label>
                        <input type="text" class="form-control" id="sPreferredHouse" name="sPreferredHouse" required>
                    </div>
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-success">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
</div>
