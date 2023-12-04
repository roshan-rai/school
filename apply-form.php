<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newStudentModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newStudentModal" tabindex="-1" aria-labelledby="newStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newStudentModalLabel">Hogwarts Admission Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" onsubmit="submitForm(event)">
                    <!-- Your form fields... -->
                    <div class="mb-3">
                        <label for="sName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="sName" name="sName" required>
                    </div>
                    <!-- ... other form fields ... -->

                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-success">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function submitForm(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Display congratulations message
        alert("Congratulations! Your form has been submitted. You will receive an Owl soon from Hogwarts Admissions.");

        document.body.style.backgroundImage = "url('paperbackground.jpg')";
        document.body.style.backgroundSize = "cover";

        // Redirect to the specified URL
        window.location.href = "http://school.roshan.oucreate.com/";
    }
</script>
