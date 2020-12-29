<?php  
class Subcategories extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Subcategory_model'); 
  }

  public function index(){
    $data['subcategory_list'] = $this->Subcategory_model->get_subcategories();
    $this->load->view('subcategories/show_subcategories', $data);
  }

  public function add_form(){
    //print_r($_POST); die;
    $data['categories'] = $this->Subcategory_model->get_all_category();//print_r($data); die;
    $this->load->view('subcategories/insert', $data);
  }
  public function insert_subcategories(){
   // print_r($_POST); die;
    /*$this->form_validation->set_rules('name', 'Name', 'required|is_unique[subcategories.name]',
      array(
        'required' => 'field required',
        'is_unique' => ' category exists'));
    $this->form_validation->set_rules('category_id','category_id','required');
    if ($this->form_validation->run() == FALSE) {
      $this->form_validation->set_message('insert_subcategories', 'Record already exists');
      $this->load->view('subcategories/insert');

    }else{*/
      $data['name'] = $this->input->post('name');
      $data['category_id'] = $this->input->post('category_id');
      $res = $this->Subcategory_model->insert_subcategory_to_table($data);
      redirect(base_url('subcategories'));
    //}
  }

  public function edit($id){
    $subcategory = $this->Subcategory_model->find_subcategory($id);
    $this->load->view('subcategories/edit',array('subcategory' => $subcategory));
  }


  public function update($id){
    $this->form_validation->set_rules('name', 'Name', 'required|is_unique[subcategories.name]',
      array('is_unique[subcategories.name]' => 'Error Message category exists'));
    if ($this->form_validation->run() == FALSE) {
      redirect(base_url('subcategories'));
    }
    $this->Subcategory_model->update_subcategory($id);
    redirect(base_url('subcategories'));
  } 
  public function delete($id){
  $this->Subcategory_model->delete_subcategory($id);
  $this->index();
  }
}
?>