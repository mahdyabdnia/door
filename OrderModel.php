<?php
 

 class OrderModel extends CI_model{



 	public function insertOrder($data){
 		return $this->db->insert('orders',$data);
 	}
 }




























 ?>