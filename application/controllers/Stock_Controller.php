<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

		$this->load->model('Product_Model');
        $this->load->model('Stock_model');
	}
    public function StockIndex(){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['product_name'] = $this->Product_Model->selectAll();
        $this->load->view('Componants/add_stock', $data);
    }

    public function insert_stock(){
       $all_data = array();
       $data = $this->input->post();
       for($i=0; $i<sizeof($data['product_name']); $i++){
           
           if($data['quantity'][$i] > 0 ){
               $arr = array('product_name'=>$data['product_name'][$i],'quantity'=>$data['quantity'][$i],'stock'=>$data['stock'][$i],'base_unit'=>$data['base_unit'][$i],'remark'=>$data['remark'][$i]);
               $all_data[] = $arr;
           }
          
       }
   
       $result = $this->Stock_model->insert_entry($all_data);
    
    }

    public function view_stock_index(){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['Stock_data'] = $this->Stock_model->selectAll();
        $this->load->view('Componants/Stock_view', $data);
    }
   
    // in the below all code are deletable
    public function index(){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $this->load->view('Componants/add_product', $data);
    }

    public function selectAllProduct(){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['all_product'] = $this->Product_Model->selectAll();
        $this->load->view('Componants/product_list', $data);
    }

    public function product_view($id){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['product_info'] = $this->Product_Model->select_single_row($id);
        $this->load->view('Componants/product_view', $data);
    }

    public function product_delete( $id){
        if($this->Product_Model->delete($id)){
            redirect('all_product');
        }
    }

   public function product_insert(){
        
        $data['product_name'] =  $this->input->post('product_name');
        $data['catagory'] = $this->input->post('catagory');
        $data['type'] =  $this->input->post('type');
        $data['source'] = $this->input->post('source');
        $data['activity'] =  $this->input->post('activity');
        $data['lunch_date'] = $this->input->post('lunch_date');
        $data['base_unit'] =  $this->input->post('base_unit');
        $data['base_qnty_price'] = $this->input->post('base_qnty_price');
        $data['carton'] = $this->input->post('carton');
        $data['carton_price'] = $this->input->post('carton_price');
        $data['remarks'] =  $this->input->post('remarks');


        $sdata = array();
        $config['upload_path']          = 'image/';
        $config['allowed_types']        = 'gif|jpg|png';
    

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
                $error = array('error' => $this->upload->display_errors());

            
        }
        else
        {
                $sdata =  $this->upload->data();
                $data['image'] = $config['upload_path'].$sdata['file_name'];
        }
        if($this->Product_Model->insert_entry($data)){
            redirect('all_product');
        }
   }

}

