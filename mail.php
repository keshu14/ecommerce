<?php
    if(isset($_POST['submit']))
    {
         $nm= $_POST["pname"];
        $eid= $_POST["email"];
        $mob= $_POST["mobile"];
        $txt= $_POST["text"];
        
        $to='keshabkumarmishra@gmail.com';
        $subject='form submission';
        $message="Name:".$nm."\n".$mob."wrote following:"."\n\n".$txt;
        $headers="from:".$eid;
        if(mail($to, $subject, $message, $headers))
        {
            echo"<h1>successfully sent.....</h1>";
        }
    }
?>