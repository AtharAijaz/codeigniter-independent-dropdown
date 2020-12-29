<!DOCTYPE html>
<html>
<head>
  <title>edit</title>
</head>
  <body>
    <?php echo validation_errors(); ?>
    <!--<form method="post" action="/codeigniter/categories/update">-->
    <form method="post" action="<?php echo base_url('categories/update/'.$category->id);?>"> 
      
      <table>
        <tr>
          <th>Enter Category Name</th>
          <td><input type="text" name="name" class="form-control" value="<?php echo $category->name; ?>"></td>
        </tr>
        <tr>
          <th></th>
          <td>
          <input type="submit" name="Submit" value="Store">
          </td>
        </tr>
      </table>
      
    </form>

  </body>
</html>

