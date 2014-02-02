<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TwentyFourSeven_Controller extends CI_Controller {

	public function index()
	{   
            $this->load->library('form_validation');
            $this->form_validation->set_rules('FirstName', 'FirstName', 'required');
            $this->form_validation->set_rules('LastName', 'LastName', 'required');
            $this->form_validation->set_rules('Phone', 'Phone', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('Address', 'Address', 'required');
            $this->form_validation->set_rules('City', 'City', 'required');
            $this->form_validation->set_rules('State', 'State', 'required');            
            $this->form_validation->set_rules('Zipcode', 'Zip Code', 'required');                              
            
            
            $this->load->view('includes/header');
            $this->load->view('includes/top_section');
            
            if ($this->form_validation->run() == FALSE)
            {    
                $cErrors = count($this->form_validation->error_array());
                $errors = $cErrors ? json_encode($this->form_validation->error_array()) : 0;
                $data['errors'] = $errors;
                
                $this->load->view('index', $data);
            } 
            else 
            {   
                $record = $this->ContactModel->insert_entry($_POST);  
                $data['success'] = true;
                $data['contactID'] = $record[0]->id;
                
                $this->load->view('index', $data);
            }
	}
        
        public function viewBusinessCard() {                        
            $this->load->view('includes/header');
            $this->load->view('includes/top_section');
            $id = $_GET['id'];            
            $data['Contact'] = $this->ContactModel->get_by_id($id);
            $this->load->view('viewBusinessCard',$data);            
        }
}