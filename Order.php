<?php

class Order extends CI_Controller{

	public function index(){
		$data['global_result']=$this->FirstModel->showGlobalCategory();
		$data['main_content']='order';
		$this->load->view('layout/main',$data);
	}




public function orderPage(){
	
		$_SESSION['first_login']="ابتدا باید وارد سایت شوید";
	
	
	
}

/*

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['add-order'])){
			foreach ($this->cart->contents() as $items ) {
				$data=array('good_id'=>$items['id'],'order_num'=>$items['qty'],'user_address'=>$_POST['address'],'send_time1'=>$_POST['time1'],'send_time2'=>$_POST['time2'],'subtotal'=>$items['subtotal']);
			}

			$this->OrderModel->insertOrder($data);
				redirect('./First');
			
		}
	}  */
public function addOrder($user_id){

	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['add-order'])){
			foreach ($this->cart->contents() as $items ) {
				$data=array('good_id'=>$items['id'],'order_num'=>$items['qty'],'user_address'=>$_POST['address'],'send_date'=>$_POST['date'],'send_time1'=>$_POST['time1'],'send_time2'=>$_POST['time2'],'user_id'=>$user_id,'subtotal'=>$items['subtotal']);

			}
			if($this->OrderModel->insertOrder($data)){
				redirect('/First');
			}


		}
	}





	
	


	



	
}

}
















 ?>

 <!--        






 foreach ($this->cart->contents() as $items) {
		$data=array('good_id'=>$items['id'],'order_num'=>$items['qty'],'user_address'=>$_POST['user_address'],'send_time1'=>$_POST['send_time1'],'send_time2'=>$_POST['send_time2'],'subtotal'=>$items['subtotal'],'user_id'=>$_SESSION['userId'],'send_date'=>$_POST['send_date']);
		
			
		
		
	}


	$this->OrderModel->insertOrder($data);     -->