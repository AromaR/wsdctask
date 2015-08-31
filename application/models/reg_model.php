<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bill_model extends CI_Model {
    public function __construct()
 {
  parent::__construct();
 }
	 public function update($data){
    if(isset($_POST["update"])==TRUE){
    	
  

    
    {
        //pass validation
        $data = array(
            'name' => $this->input->post('name'),
            'branch' => $this->input->post('branch'),
            'roll_no' => $this->input->post('roll_no'),
            'email' => $this->input->post('email'),
            'pwd' => $this->input->post('password'),
        );

        //insert the form data into database
        $this->db->insert('reg_det', $data);

        //display success message
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Details added to Database!!!</div>');
        redirect('registration\welcome_msg');
    }
}
}
}
}

?>