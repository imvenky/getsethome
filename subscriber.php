<?php
    
    $from       = 'admin@getsethome.com'; 

    $email 		= $_POST['email'];
    

    $to             =   "junaid.shaikh@flipside.co.in, vanky111@gmail.com";
    $subject 		= 	"New subscription of GetSetHome";
    $message 		= 	'New user has been suscbribed, Email ID is (' . $_POST['email'] . ')';

    ini_set("SMTP","mail.getsethome.com" ); 
    ini_set("sendmail_from", "admin@getsethome.com");
    
    
    $headers        =   "MIME-Version: 1.0" . "\r\n";
    $headers        .=  "Content-Type: text/html; charset=iso-8859-1\r\n";
    $headers        .=  "From: <admin@getsethome.com>";
    
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1); 
    
    /*require "config/global.php";        
    require "comlib/clsMyDBEngine.php"; 
    
    //Sanity for your paramters
    if(!isset($email)) die("Parameter - email not specified in url!!");
    
    //Insert query
    $strQuery = "INSERT INTO tblsubscribers VALUES ('". $email ."');";
        
    
    $objDB = new clsMyDBEngine();

    if(!$objDB->blnExecute($strQuery)) {                    
        echo 'Query failed';
        exit();             
    } 
    
    if(!$objDB->blnExecute($strQuery)) {                    
        echo 'Query failed';
        exit();             
    }*/

    $username = "getset";
    $password = "homeemail";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://smcbazaar.com/email.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array("email"=> $email, "str_Type"=>"subscriber", "Command" => "subscriber"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    $result = curl_exec($ch);
    
    if($result == 1) {

        if(mail($to, $subject, $message, $headers)) {
            
            header('Location: /thank-you?&id=1');
        
        } else {
            
            echo "fail";
        }
    
    } else {

            echo "fail";
    }

    /* CREATE TABLE tblSubscribers 
    (
        Sub_strEmail VarChar(100),
        Sub_strName VarChar(100),
        Sub_strPhoneNo VarChar(20),
        Sub_strType VarChar(10), -- Type is used to indentify news letters or some other page etc
        PRIMARY KEY(Sub_strEmail, Sub_strType) 
    */
?>