<?php  
 
 /**  
  */
 class CategoryModel extends CI_model
 {
 	
 	 public  function addCategory($data){
		 return $this->db->insert('category',$data);
		





 	}


 	public function showGlobalCategoryById($id){
 		$this->db->where('global_category_id',$id);
 		return $this->db->get('global_category')->row();
 	}


 	public function showbyId($id){
     $this->db->select('*');
     $this->db->from('category');
     $this->db->where('category_id',$id);
     $this->db->join('branch_category','category.branch_category_id=branch_category.branch_category_id');
     $this->db->join('global_category','category.global_category_id=global_category.global_category_id');
     return $this->db->get()->row();


 	}

 	public function showBranchCategoryById($id){
 		$this->db->select('*');
 		$this->db->from('branch_category');
 		$this->db->where('branch_category_id',$id);
 		$this->db->join('global_category','branch_category.global_category_id=global_category.global_category_id');
 		return $this->db->get()->row();
 	}



 	public function showCategory(){

      $this->db->select('*');
      $this->db->from('category');
      $this->db->join('branch_category','category.branch_category_id=branch_category.branch_category_id');
      $this->db->join('global_category','category.global_category_id=global_category.global_category_id');
      return $this->db->get()->result();



 	}



 	public function showGlobalCategory(){
 		 return $this->db->get('global_category')->result();
 	}

 	public function showBranchCategory(){
 		$this->db->select('*');
 		$this->db->from('branch_category');
 		$this->db->join('global_category','branch_category.global_category_id=global_category.global_category_id');
 		return $this->db->get()->result();

 	}

 	public function fetch_branch($global_category_id){
 		$this->db->where('global_category_id',$global_category_id);
 		$query=$this->db->get('branch_category');
 		
 		
 		return $query->result();
 	}

 	

 	


 	public function addGloCategory($data){
 		return $this->db->insert('global_category',$data);
 	}


 	public function addBranchCategory($data){
 		return $this->db->insert('branch_category',$data);
 	}



 	public function updateCategory($data,$id){

 		$this->db->where('category_id',$id);
 		 return $this->db->update('category',$data);



 	}


 	public function updateGloCategory($data,$id){
 		$this->db->where('global_category_id',$id);
 		return $this->db->update('global_category',$data);
 	}


 	public function updateBranchCategory($data,$id){
 		$this->db->where('branch_category_id',$id);
 		return $this->db->update('branch_category',$data);
 	}

 	

 	public function showGloCategory(){
 		return $this->db->get('global_category')->result();
 	}




 	public function deleteCategory($id){

 		$this->db->where('category_id',$id);

 		 return $this->db->delete('category');
 	}


 	public function deleteGlobalCategory($id){
 		$this->db->where('global_category_id',$id);
 		return $this->db->delete('global_category');
 	}


 	public function deleteBranchCategory($id){
 		return $this->db->delete('branch_category');
 	}




 }











?>