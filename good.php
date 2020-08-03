
        <div class="main2">
            <div  class="header">
            <h6>افزودن محصول</h6>
            
            </div>
            <hr>
            
            <form  method="post" action="<?php echo base_url(); ?>Good/addGood ">
                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="type" dir="rtl" name="category_name">
                    <option disabled selected hidden="">لطفا یک دسته بندی را انتخاب کنید</option>
                       <?php foreach ($cat_result as $cat) : ?>

                        <option><?php echo $cat->category_name; ?></option>


                       <?php endforeach; ?>
                    
                    </select>
                
                </div>
                
                <div class="form-group">
                <label align="right" for="name"> نام محصول </label>
                <input type="text" class="form-control form-input" id="name" name="good_name" placeholder="لطفا نام محصول را وارد نمایید">
                    
                
                </div>


                <div class="form-group">
                 <label align="right" for="price">قیمت محصول</label>   
                   <input type="text" id="price" name="good_price" class="form-control form-input" placeholder="لطفا قیمت محصول راوارد کمید" > 



                </div>
                
                
                <div class="form-group">
                <label for="name" align="right">نام برند </label>
                <input type="text" class="form-control form-input" id="name" name="brand_name" placeholder="لطفا نام برند را وارد نمایید">
                    
                
                </div>
                
                <div class="form-group">
                <label align="right">تصویر محصول</label>
                    <input text-align="right" type="file" class="form-control-file border" >
                
                </div>
                
                <div class="form-group">
                <label align="right">مشخصات محصول</label>
                    <textarea  class="form-control form-input" placeholder="لطفا مشخصات محصول را وارد نمایید" name=desc></textarea>
                </div>
                
                <div class="form-group btn-gr">
                   <button class="  btn btn-info" name="save_end">ثبت و اتمام </button>
                   <button class="btn btn-dark" name="save_next">ثبت ، کالای بعدی</button>
                   <button class="btn btn-primary">انصراف</button>
                </div>
                
                
            
            
            
            
            </form>
            
            
        
        
        </div>
        
        