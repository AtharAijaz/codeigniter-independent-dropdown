<!DOCTYPE html>
<html>
<head>
  <title>Insert form</title>
</head>
  <body>
    <?php echo validation_errors(); ?>
    
    <!--<?php echo form_open('form'); ?>-->
    <form method="post" action="<?php echo base_url('subcategories/update/'.$subcategory->id);?>"> 
    <!--<form method="post" action="<?php echo base_url('subcategories/insert_subcategories');?>">-->
    <!--<form method="post" action="/codeigniter/categories/insert_categories">-->
      <table>
        <tr>
          <th>Enter SubCategory Name</th>
          <td><input type="text" name="name" class="form-control" value="<?php echo $subcategory->name; ?>"></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" name="Submit" value="Store"></td>
        </tr>
      </table>
  </body>
</html>