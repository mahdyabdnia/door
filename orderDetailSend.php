 <div class="main2 table-div">
            <div  class="header">
            <h6>مشاهده و  کنترل سفارش</h6>
            
            </div >
            <hr>

            <table class="table">
            	<?php foreach($order as $ord): ?>
             <tr>
             	<th>نام کالا</th>
             	<td><?php echo $ord->good_name; ?></td>
             	


             </tr>  


              <tr>
             	<th>کد کالا</th>
             	<td><?php echo $ord->good_id; ?></td>
             	


             </tr>

             <tr>
             	<th>نام کاربر </th>
             	<td><?php echo $ord->orginal_name; ?></td>


             </tr>

             <tr>
             	<th>آدرس ارسال </th>
             	<td><address><?php echo  $ord->user_address; ?></address></td>


             </tr>

             <tr>
             	<th>تاریخ ارسال</th>
             	<td><time><?php echo  $ord->send_date; ?></time></td>


             </tr>


             <tr>
             	<th>ساعت ارسال</th>
             	<td>بین ساعت  <time><?php echo $ord->send_time1; ?></time> تا  ساعت   <time ><?php echo $ord->send_time1; ?></time></td>


             </tr>

             <tr>
             	<th>تعداد کالا</th>
             	<td><?php echo $ord->order_num; ?> </td>


             </tr>



             
        <tr>
             	<th>هزینه کل کالا</th>
             	<td><?php echo $ord->subtotal; ?></td>


             </tr>


             <tr>
             	<th>وضعیت سفارش</th>
             	<?php $state=$ord->order_state; ?>
             	<?php if($state=="sending"): ?>
                  <td>
                  	در حال ارسال 
             	</td>
             	<?php elseif($state=="sended"): ?>
             	 <td>
             	 	تحویل داده شده است 

             	 </td>	

             	<?php endif; ?>




             	


             </tr>




           
            </table>

           
            	<?php $state=$ord->order_state; ?>
             	<?php if($state=="sending"): ?>
                  <div style="display: flex;flex-direction: row;" >
            	<form action="<?php echo base_url(); ?>SendOrders/successSend/<?php echo $ord->order_id; ?>" method="post"><button class="btn btn-success sendsucc" name="sendsucc" style="margin:auto;margin-left:500px; " data-orderid="<?php echo $ord->order_id; ?>">ارسال و تحویل موفق</button>
                 


            	</form>

            	<button onclick="goBack()" class="btn btn-info back"style="margin-left:80px;height: 50%;" >بازگشت به صفحه قبل</button>
                  </div>
            	<?php elseif($state=="sended"): ?>
            	<div>
            	<button onclick="goBack()" class="btn btn-info back" style="margin-left:600px;">بازگشت به صفحه قبل</button>
                </div>
            <?php endif; ?>
            	
           	




<?php endforeach; ?>
</div>



<script>
function goBack() {
  location.replace("<?php echo base_url(); ?>SendOrders");
}
</script>






