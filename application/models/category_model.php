<?php
	class category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
			
		public function create_category(){
			$data = array(
				'name' => $this->input->post('name')
			);

			$this->db->insert('categories', $data);
			return true;
		}

		public function get_category($id){
			$query = $this->db->get_where('categories', array('id' => $id));
			return $query->row();
		}
	}
