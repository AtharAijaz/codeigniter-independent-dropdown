<!DOCTYPE html>
<html>
<head>
  <title>List Categories</title>
  <script type="text/javascript">
    function show_confirm(action, gotoid) {
      if(action=="edit")
        var conf=confirm("Do you really want to edit?");
      else
        var conf=confirm("Do you really want to delete?");
      if (conf==true){
        window.location="<?php echo base_url();?>subcategories/"+action+"/"+gotoid;
      }
    } 
  </script>
</head>
  <body>
    <table  width="800" border="1" cellpadding="10">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Subcategory Name</th>
        <th scope="col">Category_id</th>
        <!--<th scope="col">Subategory Name</th>-->
        <th scope="col" colspan="2">Action</th>
      </tr>
      <?php foreach ($subcategory_list->result()as $row) {?>
      <tr>
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->category_id; ?></td>
    <td width="40" align="left" ><a href=<?php echo base_url().'subcategories/edit/'.$row->id; ?> >Edit</a></td>
    <td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $row->id;?>)">Delete</a></td>
  </tr>
  <?php 
  } 
  ?>
  <td colspan="7" align="right"> <a href=<?php echo base_url().'subcategories/add_form/'.$row->id;?> >Add Subategory</a></td>  
    </table>

  </body>
</html>