<div class="main2">
            <div  class="header">
            <h6>ویرایش دسته بندی کلی</h6>
            
            </div>
            <hr>



            
            
            
            <?php foreach ($branch_result as $br):?>
            
            <form method="post" action="<?php echo base_url(); ?>EditCategory/editBranchCategory/<?php echo $br->branch_category_id; ?>">
            
               
                
                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="type" dir="rtl" name="global-cat-branch">
                    	  
                    <option  selected value="<?php $br->global_category_id; ?>" ><?php echo $br->global_category; ?> </option>
                     
                         <?php foreach ($global_result as $gcat) : ?>
                        <option value="<?php echo $gcat->global_category_id; ?>"><?php echo $gcat->global_category; ?></option>
                         <?php endforeach; ?>

                    
                    
                    </select>
                
                </div>
                
                
                <div class="form-group">
                <label align="right">نام شاخه بندی</label>
               
                <input class="form-control form-input" type="text" placeholder="لطفا نام شاخه بندی را وارد نمایید " name="branch-name-branch" value="<?php echo $br->branch_category; ?>"> 
          
                </div>
                
                
                
                
                
                <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="validedit" >تایید ویرایش</button>
                   
                    
                    <button class="btn btn-danger " name="cancel" >انصراف</button>
                
                
                </div>
            
            
            
            
            </form>
             <?php endforeach; ?> 
      

</div>