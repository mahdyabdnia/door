<?php 


/**
 * 
 */
class FirstModel extends CI_model
{


public function show(){
	return $this->db->get('count')->result();
}

	
	
}








?>