
        <div class="main2">
            <div  class="header">
            <h6>ویرایش محصولات</h6>
            
            </div >
            <hr>
            <div class="table-div" >
            <table class="table  table-striped table-bordered" >
                
                <thead>
                    <tr>
                
                    <th>کد محصول</th>
                    <th>نام محصول</th>
                    <th>نام برند</th>
                    <th> نام دسته بندی</th>
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


                    <?php foreach ($result as $res) : ?>
                    
                    <tr>
               
                <td><?php echo $res->good_id; ?></td>  
                <td><?php echo $res->good_name; ?></td>  
                    <td><?php echo $res->brand_name; ?></td>
                    <td><?php echo $res->category_name; ?></td>
                    <td><a href="<?php echo base_url(); ?>EditGood/editPage/<?php echo $res->good_id; ?>" class="btn btn-info">ویرایش </a>
                        <button class="btn del btn-danger">حذف</button>
                        
                        
                        
                        <div class="modal" id="del-modal"  role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-body">
                                <div>ایا از حذف ان اطمینان دارید؟</div>
                                <div><button class="btn btn-info yes">بله</button>
                                <button class="btn btn-info no">خیر</button>
                                </div>
                                
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
        
        