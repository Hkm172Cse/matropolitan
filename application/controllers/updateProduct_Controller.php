<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class updateProduct_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

		$this->load->model('Author_Model');
        $this->load->model('Product_Model');
	}

   

    public function index($id){

        
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['product_info'] = $this->Product_Model->select_single_row($id);
        $this->load->view('Componants/update_product', $data);
    }

    public function updateMethod(){
        $data['id'] = $this->input->post('update_id');
    

        $data['product_name'] =  $this->input->post('product_name');
        $data['catagory'] = $this->input->post('catagory');
        $data['type'] =  $this->input->post('type');
        $data['source'] = $this->input->post('source');
        $data['activity'] =  $this->input->post('activity');
        $data['lunch_date'] = $this->input->post('lunch_date');
        $data['remarks'] =  $this->input->post('remarks');
        
        print_r($data);
        exit();

    }

   

}
