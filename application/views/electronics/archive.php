<div class="container"> 
  <h2>Archive</h2><br>
  <div class="container">
  <br>

    <!-- dropdown with a search feature -->

  <p class="drop">
    <form action="<?php echo base_url() ?>main/search"  enctype="multipart/form-data"  class="form-group drop" method="POST">
      <input type="text" name="search">
      <button type="submit" class="btn btn-primary btn-small" name="submit">Search</button>
      <br><br>
    </form>
  </p>
  <table class="table table-hover">
    <th>Name</th>

    <th>Options</th>

    <!-- read data sent as assoc array -->

    <?php foreach ($read as $info): ?>
    <tr>
      <td><?php echo $info['name'] ?></td>
      
      <td><a href="<?php echo base_url().'electronics/edit?id='.$info['id']; ?>">Edit</a>
        &nbsp<a href="<?php echo base_url().'electronics/delete?id='.$info['id']; ?>" style="color:red">Delete</a></td>
    </tr>
    <?php endforeach ?>
  </table>

  </div>
</div>