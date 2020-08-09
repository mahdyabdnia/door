<?php 


 
  
/**
 *   
 */
class GoodModel extends CI_model
{
	
	public function addGood($data){


		return $this->db->insert('good',$data);
	}


	public function showGlobalCategory(){
		return $this->db->get('global_category')->result();
	}


	public function showBranchByGlobalCategoryId($global_category_id){
		return $this->db->get_where('branch_category',array('global_category_id'=>$global_category_id));
	}

	public function showCategoryByBranchCategoryId($branch_category_id){
		$this->db->where('branch_category_id',$branch_category_id);
		return $this->db->get('category')->result();
	}


	public function showGood(){

      return $this->db->get('good')->result();

	}


	public function showbyId($id){

		$this->db->where('good_id',$id);

		return $this->db->get('good')->result();
	}


	public function updateGood($id,$data){
		$this->db->where('good_id',$id);
		return $this->db->update('good',$data);

    


	}



	public function deleteGood($id){
   $this->db->where('good_id',$id);

   return $this->db->delete('good');


	}


}






?>