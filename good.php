        <script type="text/javascript">     
         $(document).ready(function (){
            $('#global_type').change(function(){
                var global_category_id=$(this).val();

                $.ajax({
                   url:"<?php echo base_url(); ?>Good/fetch_branch",
                   
                   method:"POST",
                   data:{global_category_id:global_category_id},
                    dataType:'json',
                   async:'true',
                   success:function(data){
                    var html='<option disabled selected hidden="" value="">لطفا یک دسته بندی را انتخاب کنید</option>';
                    var i;
                    for(i=0;i<data.length;i++){
                                     

                                      html+='<option value='+data[i].branch_category_id+'>'+data[i].branch_category+'</option>';
                                       $('#branch_type').html(html);

                                  



                                   
                                }
                               

                   } }); });  });
        </script>



        <script type="text/javascript">
            $(document).ready(function(){
                $('#branch_type').change(function(){
                    var branch_category_id=$(this).val();
                    $.ajax({
                        url:"<?php echo base_url(); ?>Good/fetch_category",
                        method:"POST",
                        
                        data:{branch_category_id:branch_category_id},
                        dataType:'json',
                        async:'true',
                        success:function(data){
                            var html='<option disabled selected hidden="" value="">لطفا یک دسته بندی را انتخاب کنید</option>';
                            var i;
                            for(i=0;i<data.length;i++){
                                html+='<option value='+data[i].category_id+'>'+data[i].category_name+'</option>';
                            }
                            $('#category_type').html(html);


                        }



                    });
                });

            });

        



        </script>

        <script type="text/javascript">
            /*$(document).ready(function(){
                $('#global_type').change(function(){
                    
                    var global_category_id=$(this).val();
                   
                        $.ajax({
                            url:"<?php echo base_url(); ?>Category/fetch_branch",
                            method:"POST",
                           
                            data:{global_category_id:global_category_id},
                            async:'true',
                            dataType:'json',
                            
                            success:function(data){
                                var html='';
                                var i;
                                for(i=0;i<data.length;i++){
                                    html+='<option value='+data[i].branch_category_id+'>'+data[i].branch_category+'</option>';
                                }
                                $('#branch_type').html(html);

                            }
                        });
                     return false;
                  
 });
  });



        </script>
 








        <div class="main2">
            <div  class="header">
            <h6>افزودن محصول</h6>
            
            </div>
            <hr>
            
            <form  method="post" action="<?php echo base_url(); ?>Good/addGood " enctype="multipart/form-data"  >
                <div class="form-group">
                    <label  for="type" align="right" >دسته بندی کلی</label>
                    <select class="form-control" id="global_type" dir="rtl" name="global_category_id">
                    <option disabled selected  value="">لطفا یک دسته بندی را انتخاب کنید</option>
                       <?php foreach ($global_result as $gbr) : ?>

                        <option value="<?php echo $gbr->global_category_id; ?>"><?php echo $gbr->global_category; ?></option>
                        <?php endforeach; ?>
                    
                    </select>
                
                </div>

                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="branch_type" dir="rtl" name="branch_category_id">
                    <option disabled selected hidden="" value="">لطفا یک دسته بندی را انتخاب کنید</option>
                       

                         <option value="">لطفا یک دسته بندی را انتخاب نمایید </option>


                       
                    
                    </select>
                
                </div>

                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="category_type" dir="rtl" name="category_id">
                    <option disabled selected hidden="">لطفا یک دسته بندی را انتخاب کنید</option>
                    
                   <option disabled selected hidden="">لطفا یک دسته بندی را انتخاب کنید</option>
                      


                   
                    
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
                <label for="name" align="right">فروشنده</label>
                <input type="text" class="form-control form-input" id="name" name="seller_name" placeholder="لطفا نام فروشنده را وارد نمایید ">
                    
                
                </div>
                
                <div class="form-group">
                <label align="right">تصویر محصول</label>
                    <input type="file" class="form-control-file border" name="good_img" >
                
                </div>
                
                <div class="form-group">
                <label align="right">مشخصات محصول</label>
                    <textarea  class="form-control form-input" placeholder="لطفا مشخصات محصول را وارد نمایید" name=desc></textarea>
                </div>
                
                <div class="form-group btn-gr">
                 
                   <input type="submit" name="save_end" class="btn btn-info form-control" value="بت و اتمام ">
                   
                   <input type="submit" name="save_next" class="btn btn-info form-control" value="بت ، کالای بعدی ">
                   
                   <input type="submit" name="cancel" class="form-control btn btn-primary" value="نصراف  ">
                </div>
                
                
            
            
            
            
            </form>
            
            
        
        
        </div>
        
        