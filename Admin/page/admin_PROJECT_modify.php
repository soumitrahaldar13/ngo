

<div class="modal fade" id="update_modal<?php echo $row['id']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="admin_PROJECT_update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Update PROJECT</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="form-group">
              <label>PROJECT NAME</label>
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>DATE</label>
              <input type="date" name="date" value="<?php echo $row['date'] ?>" class="form-control" required="required" />
            </div>
            <div class="form-group">
              <label>IMAGE</label><br>
              <label><img src="../images/project/<?=$row['image']?>"style="width: 100px;"></label>
            </div>
            <div class="form-group">
              <label>Description 20 word's</label>
              <input type="text" name="description" value="<?php echo $row['description']?>" class="form-control" required="required"/>
            </div>
           

          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>