<?php

 
Class EditCategory extends CI_Controller{

    public function index(){


    $data['result']=$this->CategoryModel->showCategory();	
    $data['global_result']=$this->CategoryModel->showGlobalCategory();
    $data['branch_result']=$this->CategoryModel->showBranchCategory();

     $data['main_content']='editcategory';

     $this->load->view('layout/main',$data);
        


    }


    public function editPage($id){

    	$data['result']=$this->CategoryModel->showbyId($id);



    	$data['main_content']='editthecat';
    	$this->load->view('layout/main',$data);





    }


    public function editGlobalPage($id){
        $data['global_result']=$this->CategoryModel->showGlobalCategoryById($id);
        $data['main_content']='editglobalcategory';
        $this->load->view('layout/main',$data);


            }


    public function editBranchPage($id){
        $data['branch_result']=$this->CategoryModel->showBranchCategoryById($id);
        $data['global_result']=$this->CategoryModel->showGlobalCategory();
        $data['main_content']='editbranchcategory';
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


    public function editGlobalCategory($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['validedit'])){
                $data=array('global_category'=>trim($_POST['global-cat']));
                if($this->CategoryModel->updateGlobalCategory($data,$id)){
                    redirect('./EditCategory');
                }
            }

            elseif (isset($_POST['cancel'])) {
                redirect('./EditCategory');
              
            }
        }
    }


    public function editBranchCategory($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['validedit'])){
                $data=array('global_category_id'=>trim($_POST['global-cat-branch']),'branch_category'=>trim($_POST['branch-name-branch']));
                if($this->CategoryModel->updateBranchCategory($data,$id)){
                    redirect('./EditCategory');
                }
            }

            elseif (isset($_POST['cancel'])) {
                redirect('./EditCategory');
            }
        }
    }




     public function delete($id){

        if($_SERVER['REQUEST_METHOD']=='POST'){



            if(isset($_POST['del_yes'])){

                if($this->CategoryModel->deleteCategory($id)){

                    redirect('./EditCategory');
                }

               



            }
        }
 }   



 public function deleteGloblaCategory($id){

    if($_SERVER['REQUEST_METHOD']=='POST'){

        if(isset($_POST['delglo_yes'])){
            if($this->CategoryModel->deleteGloblaCategory($id)){
                redirect('./EditCategory');
            }
        }
    }
 }  


 public function deleteBranchCategory($id){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['delbran_yes'])){
            if($this->CategoryModel->deleteBranchCategory($id)){
                redirect('./EditCategory');
            }
        }
    }
 }      


    






}

    










?>