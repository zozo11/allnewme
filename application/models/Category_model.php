<?php 
	/**
	* 
	*/
	class Category_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_categories(){
			$this->db->from('categories');
			$this->db->order_by("name", "asc");
			$query = $this->db->get();
			return $query->result_array();
		}

		public function create_category(){
			$data = array(
				'name' => $this->input->post('name')
			);

			return $this->db->insert('categories', $data);
		}

		public function get_category($id){
			$query = $this->db->get_where('categories',array('id'=> $id));
			return $query->row();

		}
	}
?>