<?php

class OrdersModel extends CI_model{

	public function showOrders($limit,$start){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders.order_state','no_send');
		$this->db->join('good','good.good_id=orders.good_id');
		$this->db->join('user','user.user_id=orders.user_id');
		$this->db->order_by('order_id','asc');
		$this->db->limit($limit,$start);

		return $this->db->get()->result();
	}


	public function showOrderSending($limit,$start,$states){
		
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where_in('orders.order_state',$states);
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

 	public function orderSend($order_id,$states){
      
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders.order_id',$order_id);
		$this->db->where_in('orders.order_state',$states);
		$this->db->join('good','good.good_id=orders.good_id');
		$this->db->join('user','user.user_id=orders.user_id');

		return $this->db->get()->result();
	}


	public function rowCount(){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders.order_state','no_send');
		return $this->db->get()->num_rows();

	}

	public function rowCountSend(){
		$states=array('no_send');
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where_not_in('orders.order_state',$states);
		return $this->db->get()->num_rows();
	}


	public function deleteOrder($order_id){
	  $this->db->where('order_id',$order_id);
	 return $this->db->delete('orders');
	
}

public function sendOrder($order_id,$data){
	$this->db->where('orders.order_id',$order_id);
	return $this->db->update('orders',$data);
}

public function successSend($order_id,$data){
	$this->db->where('orders.order_id',$order_id);
	return $this->db->update('orders',$data);
}



 
}





 ?>