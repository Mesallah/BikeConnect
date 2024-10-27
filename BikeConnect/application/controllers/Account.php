
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends CI_Controller {
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Account_model', 'account');
   }
  public function index()
  {
    $data['accounts'] = $this->account->get_all();
    $data['title'] = "CodeIgniter Account Manager";
    $this->load->view('layout/header');       
    $this->load->view('account/index',$data);
    $this->load->view('layout/footer');
  }
  public function show($id)
  {
    $data['account'] = $this->account->get($id);
    $data['title'] = "Show Account";
    $this->load->view('layout/header');
    $this->load->view('account/show', $data);
    $this->load->view('layout/footer'); 
  }
  
   public function edit($id)
  {
	$data['account'] = $this->account->get($id);  
    $data['title'] = "Edit Account";
    $this->load->view('layout/header');
    $this->load->view('account/edit',$data);
    $this->load->view('layout/footer');     
  }
  
  public function delete($id)
  {
    $item = $this->account->delete($id);
    $this->session->set_flashdata('success', "Deleted Successfully!");
    redirect(base_url('account'));
  }
  
   public function create()
  {
    $data['title'] = "Create Account";
    $this->load->view('layout/header');
    $this->load->view('account/create',$data);
    $this->load->view('layout/footer');     
  }
  public function store()
  {
	 
    $this->form_validation->set_rules('uname', 'Uname', 'required');
    $this->form_validation->set_rules('pass', 'Pass', 'required');
	$this->form_validation->set_rules('fname', 'Fname', 'required');
	$this->form_validation->set_rules('mname', 'Mname', 'required');
	$this->form_validation->set_rules('lname', 'Lname', 'required');

    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('account/create'));
    }
    else
    {
       $this->account->store();
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('account'));
    }
  }
  
  public function update($id)
  {
	 
    $this->form_validation->set_rules('uname', 'Uname', 'required');
    $this->form_validation->set_rules('pass', 'Pass', 'required');
	$this->form_validation->set_rules('fname', 'Fname', 'required');
	$this->form_validation->set_rules('mname', 'Mname', 'required');
	$this->form_validation->set_rules('lname', 'Lname', 'required');

    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        //redirect(base_url('account/create'));
		redirect(base_url('account/edit' . $id));
    }
    else
    {
       //$this->account->store();
	   $this->account->update($id);
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('account'));
    }
  }
  
  
}