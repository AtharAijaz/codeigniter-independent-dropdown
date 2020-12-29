<!DOCTYPE html>
<html>
<head>
  <title>edit</title>
</head>
  <body>
    <?php echo validation_errors(); ?>
    <!--<form method="post" action="/codeigniter/categories/update">-->
    <form method="post" action="<?php echo base_url('products/update/'.$product->id);?>">
      <table> 
        <tr>
          <th>Category Name</th>
          <td><input type="text" name="name" class="form-control" value="<?php echo $product->name; ?>"></td>
        </tr>
        <tr>
          <th>Category id</th>
          <td><input type="text" name="category_id" class="form-control" value="<?php echo $product->category_id; ?>"></td>
        </tr>
        <tr>
          <th>Subcategory Name</th>
          <td><input type="text" name="subcategory_id" class="form-control" value="<?php echo $product->subcategory_id; ?>"></td> 
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

