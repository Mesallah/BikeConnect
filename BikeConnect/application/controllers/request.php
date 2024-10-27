
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Request extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->library('pagination');
      $this->load->model('Request_model', 'request');
      //$this->load->model('export_csv_model');
 
   }

   //loadrecord - open
   public function loadRecord2($rowno=0){
 
    $request=$_GET['request'];
    //$second_date=$_GET['endate'];

    $rowperpage = 5;

    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    $allcount = $this->db->where('active', '1')->count_all('req');

    $this->db->limit($rowperpage, $rowno);
    $this->db->where('request >=', $request);
    $users_record = $this->db->where('active', '1')->get('req')->result_array();

    $config['base_url'] = base_url().'request/loadRecord2';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;
    
    $config['num_links'] = 10;

    $config['full_tag_open']    = '<div class="pagging text-center"><ul class="pagination">';
    $config['full_tag_close']   = '</ul></div>';
    
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tag_close']  = '</span></li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tag_close'] = '</span></li>';
    $config['first_tag_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tag_close']  = '</span></li>';
    
    

    $this->pagination->initialize($config);

    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
}
   //loadrecord - close

   //export csv open
   function export_request()
   {
    $file_name = 'requests_masterlist_asof_'.date('Ymd').'.csv'; 
       header("Content-Description: File Transfer"); 
       header("Content-Disposition: attachment; filename=$file_name"); 
       header("Content-Type: application/csv;");
     
       // get data 
       
       $request_data = $this->request->fetch_data_request();
  
       // file creation 
       $file = fopen('php://output', 'w');
   
       //$header = array("id","transid","grossamount","tax","isdiscounted","netamount","valid","ornumber","remarks","timestamp"); 
       
       
        //$header = array("id","transid","ornumber","customername","email","startloc","endloc","basefare","distance","time","surcharges","modepayment","grossamount","tax","isdiscounted","isdiscountedamt","disctype","discardno","discardamt","withvoucher","vouchertype","voucherval","voucheramt","vtype","netamount","valid","remarks","timestamp"); 
        $header = array("requestid","reqservice","reqdate","status","etc","userid","active");
       
    
       
       
       
       fputcsv($file, $header);
       foreach ($request_data->result_array() as $key => $value)
       { 
         fputcsv($file, $value); 
       }
       fclose($file); 
       exit; 
   }
   //export csv close
 
   /*
      Display all records in page
   */
  public function index()
  {
    $data['requests'] = $this->request->get_all();
    $data['title'] = "Request Manager";
    $this->load->view('layout/header');       
    $this->load->view('request/index',$data);
    $this->load->view('layout/footer');
  }
 
  /*
 
    Display a record
  */
  public function show($id)
  {
    $data['request'] = $this->request->get($id);
    $data['title'] = "Show Request";
    $this->load->view('layout/header');
    $this->load->view('request/show', $data);
    $this->load->view('layout/footer'); 
  }
 
  /*
    Create a record page
  */
  public function create()
  {
    $data['title'] = "Create Request";
    $this->load->view('layout/header');
    $this->load->view('request/create',$data);
    $this->load->view('layout/footer');     
  }
 
  /*
    Save the submitted record
  */
  public function store()
  {
    $this->form_validation->set_rules('requestid', 'RequestId', 'required');
    $this->form_validation->set_rules('reqservice', 'RequestService', 'required');
	$this->form_validation->set_rules('reqdate', 'RequestDate', 'required');
	$this->form_validation->set_rules('status', 'Status', 'required');
	$this->form_validation->set_rules('etc', 'Etc', 'required');
	$this->form_validation->set_rules('userid', 'UserId', 'required');
	$this->form_validation->set_rules('active', 'Active', 'required');
	
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('request/create'));
    }
    else
    {
       $this->request->store();
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('request'));
    }
 
  }
 
  /*
    Delete a record
  */
  public function delete($id)
  {
    $item = $this->request->delete($id);
    $this->session->set_flashdata('success', "Deleted Successfully!");
    redirect(base_url('request'));
  }
 
 


public function edit($id)
  {
	$data['request'] = $this->request->get($id);  
    $data['title'] = "Edit Request";
    $this->load->view('layout/header');
    $this->load->view('request/edit',$data);
    $this->load->view('layout/footer');     
  }

  public function update($id)
  {
    $this->form_validation->set_rules('requestid', 'RequestId', 'required');
    $this->form_validation->set_rules('reqservice', 'RequestService', 'required');
	$this->form_validation->set_rules('reqdate', 'RequestDate', 'required');
	$this->form_validation->set_rules('status', 'Status', 'required');
	$this->form_validation->set_rules('etc', 'Etc', 'required');
	$this->form_validation->set_rules('userid', 'UserId', 'required');
	$this->form_validation->set_rules('active', 'Active', 'required');

    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        //redirect(base_url('account/create'));
		redirect(base_url('request/edit' . $id));
    }
    else
    {
       //$this->account->store();
	   $this->request->update($id);
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('request'));
    }
  }



}