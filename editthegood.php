           <script type="text/javascript">
                $(document).ready(function(){
                  $('#global_type').change(function(){
                    var  global_category_id=$(this).val();
                    $.ajax({
                       url:"<?php echo base_url(); ?>Good/fetch_branch",
                       method:"POST",
                       data:{global_category_id:global_category_id},
                       dataType:'json',
                       async:'true',
                 
                       success:function(data){
                       
                          var html='';
                          var i;
                          for(i=0;i<data.length;i++){
                            html+='<option value='+data[i].branch_category_id+'>'+data[i].branch_category+'</option>';
                                       $('#branch_type').html(html);
                          }
                          









                       }






                    });
                  });
                });



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
                            var html='';
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











        <div class="main2"> 
            <div  class="header">
            <h6>ویرایش محصول</h6>
             
            </div>
            <hr>
            <?php foreach ($result as $res): ?>
            <form method="post" action="<?php echo base_url(); ?>EditGood/edit/<?php echo $res->good_id; ?>" >
                <div class="form-group">
                <label for="type" align="right">دسته بندی کلی</label>
                <select class="form-control" dir="rtl" name="global_category_id" id="global_type">
                    <option  selected disabled value="<?php echo $res->global_category_id; ?>" ><?php echo $res->global_category; ?> </option>
                    <?php foreach($global_result as $glres): ?>
                      <option  value="<?php  echo $glres->global_category_id;?>"><?php echo $glres->global_category; ?></option>
                     
                     <?php endforeach; ?>



                </select>

                
                
                </div>

                <div class="form-group" >
                    <label for="type" align="right">دسته بندی زیر شاخه</label>
                    <select class="form-control" dir="rtl" name="branch_category_id" id="branch_type">
                        
                         <option selected disabled  value="<?php echo $res->branch_category_id; ?> "><?php echo $res->branch_category; ?></option>

                    </select>
                     





                </div>
            
                  


                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="category_type" dir="rtl" name="category_id">
                    <option  selected disabled value="<?php echo $res->category_id; ?>"><?php echo  $res->category_name; ?></option>
                        

                        
                    
                    </select>
                
                </div>
                
                <div class="form-group">
                <label align="right" for="name"> نام محصول </label>
                <input type="text" class="form-control form-input" id="name" name="good_name" value="<?php echo $res->good_name; ?>">
                    
                
                </div>


                <div class="form-group">

                    <label align="right" for="price">قیمت مخصول</label>

                    <input type="text" name="good_price" id="name" class="form-control form-input" value="<?php echo $res->good_price; ?>">



                 </div>   
                
                
                <div class="form-group">
                <label for="name" align="right">نام برند </label>
                <input type="text" class="form-control form-input" name="brand_name" id="name" value="<?php echo $res->brand_name; ?>">


                <div class="form-group" >
                    <label align="right">نام فروشنده</label>
                    <input type="text" name="seller_name" class="form-control form-input" id="name" value="<?php  echo $res->seller_name;?>">



                </div>
                    
                
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
        
      