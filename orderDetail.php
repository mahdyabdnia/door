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
             	<td>عدم ارسال</td>


             </tr>




           
            </table>

            <div >
            	<button class="btn btn-success" style="margin:auto;margin-left:500px; " > ارسال بسته </button>
            	<button class="btn btn-info">بازگشت به صفحه قبل</button>
            	<button class="btn btn-danger" style="margin: auto;">کنسل کردن  سفارش </button>
            </div>	




<?php endforeach; ?>
</div>