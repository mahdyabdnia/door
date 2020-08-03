<div class="main2">
            <div  class="header">
            <h6>ویرایش دسته بندی کلی</h6>
            
            </div>
            <hr>



            
            
            
            <?php foreach ($global_result as $glores):?>
            
            <form method="post" action="<?php echo base_url(); ?>EditCategory/editGlobalCategory/<?php echo $glores->global_category_id; ?>">
            
               
                
                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="type" dir="rtl" name="global-cat-branch">
                    <?php foreach ($branch_result as $br) :?>	  
                    <option disabled selected value="<?php $br->global_category_id; ?>" ><?php echo $br->global_category; ?> </option>
                    <?php endforeach; ?> 
                         <?php foreach ($glo_cat as $gcat) : ?>
                        <option value="<?php echo $gcat->global_category_id; ?>"><?php echo $gcat->global_category; ?></option>
                         <?php endforeach; ?>

                    
                    
                    </select>
                
                </div>
                
                
                <div class="form-group">
                <label align="right">نام شاخه بندی</label>
                <?php foreach($branch_result as $br): ?>
                <input class="form-control form-input" type="text" placeholder="لطفا نام شاخه بندی را وارد نمایید " name="branch-name-branch" value="<?php echo $br->branch_category; ?>"> 
            <?php endforeach; ?>
                </div>
                
                
                
                
                
                <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="validedit" >تایید ویرایش</button>
                   
                    
                    <button class="btn btn-danger " name="cancel" >انصراف</button>
                
                
                </div>
            
            
            
            
            </form>
             <?php endforeach; ?> 
      

</div>