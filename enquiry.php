<?php
    $pName      = $_GET["pn"];
    $pId        = $_GET["pid"];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $mobile     = intval($_POST['mobile']);
    $from       = 'admin@getsethome.com'; 


    // echo $pName."-".$pId."-".$name."-".$email."".$mobile;
    // exit();

    $rexMobile  = "/^[789][0-9]{9}$/";
 
    $pickDay    = $_POST['pickDay']; // required
    $pickSlot   = $_POST['pickSlot']; // required
    

    $message  = "You have received a sales lead. Kindly get in touch with the seeker on priority.<br /><br /> Time:". date("l jS \of F Y h:i:s A") ."<br /> Name: $name <br /> E-Mail ID: $email<br /> Mobile Number: $mobile<br /> Visit Date: $pickDay<br /> Visit Time: $pickSlot<br /><br />Cheers,<br />Admin.";

    // Check if name has been entered`
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }
    
    //Check if simple anti-bot test is correct
    if(!preg_match($rexMobile, $mobile)) { 
        $errMobile = 'check your Mobile number';
    }

    ini_set("SMTP","mail.getsethome.com" ); 
    ini_set("sendmail_from", "admin@getsethome.com");
    
    $to             =   "sales@getsethome.com, junaid.shaikh@flipside.co.in, vanky111@gmail.com";
    $subject        =   $pName." ".$pId;
    $headers        =   "MIME-Version: 1.0" . "\r\n";
    $headers        .=  "Content-Type: text/html; charset=iso-8859-1\r\n";
    $headers        .= "From: <admin@getsethome.com>";

    //error_reporting(E_ALL);
    //ini_set('display_errors', 1); 
    
    /*require "config/global.php";        
    require "comlib/clsMyDBEngine.php"; 
    
    //Insert query
    $strQuery = "INSERT INTO tblenquiry VALUES ('".$pId."','".$pName."','','".$name."','".$email."','".$mobile."','".$pickDay."','".$pickSlot."');";


    $objDB = new clsMyDBEngine();

    if(!$objDB->blnExecute($strQuery)) {                    
        echo 'Query failed';
        exit();             
    }*/

     /*CREATE TABLE tblEnquiry
    (
        Sub_strProductID VarChar(100),
        Sub_strProductName VarChar(100),
        Sub_strName VarChar(100),
        Sub_strEmail VarChar(100),
        Sub_strPhoneNo VarChar(20),
        Sub_strVisitDate VarChar(100),
        Sub_strVisitTime VarChar(100),
        Sub_strType VarChar(10), -- Type is used to indentify news letters or some other page etc
        PRIMARY KEY(Sub_strEmail, Sub_strType) 
    )*/

    $ch = curl_init();
    curl_setopt($ch, CURL_URL, "http://smcbazaar.com/email.php");
    curl_setopt($ch, CURL_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array("pn"=> $pName, "pid"=> $pId, "name"=> $name, "email"=> $email, "mobile"=> $mobile, "str_Type"=>"enquiry"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $result = curl_exec($ch);

    
    if(mail($to, $subject, $message, $headers)) {
        header('Location: /thank-you?&id=2');
    } else {
        echo "fail";
    }
?>