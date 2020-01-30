   
    <div class="main">


            <?php  foreach ($detail as $det ) :?>
        <div class="ro1">
        <div class="ro1-part1">
            <p>وضعیت کاربران</p>
            <div>
            <div><p>  بازدید کنندگان  امروز<i class="far fa-eye" style="font-size: 21px;margin-left: 10px"></i></p>
                <p><?php  echo $det->viewer; ?></p>
                <hr style="height: 1px;background: #D37476;margin-bottom: 15px;margin-top: auto;width: 200px;">
                
                </div>
                <div><p>سشن های امروز<i class="far fa-eye" style="font-size: 21px;margin-left: 10px"></i></p>
                <p><?php echo $det->session ?></p>
                     <hr style="height: 1px;background: #51CE91;margin-bottom: 15px;margin-top: auto;width: 200px;">
                
                </div>
            
            </div>
            
            </div> 
            
            <div class="em-div"></div>
            <div class="ro1-part2">
                <i style="color: white;margin-top: 20px;margin-left: 20px; font-size: 30px;" class="fas fa-box"></i>
                
                <p class="p1"> کل  کالاهای ثبت شده </p>
                <p class="p2"><?php echo $det->good ?></p>
            
            </div>
            
            <div class="em-div"></div>
            <div class="ro1-part3">
               <i style="color: white;margin-top: 20px;margin-left: 20px; font-size: 30px;" class="fas fa-user"></i>
                
                <p class="p1"> تعداد اعضا سایت </p>
                <p class="p2"><?php echo $det->users_counter ?></p>
            </div>
            
            
            </div>


        <?php endforeach; ?>
        </div>
       