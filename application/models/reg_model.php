<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class reg_model extends CI_Model {
    public function __construct()
 {
  parent::__construct();
 }
	 public function updatedata($data){
    
    	
   $this->db->insert('reg_det', $data);

    
    
        //pass validation
        

        //insert the form data into database
         //can we try using the controller directly for insertion?
        //display success message
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Details added to Database!!!</div>');
        redirect('registration\welcome_msg');
    

}
}


?>