<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="X-UA-compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width"/>
    <title>fabOnkar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
    </script>
    <style type="text/css">
        body{
            background-image:url('image/backimage2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
        }
        #sec2{padding-top:50px;}
        #sec4{padding-top:50px;}
        #sec5{padding-top:50px;}
        #sec6{padding-top:50px;}
    </style>
</head>
<body>
<!......................create header body................>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <h2 style="color:white;">fabOnkar</h2> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="index.php"><h5 style="color:white;">HOME</h5></a></li>
        <li><a href="#sec2"><h5 style="color:white;">ABOUT</h5></a></li>
        <li><a data-toggle="modal" href="#myModal"><h5 style="color:white;">LOGIN</h5></a></li>
        <li><a href="#sec4"><h5 style="color:white;">SERVICE</h5></a></li>
        <li><a href="#sec5"><h5 style="color:white;">OFFER</h5></a></li>
        <li><a href="registration.php"><h5 style="color:white;">REGISTER</h5></a></li>
        <li><a href="#sec6"><h5 style="color:white;">CONTACT</h5></a></li>
    </ul>
</div>
    </div>
    </nav><!--------close navigation-->
 <!-- Modal1 -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color:cornflowerblue;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Login Window</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="login.php">
            <input type="email" class="form-control" id="eid" name="eid" placeholder="email"/>
             <input type="password" class="form-control" id="pass" name="pass" placeholder="password" style="margin-top:8px;"/>
                  
            <center><button type="submit" class="btn btn-default" name="login" style="margin-top:8px;margin-left:50px;">login</button>
            <button type="reset" class="btn btn-default" name="reset" style="margin-top:8px;">Reset</button></center>
               </form>
        </div>
        <div class="modal-footer">
         <a href="#" style="text-dacoration:none;margin-left:50px;color:red;">forgot password???</a>
          <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
          
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
   
    <!------main....image box-------->
     <div class="container-fluid" style="margin-top:50px;">
                <div class="row">
                <img src="images/back2.jpg" alt="" class="img-responsive"/>
            </div>
     </div><!.....end of image container....> 
     
     <div id="sec2" class="container-fluid" style="height:auto;background-color:white;">
      
      <div class="row">
          <div class="col-sm-7">
              <h2 style="text-align:center;">ABOUT US</h2>
              <h4><p style="text-align:justify;">Fabonkar Beddings Private Limited is an unlisted private company incorporated on 30 May, 2017. It is a Non-govt company with an Authorized Capital of ₹ 1,00,000 (One Lakh Indian Rupees) and Paid Up Capital of ₹ 10,000 (Ten Thousand Indian Rupees). Corporate Identification Number (CIN) of Fabonkar Beddings Private Limited is U74999BR2017PTC034727 and its Registration Number is 034727. The registered office of the company is at Maa Sharde Complex, East Boring Canal Road, P.S Buddha Colony, P.O. GPO, Patna Bihar India.</p></h4></div>
      <div class="col-sm-5">
       <img src="image/back1.gif" alt="" class="img-responsive" style="border-radius:20px;"/> 
      </div>
      </div><!------close row of about us---------> 
      <h3 style="color:white;">...</h3>
     </div><!--------close div of about us------>
     <div class="container-fluid" style="height:400px;">
    <h1 style="text-align:center;color:orange;margin-top:50px;">Better Quality</h1>
    <h1 style="text-align:center;color:orange;">Better Price.</h1>
    <h1 style="text-align:center;color:white;">Lets Checkout the Bedsheets.</h1>
     </div><!---------blank box 1------------->
     <!------------multiple collection--------->
     <div class="container-fluid" style="height:auto;background-color:white;">
         
     </div><!------------------end of collection of bedsheets---------->
     <div id="sec5" class="container-fluid" style="height:400px;background-color:black;">
          <h2 style="color:white;text-align:center">OFFER ZONE</h2>
          <div class="row">
              <div class="col-sm-5">
                  <img src="images/offer.png" alt="" class="img-responsive"/>
              </div>
              <div class="col-sm-7">
                <center><?php include('timmer.php'); ?></center>  
              </div>
          </div>
         
      </div>
      <div id="sec4" class="container-fluid" style="height:auto;background-color:white;">
          <div class="row">
              <h2 style="color:black;text-align:center">SERVICES</h2>
              <div class="col-sm-9">
               <p style="text-align:justify;">fabONKAR is one of the best bed linen shops in Bihar to offer pure cotton sheets instead of treated polyester. Currently our service is running only in Patna, But after few years our company will expand the business all over the Bihar.</p>
               <p style="text-align:justify;">Our philosophy is that authentic quality linens enhance the quality of your sleep, and hence, your life. And they don't have to be exclusive or intimidating! Everyone should know what it's like to sleep in 100% Egyptian cotton. Because we manufacture in Patna India, not only can we provide exquisite quality, but also exceptional value.</p>
               
               <p style="text-align:justify;">2. New Customers: Overnight, Shopify allowed us to broaden our customer base into other parts of Bihar and the India.</p>
               <p style="text-align:justify;">3.We will Got Organized: When organizing our product line for our online store, we quickly realized that we needed to re-organize some aspects of our brick and mortar store. Shopify has become our best product organization tool. It's cleaned things up and streamlined us online and off.</p>
              </div>
              <div class="col-sm-3">
                  <img src="image/services.png" class="img-responsive"/>
              </div>
          </div>
      </div>
      
     
     <!------contact us form work------->
    <div id="sec6" class="container-fluid" style="height:autopx;background-color:black;">
     <div class="row">
        <h2 style="text-align:center;color:white;">CONTACT</h2>
         <div class="col-sm-3">
             <p style="text-align:center;color:white;">Contact: +919905378461</p>
             <p style="text-align:center;color:white;">Email us: fabonkar@gmail.com</p>
          <h4><p style="text-align:justify;color:white;">ADDRESS: Maa Sharde Complex, East Boring Canal Road, Patna India pin: 800001</p></h4>   
         </div>
         <div class="col-sm-4">
             
         </div>
         <div class="col-sm-4">
            <form method="post" action="">
            <input type="text" class="form-control" placeholder="name" name="pname"/>
            <input type="email" class="form-control" placeholder="email id" name="email" style="margin-top:10px;"/>
             <input type="text" class="form-control" placeholder="mob no" name="mobile" style="margin-top:10px;"/>
            <textarea class="form-control" style="margin-top:10px;" placeholder="message" name="text"></textarea>
              <button type="submit" class="form-control" name="login" style="margin-top:10px;background-color:blue;">CONTACT US</button> 
              
              </form> 
              <h2>......</h2>
         </div>
         
     </div>    
     </div><!-----contact us form work end------------->
     
    <?php
    
    if(isset($_POST["login"]))
    {
        $nm= $_POST["pname"];
        $eid= $_POST["email"];
        $mob= $_POST["mobile"];
        $txt= $_POST["text"];
        $query= "insert into contact values('".$nm."','".$eid."',".$mob.",'".$txt."')";
        if(mysqli_query($bd, $query))
        {
        echo"<script>alert('Successfully Saved')</script>";
        }
        else{
         echo"<script>alert('Error!!!!')</script>";   
        }
        mysqli_close($bd);
        
    }
    ?><!------php work for contact form------------>
    
    <div class="container-fluid" style="background-color:silver;">
        <p style="text-align:center;">Copyright2018@fabOnkar PVT. LTD.</p>
        <p>Developed By:- Keshab kumar Mishra</p>
    </div>
</body>
</html>