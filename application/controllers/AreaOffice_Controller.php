<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AreaOffice_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

		$this->load->model('Product_Model');
        $this->load->model('Stock_model');
	}

    public function index(){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['riqusition_info'] = $this->Stock_model->select_requition();
        $this->load->view('Componants/area_office', $data);
    }

    public function create_requisition_index(){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['product_name'] = $this->Stock_model->selectAll();
        $this->load->view('Componants/requisition_page', $data);
    }

    public function update_stock(){
        $all_data = array();
        $status = "confirm";
        $data = $this->input->post();
        for($i=0; $i<sizeof($data['quantity']); $i++){
            if($data['quantity'][$i] > 0 ){
                $updateStock = $data['stock'][$i] - $data['quantity'][$i];
                $arr = array('stock'=>$updateStock,'id'=>$data['productId'][$i]);

                $all_data[] = $arr;
            }
        }

        $chalanId = $data['chalanId'];

        $result = $this->Stock_model->insert_entry($all_data);
       if($result==true){
           $this->Stock_model->update_status($status,$chalanId);
           redirect('areaOffice');
       }
    }

    public function insert_requsition(){
        $num = "1000";
        $rnd = rand(99999,999999);
        $chalanId =  $num.$rnd;
       $all_data = array();
       $data = $this->input->post();
       for($i=0; $i<sizeof($data['product_name']); $i++){
           
           if($data['quantity'][$i] > 0 ){
               $arr = array('product_name'=>$data['product_name'][$i],'quantity'=>$data['quantity'][$i],'stock'=>$data['stock'][$i],'carton'=>$data['carton'][$i],'remark'=>$data['remark'][$i], 'aria_office'=>$data['aria_office'], 'date'=>$data['date'], 'requestBy'=>$data['requestBy'], 'chalanId'=>$chalanId, 'stockId'=>$data['id'][$i]);
               $all_data[] = $arr;
           }
          
       }
       $res = array('chalanId'=>$chalanId, 'aria_officer'=>$data['aria_office'], 'date'=>$data['date'], 'requestBy'=>$data['requestBy']);
       
       
       $result = $this->Stock_model->requsition_insert($all_data);
       if($result==true){
           $this->Stock_model->insert_member($res);
           redirect('areaOffice');
       }
    
    }

    public function requsition_confirm($calanNo){
        $data['header_src'] = $this->load->view('inc/header_src', '', true);
        $data['header'] = $this->load->view('inc/header', '', true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        $data['riqusition_product'] = $this->Stock_model->select_requition_product($calanNo);
        $this->load->view('Componants/Ao_confirm', $data);
    }



    // below code deletable 
    

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

