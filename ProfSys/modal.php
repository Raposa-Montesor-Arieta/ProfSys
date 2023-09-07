<div class="modal fade" id="deleteModal<?php echo $row['prof_id'];?>" tabindex="-1" role="dialog"> tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this professor?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <!-- Add a link or button for the delete action here -->
        <!-- Example using a link with a query parameter -->
        <a href= "delete.php?p_id=<?php echo $id; ?>">DELETE</a>
      </div>
    </div>
  </div>
</div>
