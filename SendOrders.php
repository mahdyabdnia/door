<?php

class SendOrders extends CI_Controller{
 

 public function index(){
 	$config=array();
$config['base_url']=base_url().'SendOrders/index'	;
$config['total_rows']=$this->OrdersModel->rowCountSend();
$config['per_page']=25;
$config['uri_segment']=3;
$config['full_tag_open'] = '<div class="pagination_links ">';
$config['full_tag_close'] = '</div>';
$choice = $config['total_rows']/$config['per_page'];
$config['num_links'] = round($choice)+1;
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$states=array('sending','sended');

$this->pagination->initialize($config);
$data['links']=$this->pagination->create_links();
$data['orders']=$this->OrdersModel->showOrderSending($config['per_page'],$page,$states);
$data['main_content']='sendorders';
$this->load->view('layout/main',$data);
 }


 public function sendOrderPage($order_id){
 	$states=array('sending','sended');
 	$data['order']=$this->OrdersModel->orderSend($order_id,$states);
 	$data['main_content']='orderDetailSend';
 	$this->load->view('layout/main',$data);
 }


 public function successSend(){
 	$order_id=$_POST['order_id'];
 	$data=array('order_state','sended');
 	if($this->OrdersModel->successSend($order_id,$data)){
 		$_SSESSION['succ']="تحویل با موفقیت صورت گرفت ";
 	}
 }






















}





 ?>

