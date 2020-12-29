<form class="form" method="POST" action="<?php echo base_url() ?>electronics/new_data"  enctype="multipart/form-data">


  <div class="form-group">
    <label for="name">Name: </label>
    <input type="text" class="form-control" id="fname" placeholder="category" name="name">
    <small style="color:red">*Letters and spaces only</small>
  </div>
 

  <button type="submit" class="btn btn-primary" name="post">Submit</button>

</form>
</div>