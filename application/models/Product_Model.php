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
        public function delete($id){
            return $this->db->delete('table_product', array('id' => $id));
         }

        public function update($data){
            $id = $data['id'];
            return $this->db->update('table_product', $data, array('id' => $data['id'])); 
        }
        

}


?>