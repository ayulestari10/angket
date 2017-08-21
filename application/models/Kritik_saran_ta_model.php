<?php  

class Kritik_saran_ta_model extends CI_Model
{
	private $table;
	private $key;

	function __construct(){
		parent::__construct();
		$this->table 				= 'kritikdansaranta';
		$this->key 					= 'id_ks_ta';
	}

	function get_all(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

	function get_data_byId($id){
		$this->db->where($this->key, $id);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_id_mhs($nim){
		$this->db->where('nim', $nim);
		$query = $this->db->get($this->table);
		foreach($query->result() as $row){
			$id_mhs = $row->id_mhs;
		}
		return $id_mhs;
	}

	function insert($data){
		return $this->db->insert($this->table, $data);
	}

	function update($id_mhs, $data){
		$this->db->where($this->key, $id_mhs);
		return $this->db->update($this->table, $data);
	}

	function delete($id_mhs){
		return $this->db->delete($this->table, array($this->key => $id_mhs));
	}
}