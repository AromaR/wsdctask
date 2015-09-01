<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/** shd i rename it registration nope
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		
		$this->load->model('reg_model');
		
		
		//$this->lang->load('sample' , 'english');
	}

	public function index()
	{
		$this->load->view('welcome_message');
		$data['scripts'] = array('auth/jquery.dataTables.min.js','dataTables.bootstrap.js','auth/table.js');

		//$this->reg_model->updatedata($data);  

		


	}
	public function update()
	{
		$data = array(
            'name' => $this->input->post('name'),
            'branch' => $this->input->post('branch'),
            'roll_no' => $this->input->post('roll_no'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
		 $this->tables  = $this->config->item('tables', 'reg_det'); 
		 
	}
	
}
