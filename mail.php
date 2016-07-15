<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       <?php  
   ini_set("sendmail_from", "support@getrikshaw.com");  
   $to = "pathakprashant840@gmail.com";//change receiver address  
   $subject = "This is subject";  
   $message = "This is simple text message.";  
   $header = "From:support@getrikshaw.com \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }  
?>  
    </body>
</html>
