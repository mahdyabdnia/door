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
            	<button class="btn btn-success send" style="margin:auto;margin-left:500px; " data-orderid="<?php echo $ord->order_id; ?>"> ارسال بسته </button>
            	<button onclick="goBack()" class="btn btn-info back" >بازگشت به صفحه قبل</button>
            	<button class="btn btn-danger delete" style="margin: auto;"  data-orderid="<?php echo $ord->order_id; ?>">کنسل کردن  سفارش </button>
            </div>	




<?php endforeach; ?>
</div>



<script>
function goBack() {
  window.history.back();
}
</script>



<script type="text/javascript">
	$(document).ready(function(){
     $('.delete').click(function(){
       var order_id=$(this).data("orderid");
       $.ajax({
         url:"<?php echo base_url(); ?>Orders/deleteOrder",
         data:{order_id:order_id},
         method:"post",
         success:function(data){
         	window.history.back();
         }
         




       });
     });
	});


</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('.send').click(function(){
			var order_id=$(this).data("orderid");
			$.ajax({
             url:"<?php echo base_url(); ?>Orders/sendOrder",
             data:{order_id:order_id},
             method:"post",
             success:function(data){
             	window.history.back();
             }
			});

		})
	});



</script>