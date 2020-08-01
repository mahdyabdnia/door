<?php  
 
 /** 
  */
 class CategoryModel extends CI_model
 {
 	
 	 public  function addCategory($data){
		 return $this->db->insert('category',$data);
		





 	}

 	public function fetch_branch($global_category){
 		$this->db->where('global_category',$global_category);
 		$query=$this->db->get('branch_category');
 		$output='<option disabled selected hidden="">لطفا یک دسته بندی را انتخاب کنید</option>'
 		foreach ($output->result() as $row) {
 			$output=.'<option value="'.$row->branch_category.'">'.$row->branch_category;'</option>';
 		}
 		return $output;
 	}

 	public function fethc_cate($branch_name){
 		$this->db->where('branch_name',$branch_name);
 		$query=$this->db->get('category');
 		$output=
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

 	public function showCategory(){

       return $this->db->get('category')->result();



 	}

 	public function showGloCategory(){
 		return $this->db->get('global_category')->result();
 	}

 	public function showbyId($id){



 		$this->db->where('category_id',$id);

 		return $this->db->get('category')->result();
 	}



 	public function deleteCategory($id){

 		$this->db->where('category_id',$id);

 		 return $this->db->delete('category');
 	}




 }











?>