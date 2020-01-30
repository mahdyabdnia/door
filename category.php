
        <div class="main2">
            <div  class="header">
            <h6>افزودن دسته بندی</h6>
            
            </div>
            <hr>
            
            <form method="post" action="<?php echo base_url();  ?>Category">
            
                <div class="form-group">
                <label align="right" >نام دسته بندی  </label>
                    <input  class="form-control form-input" type="text" placeholder="نام دسته بندی جدید را وارد نمایید " name="cat-name"> 
                
                </div>
                
                
                <div class="form-group">
                <label align="right"> دسته بندی کلی </label>
                    
                    <input class="form-control form-input" type="text" placeholder="نام دسته بندی کلی را وارد نمایید " name="global-cat">
                
                
                </div>
                
                
                <div class="form-group">
                <label align="right">نام شاخه بندی</label>
                <input class="form-control form-input" type="text" placeholder="لطفا نام شاخه بندی را وارد نمایید " name="branch-name"> 
                </div>
                
                <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="add-cat-end" >تایید و اتمام</button>
                    <button class="btn btn-secondary " name="add-cat-next">تایید مورد بعدی </button>
                    
                    <button class="btn btn-danger " name="cancel"  >انصراف</button>
                
                
                </div>
            
            
            
            
            </form>
            
      
            
            
        
        
        </div>
        
        