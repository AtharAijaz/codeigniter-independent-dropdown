<?php  
class Product_model extends CI_Model{
  public function get_products(){
    $query = $this->db->get('products');
    return $query;
  }

  public function insert_product_to_table($data){
    $data=array('name' => $this->input->post('name'),
                'category_id' => $this->input->post('category_id'),
                'subcategory_id' => $this->input->post('subcategory_id'));
    return $this->db->insert('products', $data);
  }

  public function find_products($id){
    return $this->db->get_where('products', array('id' => $id))->row();
  }

  public function update_product($id){
    $data=array('name' => $this->input->post('name'),
                 'category_id' => $this->input->post('category_id'),
                 'subcategory_id' => $this->input->post('subcategory_id'));
    if($id==0){
      return $this->db->insert('products',$data);
    }else{
      $this->db->where('id',$id);
      return $this->db->update('products',$data);
    }        
  }

  public function delete_product($id){
    $this->db->where('id', $id);
    $this->db->delete('products');
  }

 /*$response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('city');
    $response = $q->result_array();

    return $response;*/



/*  $this->db->select('id'); // 
$this->db->from('products');
$this->db->join('categories', 'categories.name = products.category_id');
$query = $this->db->get()
*/

/*function get_all_category($id){
    $this->db->query('SELECT name FROM subcategories');
    //print_r($query); die;
    return $this->db->query('subcategories');
}*/
function get_all_category(){
  $response = array();
  $this->db->select('*');
  $q = $this->db->get('categories');
  $response = $q->result_array();
  return $response;
  }

  function get_all_subcategory(){
  $response = array();
  $this->db->select('*');
  $q = $this->db->get('subcategories');
  $response = $q->result_array();
  return $response;
  }


 // Get subcategory
  /*public function get_all_subcategory($postData){
    $response = array();
 
    // Select record
    $this->db->select('id,name');
    $this->db->where('category_id', $postData['categories.id']);
    $q = $this->db->get('subcategories');
    $response = $q->result_array();

    return $response;
  }*/




 /* $this->db->select('id');
$this->db->from('products');
$this->db->join('categories', 'categories.name = products.category_id');
print_r($query); die;
$query = $this->db->get();*/
/*function get_all_subcategory(){
    $query = $this->db->query('SELECT name FROM subcategories');
    return $this->db->query($query)->result();
}

}*/

   /*function get_all_subcategory(){
      $query = $this->db->query('SELECT name FROM categories');
      return $this->db->query($query)->result();
  }*/
/* 
 function get_all_category(){
    $query = $this->db->get('categories');
    return $query;  
  }
  
  function get_all_subcategory(){
    $query = $this->db->get('subcategories');
    return $query;  
  }
*/


}
?>