
        <div class="main">
            <div  class="header">
            <h6>ویرایش دسته بندی ها</h6>
            
            </div >
            <hr>
            <div class="table-div" >
            <table class="table  table-striped table-bordered" >
                
                <thead>
                    <tr>
                <th>ردیف</th>
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
                    
                    <tr>
                <td>1</td>
                <td>95545</td>  
                <td>hhdfd</td>  
                    <td>samsung</td>
                    <td>دارای دو سیم کارت </td>
                    <td><a href="#" class="btn btn-info">ویرایش </a>
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
                
                
                    
             
                </tbody>
            
            </table>
            
           
            </div>
            
            
        
        
        </div>
        
        