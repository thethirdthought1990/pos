<?php
class Organization_model extends CI_Model{
	

	function organization_model(){
		parent::__construct();
	}

	function save($data)
	{
		$sql_product="insert into tab_organizations values(DEFAULT,'".$data['org_name']."','".$data['contact']."','".$data['address']."','".$data['zipcode']."')";
		$query=$this->db->query($sql_product);
		return 1;
	}

	function get_all_organizations()
	{
		
		$sql="select * from tab_organizations";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	

	function delete_organization($id)
	{
		$sql="delete from tab_organizations where int_organization_id=".$id."";
		$query=$this->db->query($sql);
		return $query;
	}
	
	function get_organization_details()
	{
		$sql="select * from tab_organizations where int_organization_id=".$id."";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
}

?>