
        <div class="main2">
            <div  class="header">
            <h6>ویرایش محصول</h6>
            
            </div>
            <hr>
            <?php foreach ($result as $res): ?>
            <form method="post" action="<?php echo base_url(); ?>EditGood/edit/<?php echo $res->good_id; ?>" >
                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="type" dir="rtl" name="category_name">
                    <option disabled selected hidden=""><?php echo  $res->category_name; ?></option>
                        

                        <?php foreach ($cat_result as $cat): ?>

                          <option><?php echo  $cat->category_name; ?></option>
                        <?php endforeach; ?>
                    
                    </select>
                
                </div>
                
                <div class="form-group">
                <label align="right" for="name"> نام محصول </label>
                <input type="text" class="form-control form-input" id="name" name="good_name" value="<?php echo $res->good_name; ?>">
                    
                
                </div>
                
                
                <div class="form-group">
                <label for="name" align="right">نام برند </label>
                <input type="text" class="form-control form-input" name="brand_name" id="name" value="<?php echo $res->brand_name; ?>">
                    
                
                </div>
                
                <div class="form-group">
                <label align="right">تصویر محصول</label>
                    <input  type="file" class="form-control-file border" value=""  >
                
                </div>
                
                <div class="form-group">
                <label align="right">مشخصات محصول</label>
                    <textarea  name="description" class="form-control form-input" value=""><?php echo $res->description; ?></textarea>
                </div>
                
                <div class="form-group btn-gr">
                   <button class="  btn btn-info" name="save">ثبت</button>
                   
                   <button class="btn btn-primary" name="cancel">انصراف</button>
                </div>
                
                
            
            
            
            
            </form>
            <?php endforeach; ?>
            
        
        
        </div>
        
      