
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAwardModal">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editAwardModal" tabindex="-1" aria-labelledby="editAwardModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editAwardModalLabel">Edit Awards</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="aName" class="form-label">Award Name</label>
              <input type="text" class="form-control" id="aName" name="aName">
            </div>
                <div class="mb-3">
              <label for="sHouse" class="form-label">House</label>
                  <?php $houseList=selectHousesForInput(); 
                        $selectedHouse = 0;
                  include "view-house-input-list.php"; ?>
            </div>
                  <input type="hidden" name="aid" value="<?php echo $award['award_id']; ?>">
                <input type="hidden" name="actionType" value="AddAward">
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
