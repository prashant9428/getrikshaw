
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
      day :<input type="text" name="day" /> 
      month :<input type="text" name="month" /> 
      year :<input type="text" name="year" /> 
      <input type="submit" name="b2" /> 
      </form>
      <?php 
 if(isset($_POST['b2'])){
  $day = $_POST['day'];
  $month = $_POST['month'];
  $year= $_POST['year'];

  $date = date("Y-m-d");
   echo "$date </br>";
  
   $future= date('Y-m-d ', mktime(date('h'),date('i'),date('s'),date($month),date($day)+31,date('2016')))."\n";
   
   echo "$future </br>";
   if($future <= $date){
     echo "<script> alert('you have few day remaining')</script>";  
   }
   else{
     echo "<script> alert('your day completed')
         window.open('index.php','_self')
</script>";    
   }
 }
?>
    </body>
</html>
