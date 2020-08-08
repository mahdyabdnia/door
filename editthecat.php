
        <div class="main2">
            <div  class="header">
            <h6>ویرایش تقسیم بندی</h6>
            
            </div>
            <hr>
            
  

            <?php foreach ($result as $res):?>
            
            <form method="post" action="<?php echo base_url(); ?>EditCategory/edit/<?php echo $res->category_id; ?>">
            
                
                
                
                <div class="form-group">
                <label align="right"> دسته بندی کلی </label>
                    
                    <input class="form-control form-input" type="text" name="global-cat" value="<?php echo $res->global_category; ?>">
                
                
                </div>
                
                
                <div class="form-group">
                <label align="right">نام شاخه بندی</label>
                <input class="form-control form-input" type="text" name="branch-name" value="<?php echo $res->branch_category; ?>"> 
                </div>

                <div class="form-group">
                <label align="right" >نام دسته بندی  </label>
                    <input  class="form-control form-input" type="text" name="cat-name" value="<?php echo $res->category_name; ?>"> 
                
                </div>
                
                <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="validedit" >تایید ویرایش</button>
                   
                    
                    <button class="btn btn-danger " name="cancel" >انصراف</button>
                
                
                </div>
            
            
            
            
            </form>
            
      <?php endforeach; ?>
            
            
        
        
        </div>
        
       