<?php 


class Orders extends CI_Controller{


public function index(){
$config=array();
$config['base_url']=base_url().'Orders/index'	;
$config['total_rows']=$this->OrdersModel->rowCount();
$config['per_page']=25;
$config['uri_segment']=3;
$config['full_tag_open'] = '<div class="pagination_links ">';
$config['full_tag_close'] = '</div>';
$choice = $config['total_rows']/$config['per_page'];
$config['num_links'] = round($choice)+1;
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

$this->pagination->initialize($config);
$data['links']=$this->pagination->create_links();
$data['orders']=$this->OrdersModel->showOrders($config['per_page'],$page);
$data['main_content']='orders';
$this->load->view('layout/main',$data);



}

public function orderPage($order_id){
	$data['order']=$this->OrdersModel->order($order_id);
	$data['main_content']='orderDetail';
	$this->load->view('layout/main',$data);
}


public function deleteOrder(){
	$order_id=$_POST['order_id'];
	if($this->OrdersModel->deleteOrder($order_id)){
		$_SSESSION['success_delete']="با موفقیت حذف شد" ;
	}
}






}
















 ?>