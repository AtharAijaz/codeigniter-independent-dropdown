<!DOCTYPE html>
<html>
<head>
  <title>Insert form</title>
</head>
  <body>
    <?php echo validation_errors(); ?>
    
    <!--<?php echo form_open('form'); ?>-->
    <form method="post" action="<?php echo base_url('categories/insert_categories');?>">
    <!--<form method="post" action="/codeigniter/categories/insert_categories">-->
      <table>
        <tr>
          <th>Enter Category Name</th>
          <td><input type="text" name="name" value="<?php echo set_value('name'); ?>" ></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" name="Submit" value="Store"></td>
        </tr>
      </table>
  </body>
</html>