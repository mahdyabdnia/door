<?php


Class EditCategory extends CI_Controller{

    public function index(){


    $data['result']=$this->CategoryModel->showCategory();	

     $data['main_content']='editcategory';

     $this->load->view('layout/main',$data);
        


    }


    public function editPage($id){

    	$data['result']=$this->CategoryModel->showbyId($id);



    	$data['main_content']='editthecat';
    	$this->load->view('layout/main',$data);





    }


    public function edit($id){

    	if ($_SERVER['REQUEST_METHOD']=='POST') {
    		if(isset($_POST['validedit'])){

    			$data = array('category_name' =>trim($_POST['cat-name']) ,'global_category'=>trim($_POST['global-cat']),'branch_category'=>trim($_POST['branch-name']) );

    			if($this->CategoryModel->updateCategory($data,$id)){

    				redirect('./EditCategory');}}


    		elseif(isset($_POST['cancel'])){
    			redirect('./EditCategory');}}}




     public function delete($id){

        if($_SERVER['REQUEST_METHOD']=='POST'){



            if(isset($_POST['del_yes'])){

                if($this->CategoryModel->deleteCategory($id)){

                    redirect('./EditCategory');
                }

               



            }
        }
 }           


    






}












?>