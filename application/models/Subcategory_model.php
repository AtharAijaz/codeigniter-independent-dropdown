<?php  

class Subcategory_model extends CI_Model{
  public function  get_subcategories(){
    $query = $this->db->get('subcategories');
    return $query;
  }

  public function insert_subcategory_to_table($data){
     $data=array('name' => $this->input->post('name'),
                  'category_id' => $this->input->post('category_id'));
    return $this->db->insert('subcategories', $data);
  }

  public function find_subcategory($id){
  return $this->db->get_where('subcategories', array('id' => $id))->row();
  }

public function update_subcategory($id){
    $data=array('name' => $this->input->post('name'));
    if($id==0){
      return $this->db->insert('subcategories',$data);
    }else{
      $this->db->where('id',$id);
      return $this->db->update('subcategories',$data);
  }        
}

public function delete_subcategory($id){
  $this->db->where('id', $id);
  $this->db->delete('subcategories');
} 

function get_all_category(){
  $response = array();
  $this->db->select('*');
  $q = $this->db->get('categories');
  $response = $q->result_array();
  //print_r($response);
  return $response;

  }
 
}
?>


