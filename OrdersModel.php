<?php

class OrdersModel extends CI_model{

	public function showOrders($limit,$start){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('good','good.good_id=orders.good_id');
		$this->db->join('user','user.user_id=orders.user_id');
		$this->db->order_by('order_id','asc');
		$this->db->limit($limit,$start);

		return $this->db->get()->result();
	}



	public function order($order_id){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders.order_id',$order_id);
		$this->db->where('orders.order_state','no_send');
		$this->db->join('good','good.good_id=orders.good_id');
		$this->db->join('user','user.user_id=orders.user_id');

		return $this->db->get()->result();
	}


	public function rowCount(){
		return $this->db->count_all('orders');

	}


	public function deleteOrder($order_id);
	 $this->db->where('order_id',$order_id);
	 return $this->db->delete('orders');
	
}

 






 ?>