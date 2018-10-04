<?php
include("db.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="X-UA-compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Registration</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body{background-color:wheat;}
    </style>
</head>
<body>
 <div class="container-fluid navbar-fixed-top" style="background-color:brown;">
     <h3 style="color:white;text-align:center;">fabOnkar Beddings Pvt. Ltd.</h3>
     <h5><a href="index.php" style="text-align:right;color:white;">HOME</a></h5>
 </div> 
 
 <div class="container-fluid" style="margin-top:82px;">
 <p style="border:1px solid white;"></p>
 <h4 style="color:white;text-align:center;">Leadership Registration Form</h4>
 <p style="border:1px solid white;"></p>
 <div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-8">
     <form method="post" action="">
<div class="form-group row">
      <lebel class="col-sm-2">Shop Name</lebel>
      <div class="col-sm-8">
          <input type="text" class="form-control" name="sname"/>
      </div></div>
      <div class="form-group row">
      <lebel class="col-sm-2">Address</lebel>
      <div class="col-sm-4">
          <textarea class="form-control" name="address"></textarea>
      </div>
      <lebel class="col-sm-1">City/Town</lebel>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="city"/>   
      </div>
      </div> 
      <div class="form-group row">
      <label class="col-sm-2">GST No</label>
      <div class="col-sm-3">
       <input type="text" class="form-control" name="gst"/>   
      </div>
        <label class="col-sm-1">Phone No</label>
      <div class="col-sm-3">
       <input type="text" class="form-control" name="phone"/>   
      </div>
        </div>
        <div class="form-group row">
      <label class="col-sm-2">Owner Name</label>
      <div class="col-sm-4">
       <input type="text" class="form-control" name="oname"/>   
      </div>
        <label class="col-sm-1">Mobile No</label>
      <div class="col-sm-3">
       <input type="text" class="form-control" name="mob"/>   
      </div>
        </div>
        <div class="form-group row">
      <label class="col-sm-2">Email</label>
      <div class="col-sm-4">
       <input type="text" class="form-control" name="email"/>   
      </div>
        <label class="col-sm-1">Aadhhar</label>
      <div class="col-sm-3">
       <input type="text" class="form-control" name="aadhhar"/>   
      </div>
        </div>
        <div class="form-group row">
      <label class="col-sm-2">Password</label>
      <div class="col-sm-3">
       <input type="password" class="form-control" name="password"/>   
      </div>
        <label class="col-sm-2">Re-Password</label>
      <div class="col-sm-3">
       <input type="password" class="form-control" name="repassword"/>   
      </div>
        </div>
        <div class="row">
            <center><button type="submit" class="btn btn-default" name="submit">SUBMIT</button>
            <button type="reset" class="btn btn-default" name="reset">RESET</button></center>
            <p style="color:silver;"></p>
        </div>
         </form><!-------end of form---->
         </div>
         <div class="col-sm-2" style="height:400px;width:300px;border:2px solid white;">
             <img src="image/profile.png" class="img-responsive"/>
         </div>
         </div> <!------work for form---end row----->
 </div> 
</body>
<?php
    if(isset($_POST["submit"]))
    {
    
        $snm=$_POST["sname"]; 
        $add=$_POST["address"];
        $town=$_POST["city"];
        $gstno=$_POST["gst"];
        $ph=$_POST["phone"];
        $name=$_POST["oname"];
        $mn=$_POST["mob"];
        $eid=$_POST["email"];
        $aadh=$_POST["aadhhar"];
        $pass=$_POST["password"];
        $repass=$_POST["repassword"];
        $id= "NULL";
        $query= "insert into registration values(".$id.",'".$snm."','".$add."','".$town."',".$gstno.",".$ph.",'".$name."',".$mn.",'".$eid."',".$aadh.",'".$pass."','".$repass."')";
        if(mysqli_query($bd, $query))
        {
        echo"<script>alert('Successfully Saved')</script>";
        mysql_close($bd);
        }
         else
        {
          echo"<script>alert('Data not Saved please check it!')</script>";   
         }
    }
    ?>
</html>