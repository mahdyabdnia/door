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



        <div class="main">
            <div  class="tab tabical">
            <button class="btn btn-default" id="glo">افزودن دسته بندی کلی </button>
            <button class="btn btn-default" id="bran">افزودن زیر شاخه </button>
            <button class="btn btn-default" id="cate">افزودن دسته بندی</button>
            
            </div>
            <hr>




<div class="table-div" id="glo_class">
            <table class="table  table-striped table-bordered" >
                
                <thead>
                    <tr>
              
                    <th>کد دسته بندی کلی</th>
                    
                    <th>دسته بندی کلی</th>
                   
                    <th>عملیات</th>
                </tr>
                </thead>
                 
                
                <script>
                $(document).ready(function(){
                    $(".table-div table tbody tr td .del").click(function(){
                       $("#del-modal").stop(true).show();
                        
                    });
                    
                    
                });
                    
                
                </script>
                
                <script>
                $(document).ready(function(){
                    $(".no").click(function(){
                        $("#del-modal").fadeOut();
                    });
                    
                });
                
                
                </script>
                
                <script></script>
                
                
                
                <tbody>

                    <?php  foreach ($global_result as $glores): ?>
                    
                    <tr>
                
                <td><?php echo $glores->global_category_id; ?></td>  
            
                    <td><?php echo $glores->global_category; ?></td>
                    
                    <td><a href="<?php echo base_url(); ?>EditCategory/editPage/<?php echo $res->category_id; ?>" class="btn btn-info">ویرایش </a>
                        <button class="btn del btn-danger">حذف</button>
                        
                        
                        
                        <div class="modal" id="del-modal"  role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-body">

                                <form action="<?php echo base_url(); ?>EditCategory/delete/<?php echo $res->category_id; ?>" method="post">
                                    <div>ایا از حذف ان اطمینان دارید؟</div>
                                <div><button class="btn btn-info yes" name="del_yes">بله</button>
                                
                                </div>
                                    



                                </form>

                                <div><button class="btn btn-info no">خیر</button></div>
                                
                                
                                </div>
                            
                            </div>
                            
                            
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        </td>
                </tr>
                <?php endforeach; ?>
                
                    
             
                </tbody>
            
            </table>
            
           
            </div>


            <div class="table-div" id="branch_class">
            <table class="table  table-striped table-bordered" >
                
                <thead>
                    <tr>
              
                    <th> کد دسته بندی زیر شاخه</th>
                    <th>زیر شاخه </th>
                    <th>دسته بندی کلی</th>
                   
                    <th>عملیات</th>
                </tr>
                </thead>
                 
                
                <script>
                $(document).ready(function(){
                    $(".table-div table tbody tr td .del").click(function(){
                       $("#del-modal").stop(true).show();
                        
                    });
                    
                    
                });
                    
                
                </script>
                
                <script>
                $(document).ready(function(){
                    $(".no").click(function(){
                        $("#del-modal").fadeOut();
                    });
                    
                });
                
                
                </script>
                
                <script></script>
                
                
                
                <tbody>

                    <?php  foreach ($branch_result as $branres): ?>
                    
                    <tr>
                
                <td><?php echo $branres->branch_category_id; ?></td>  
                <td><?php echo $branres->branch_category; ?></td>
                    <td><?php echo $branres->global_category; ?></td>
                    
                    <td><a href="<?php echo base_url(); ?>EditCategory/editPage/<?php echo $res->category_id; ?>" class="btn btn-info">ویرایش </a>
                        <button class="btn del btn-danger">حذف</button>
                        
                        
                        
                        <div class="modal" id="del-modal"  role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-body">

                                <form action="<?php echo base_url(); ?>EditCategory/delete/<?php echo $res->category_id; ?>" method="post">
                                    <div>ایا از حذف ان اطمینان دارید؟</div>
                                <div><button class="btn btn-info yes" name="del_yes">بله</button>
                                
                                </div>
                                    



                                </form>

                                <div><button class="btn btn-info no">خیر</button></div>
                                
                                
                                </div>
                            
                            </div>
                            
                            
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        </td>
                </tr>
                <?php endforeach; ?>
                
                    
             
                </tbody>
            
            </table>
            
           
            </div>


            <div class="table-div" id="cate_class">
            <table class="table  table-striped table-bordered" >
                
                <thead>
                    <tr>
              
                    <th>کد دسته بندی</th>
                    <th>نام دسته بندی</th>
                    <th>دسته بندی کلی</th>
                    <th>زیر شاخه </th>
                    <th>عملیات</th>
                </tr>
                </thead>
                 
                
                <script>
                $(document).ready(function(){
                    $(".table-div table tbody tr td .del").click(function(){
                       $("#del-modal").stop(true).show();
                        
                    });
                    
                    
                });
                    
                
                </script>
                
                <script>
                $(document).ready(function(){
                    $(".no").click(function(){
                        $("#del-modal").fadeOut();
                    });
                    
                });
                
                
                </script>
                
                <script></script>
                
                
                
                <tbody>

                    <?php  foreach ($result as $res): ?>
                    
                    <tr>
                
                <td><?php echo $res->category_id; ?></td>  
                <td><?php echo $res->category_name; ?></td>  
                    <td><?php echo $res->global_category; ?></td>
                    <td><?php echo $res->branch_category; ?></td>
                    <td><a href="<?php echo base_url(); ?>EditCategory/editPage/<?php echo $res->category_id; ?>" class="btn btn-info">ویرایش </a>
                        <button class="btn del btn-danger">حذف</button>
                        
                        
                        
                        <div class="modal" id="del-modal"  role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-body">

                                <form action="<?php echo base_url(); ?>EditCategory/delete/<?php echo $res->category_id; ?>" method="post">
                                    <div>ایا از حذف ان اطمینان دارید؟</div>
                                <div><button class="btn btn-info yes" name="del_yes">بله</button>
                                
                                </div>
                                    



                                </form>

                                <div><button class="btn btn-info no">خیر</button></div>
                                
                                
                                </div>
                            
                            </div>
                            
                            
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        </td>
                </tr>
                <?php endforeach; ?>
                
                    
             
                </tbody>
            
            </table>
            
           
            </div>
            
            
        
        
        </div>
        
        