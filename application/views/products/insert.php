<!DOCTYPE html>
<html>
<head>
  <title>Insert form</title>
</head>
  <body>
    <?php echo validation_errors(); ?>
    
    <!--<?php echo form_open('form'); ?>-->
    <form method="post" action="<?php echo base_url('products/insert_products');?>">
    <!--<form method="post" action="/codeigniter/categories/insert_categories">-->
     
      <table>
      <!-- Categories -->
     <tr>
       <td>category</td>
       <td> 
         <select class="form_control" name="category_id" id='category_id'>
           <option>-- Select category --</option>
           <?php
           foreach($categories as $category){
             echo "<option value='".$category['id']."'>".$category['name']."</option>";
           }
           ?>
          </select>
        </td>
      </tr>

    <!-- Subategories -->
      <tr>
        <td>Subategories</td>
        <td>
          <select class="form_control" name="subcategory_id" id='subcategory_id'>
            <option>-- Select Subategory --</option>
            <?php
             foreach($subcategories as $subcategory){
               echo "<option value='".$subcategory['id']."'>".$subcategory['name']."</option>";
             }
             ?>
          </select>
        </td>
      </tr>
    <tr>
        <th>Enter Product Name</th>
        <!-- <td><input type="text" name="name" value="<?php echo set_value('name'); ?>" ></td> -->
        <td><input type="text" class="form_control" name="name" placeholder="Product Name"  ></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" name="Submit" value="Store"></td>
    </tr>
  </table>
</form>

  </body>
</html>