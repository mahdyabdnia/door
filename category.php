

 <script type="text/javascript">
            $(document).ready(function(){
                $('#bran').click(function(){
                  $('#branch_class').fadeIn();
                  $('#cate_class').fadeOut();
                  $('#glo_class').fadeOut();
                  
                });

            });


        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#glo').click(function(){
                  $('#branch_class').fadeOut();
                  $('#cate_class').fadeOut();
                  $('#glo_class').fadeIn();
                  
                });

            });


        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#cate').click(function(){
                  $('#branch_class').fadeOut();
                  $('#cate_class').fadeIn();
                  $('#glo_class').fadeOut();
                  
                });

            });


        </script>

















        <div class="main2">
            <div  class="tab tabical">
            <button class="btn btn-default" id="glo">افزودن دسته بندی کلی </button>
            <button class="btn btn-default" id="bran">افزودن زیر شاخه </button>
            <button class="btn btn-default" id="cate">افزودن دسته بندی</button>
            
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
                     
                         <?php foreach ($glo_cat as $gcat) : ?>
                        <option><?php echo $gcat->global_category; ?></option>
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
                    <select class="form-control" id="type" dir="rtl" name="global-cat">
                    <option disabled selected hidden="">لطفا یک دسته بندی را انتخاب کنید</option>
                     

                        <option>لطفا یک دسته بندی را انتخاب نمایید </option>


                     
                    
                    </select>
                
                </div>
                
                <div class="form-group">
                    <label  for="type" align="right" > دسته بندی</label>
                    <select class="form-control" id="type" dir="rtl" name="branch-name">
                    <option disabled selected hidden="">لطفا یک دسته بندی را انتخاب کنید</option>
                     

                        <option>لطفا یک دسته بندی را انتخاب نمایید </option>


                     
                    
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
    
        
       