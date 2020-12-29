<table>  
  <tbody>  
   <tr>  
      <td>Id</td>  
      <td>Name</td>  
   </tr>  
  <?php  
  foreach ($readSelect->result() as $row)  
  { 
    ?><tr>  
    <td><?php echo $row->id;?></td>  
    <td><?php echo $row->name;?></td>  
    </tr>  
    <?php 
  }  
 ?>  
  </tbody>  
</table>  