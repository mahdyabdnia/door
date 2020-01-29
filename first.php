   
   <!doctype html>
<html>
<head>

     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/custom.css">
</head>

<body>
    
    <div class="container-fluid container-part5">
    <div class="row">
        <div class="side-nav">
            <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/first">پیشخوان</a></li>
                <hr>
            <li class="nav-item dropdown"><a class="nav-link" href="#">دسته بندی ها</a>
                <ul class="dropdown-menu dropdown-mnu" >
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/category">افزودن  دسته بندی</a></li>
                    <li><a class="dropdown-item">ویرایش دسته بندی</a></li>
                    <li><a class="dropdown-item">حذف دسته بندی</a></li>
                    <script>
                    $(document).ready(function(){
                        $(".side-nav ul li").hover(function(){
                            $(this).children("ul").stop(true).slideToggle();
                        });
                    });
                    
                    
                    </script>
                   
                </ul>
                
                </li><hr>
                
                      <li class="nav-item dropdown"><a class="nav-link" href="#">کالا</a>
                <ul class="dropdown-menu dropdown-mnu" >
                <li><a class="dropdown-item">افزودن کالا</a></li>
                    <li><a class="dropdown-item">ویرایش کالا</a></li>
                     <li><a class="dropdown-item">حذف کالا</a></li>
                    
                   
                   
                </ul>
                
                </li><hr>
                
                      <li class="nav-item dropdown"><a class="nav-link" href="#">مدیریت اعضا</a>
                <ul class="dropdown-menu dropdown-mnu" >
                <li><a class="dropdown-item">تایید عضویت</a></li>
                    <li><a class="dropdown-item">تعلیق عضویت</a></li>
                    <li><a class="dropdown-item">تعلیق عضویت</a></li>
                    <li><a class="dropdown-item">تعلیق عضویت</a></li>
                    <li><a class="dropdown-item">تعلیق عضویت</a></li>
                    
                  
                   
                </ul>
                
                </li>
                <hr>
                
                      <li class="nav-item dropdown"><a class="nav-link" href="#">مدیریت کالا</a>
                <ul class="dropdown-menu dropdown-mnu" >
                <li><a class="dropdown-item">افزودن کالا</a></li>
                    <li><a class="dropdown-item">ویرایش کالا</a></li>
                     <li><a class="dropdown-item">حذف کالا</a></li>
                    
                   
                   
                </ul>
                
                </li><hr>
                
                       <li class="nav-item dropdown"><a class="nav-link" href="#"> مدیریت سفارشات</a>
                <ul class="dropdown-menu dropdown-mnu" >
                <li><a class="dropdown-item">نمایش سفارشات</a></li>
                    <li><a class="dropdown-item">کنترل سفارشات</a></li>
                     
                    
                   
                   
                </ul>
                
                </li><hr>
                
                       <li class="nav-item dropdown"><a class="nav-link" href="#">مدیریت دیدگاه ها </a>
                <ul class="dropdown-menu dropdown-mnu" >
                <li><a class="dropdown-item">کنترل دیدگاه ها </a></li>
                    
                    
                   
                   
                </ul>
                
                </li><hr>
                
            </ul>
        
        
        </div>
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
        </div>
    
    </div>
    
    
</body>
</html>