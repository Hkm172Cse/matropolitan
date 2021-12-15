<?php
    class Product_Model extends CI_Model {

       
        
        public function insert_entry($data)
        {
               
              return $this->db->insert('table_product', $data);
        }

        public function selectAll(){
            $query = $this->db->query("select * from table_product order by id DESC");
            return $query->result();
        }

        public function select_single_row($id){
            $this->db->where('id', $id);
            $query = $this->db->get('table_product')->row();
            return $query;
        }
        

}


?>