    

 <script type="text/javascript">
            $(document).ready(function(){
                $('#bran').click(function(){
                  $('#branch_class').fadeIn();
                  $('#cate_class').fadeOut();
                  $('#glo_class').fadeOut();
                  $('#bran').css('background-color','#9bdfe0');
                   $('#glo').css('background-color','white');
                  $('#cate').css('background-color','white');
                });

            });


        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#glo').click(function(){
                  $('#branch_class').fadeOut();
                  $('#cate_class').fadeOut();
                  $('#glo_class').fadeIn();
                  $('#bran').css('background-color','white');
                   $('#glo').css('background-color','#9bdfe0');
                  $('#cate').css('background-color','white');
                  
                });

            });


        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#cate').click(function(){
                  $('#branch_class').fadeOut();
                  $('#cate_class').fadeIn();
                  $('#glo_class').fadeOut();
                $('#bran').css('background-color','white');
                   $('#glo').css('background-color','white');
                  $('#cate').css('background-color','#9bdfe0');
                  
                });

            });

  
        </script>


        <script type="text/javascript">
            $(document).ready(function(){
                $('#global_type').change(function(){
                    
                    var global_category_id=$(this).val();
                   
                        $.ajax({
                            url:"<?php echo base_url(); ?>Category/fetch_branch",
                            method:"POST",
                           
                            data:{global_category_id:global_category_id},
                            async:'true',
                            dataType:'json',
                            
                            success:function(data){
                                var html='<option disabled selected hidden="" value="">لطفا یک دسته بندی را انتخاب کنید</option>';
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
            <div  class="tab tabical">
            <button class="btn btn-default bt-menu" id="glo">افزودن دسته بندی کلی </button>
            <button class="btn btn-default bt-menu" id="bran">افزودن زیر شاخه </button>
            <button class="btn btn-default bt-menu" id="cate">افزودن دسته بندی</button>
            
            </div>
            <hr>
            <div id="glo_class" class="glo_class">
            <form method="post" action="<?php echo base_url(); ?>Category/addGloCategory">
            
                
                
                
                <div class="form-group">
                <label align="right"> دسته بندی کلی </label>
                    
                    <input class="form-control form-input" type="text" placeholder="نام دسته بندی کلی را وارد نمایید " name="global-cat-glo">
                
                
                </div>
                
                
                
                
                <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="add-glocat-end" >تایید و اتمام</button>
                    <button class="btn btn-secondary " name="add-glocat-next">تایید مورد بعدی </button>
                    
                    <button class="btn btn-danger " name="cancel"  >انصراف</button>
                
                
                </div>
            
            
            
             
            </form>
            
      
            </div>

            <div class="branch_class" id="branch_class">
            <form method="post" action="<?php echo base_url(); ?>Category/addBranchCategory">
            
                
                
                
            <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="type" dir="rtl" name="global-cat-branch">
                    <option disabled selected hidden="">لطفا یک دسته بندی را انتخاب کنید</option>
                     
                         <?php foreach ($global_result as $gcat) : ?>
                        <option value="<?php echo $gcat->global_category_id; ?>"><?php echo $gcat->global_category; ?></option>
                         <?php endforeach; ?>

                    
                    
                    </select>
                
                </div>
                
                
                <div class="form-group">
                <label align="right">نام شاخه بندی</label>
                <input class="form-control form-input" type="text" placeholder="لطفا نام شاخه بندی را وارد نمایید " name="branch-name-branch"> 
                </div>
                
                <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="add-brancat-end" >تایید و اتمام</button>
                    <button class="btn btn-secondary " name="add-brancat-next">تایید مورد بعدی </button>
                    
                    <button class="btn btn-danger " name="cancel"  >انصراف</button>
                
                
                </div>
            
            
            
            
            </form>
            
      
            </div>




            <div id="cate_class" class="cate_class">
            <form method="post" action="<?php echo base_url(); ?>Category/addCategory">
            
              
                
                
                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="global_type" dir="rtl" name="global-cat">
                    <option disabled selected  value="">لطفا یک دسته بندی را انتخاب کنید</option>
                     

                       <?php foreach ($global_result as $gcat) : ?>
                        <option value="<?php echo $gcat->global_category_id; ?>"><?php echo $gcat->global_category; ?></option>
                         <?php endforeach; ?>
                        
                         


                     
                    
                    </select>
                
                </div>
                
                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="branch_type" dir="rtl" name="branch-name">
                    <option disabled selected hidden="" value="">لطفا یک دسته بندی را انتخاب کنید</option>
                     

                        <option value="">لطفا یک دسته بندی را انتخاب نمایید </option>

 
                     
                    
                    </select>
                
                </div>

                  <div class="form-group">
                <label align="right" >نام دسته بندی  </label>
                    <input  class="form-control form-input" type="text" placeholder="نام دسته بندی جدید را وارد نمایید " name="cat-name"> 
                
                </div>

                 <div  class="form-group btn-gr">
                    <button class="btn  btn-success" name="add-cat-end" >تایید و اتمام</button>
                    <button class="btn btn-secondary " name="add-cat-next">تایید مورد بعدی </button>
                    
                    <button class="btn btn-danger " name="cancel"  >انصراف</button>
                
                
                </div>
            
            
            
            
            </form>
            
      
            </div>
            
        
        
        </div>
    
        
       