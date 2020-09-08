
        <div class="main2">
            <div  class="header">
            <h6>مشاهده سفارشات  </h6>
            
            </div >
            <hr>
            <div class="table-div" >
            <table class="table  table-striped table-bordered" >
                
                <thead>
                    <tr>
                <th>ردیف</th>
                    <th>نام کالا</th>
                    <th>کد کالا</th>
                        <th>تعداد سفارش </th>
                         <th>نام کاربری خریدار </th>
                        
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
                <?php foreach($orders as $order): ?>
                <tr>
                 <td>1</td>
                    <td><?php echo $order->good_name; ?></td>
                    <td><?php echo $order->good_id; ?></td>
                    <td><?php echo $order->order_num; ?></td>
                    <td><?php echo $order->username; ?></td>
                    <td class="opt">
                    <button class="btn btn-info">
                        <a href="<?php echo base_url(); ?>Orders/orderPage/<?php echo $order->order_id;  ?>" style="text-decoration: none;color: white;">مشاهده کامل  و کنترل  سفارش    </a>
                     </button>
                        </td>
                  </tr>
                 
                 <?php endforeach; ?>
                
                
                
                
                
                
                </tbody>




            
            </table>
            
           
            </div>
            
            <div class="btn-gr">
            <?php echo $links; ?>
          
            
            </div>
            
            
        
        
        </div>
        
        