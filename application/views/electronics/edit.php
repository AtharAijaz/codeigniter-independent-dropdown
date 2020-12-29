<div class="container">
  <h2>Update</h2><br>
  <?php foreach ($edit_info as $info):?>
  <form class="form-inline" method="POST" action="<?php echo base_url().'electronics/update?id='.$info['id']; ?>"enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name: </label>
    <input type="text" class="form-control" id="name" placeholder="Category" name="fname" value="<?php echo $info['name']?>">
  </div>
   <?php endforeach?>
  </form>

</div>   