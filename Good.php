 

<?php

class Good extends CI_Controller{


	public function index(){



		$data['global_result']=$this->GoodModel->showGlobalCategory();

		$data['main_content']='good';
		$this->load->view('layout/main',$data);




	} 
   

      public function fetch_branch(){
            $global_category_id=$this->input->post('global_category_id',TRUE);
            $data=$this->GoodModel->showBranchByGlobalCategoryId($global_category_id)->result();
            echo json_encode($data);
      }


      public  function fetch_category(){
            $branch_category_id=$this->input->post('branch_category_id',TRUE);
            $data=$this->GoodModel->showCategoryByBranchCategoryId($branch_category_id);
            echo json_encode($data);
      }




	public function addGood(){
		if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['save_end'])){
                 
                       
                        $data=array('global_category_id'=>trim($_POST['global_category_id']),'branch_category_id'=>trim($_POST['branch_category_id']),'category_id'=>trim($_POST['category_id']),'good_name'=>trim($_POST['good_name']),'brand_name'=>trim($_POST['brand_name']),'good_price'=>trim($_POST['good_price']),'description'=>$_POST['desc'],'seller_name'=>trim($_POST['seller_name']));


                        if($this->GoodModel->addGood($data)){
                              redirect('First');
                        }
                  
            	




            }

            elseif(isset($_POST['save_next'])){
            	if($this->upload()){
                        
                        $data=array('global_category_id'=>trim($_POST['global_category_id']),'branch_category_id'=>trim($_POST['branch_category_id']),'category_id'=>trim($_POST['category_id']),'good_name'=>trim($_POST['good_name']),'brand_name'=>trim($_POST['brand_name']),'good_price'=>trim($_POST['good_price']),'description'=>$_POST['desc'],'seller_name'=>trim($_POST['seller_name']));


                        if($this->GoodModel->addGood($data)){
                              redirect('Good');
                        }
                  }




            }

            elseif (isset($_POST['cancel'])) {
                  redirect('First');
            }



		}





	}





/*public function upload(){

      $allowedExtionsions=array("jpg","png","svg","jpeg","gif");//the only two formats we accept for the avatar...
            $temp=explode(".",$_FILES["img"]["name"]);//$temp is an array $temp[1]=example , $temp[2]=jpg
            $extension=end($temp);//end() function gets the last element of an array

            if (in_array($extension,$allowedExtionsions) && $_FILES["img"]["size"]<35000000000) {
                  if($_FILES["img"]["error"]>0) {
                        die('error');
                        return false;
                  }else{
                        if (file_exists('./assets/img/goods/'.$_FILES["img"]["name"])) {
                              die('existed');
                              return false;
                        }
                        else{
                              move_uploaded_file($_FILES["img"]["tmp_name"], 
                                    './assets/img/goods/'.$_FILES["img"]["name"]);//if nothings is wrong with the image we move it to the proper directory
                              return true;
                        }
                  }
            }else{
                  die('size or format');
                  return false;
            }



	}*/
}






















?>