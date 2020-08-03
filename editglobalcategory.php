<div class="main2">
            <div  class="header">
            <h6>ویرایش دسته بندی کلی</h6>
            
            </div>
            <hr>
            


            <?php foreach ($global_result as $glores):?>
            
            <form method="post" action="<?php echo base_url(); ?>EditCategory/editGlobalCategory/<?php echo $glores->global_category_id; ?>">
            
                
                
                
                <div class="form-group">
                <label align="right"> دسته بندی کلی </label>
                    
                    <input class="form-control form-input" type="text" name="global-cat" value="<?php echo $glores->global_category; ?>">
                
                
                </div>
                
                
                
                
                <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="validedit" >تایید ویرایش</button>
                   
                    
                    <button class="btn btn-danger " name="cancel" >انصراف</button>
                
                
                </div>
            
            
            
            
            </form>
            
      <?php endforeach; ?>
            
            
        
        
        </div>      