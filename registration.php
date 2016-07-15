
<html>
    
<head>
        <meta charset="utf-8">
        <?php include("navcode.php") ?>
        <title>Sign Up Form</title>
        
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    
    
    <body style="background-color:">
        
      <!-----header-section------>
         <div>   <?php include("header.php") ?> </div>
     <!----- //End-header---->
     
     
     <form action="registration.php" method="post">
      
        <h1>Register your cab</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="uname" placeholder="your full Name">
           
     
          <label for="number">mobile :</label>
          <input type="text" id="number" maxlength="10" name="mobile" placeholder="10 digit mobile number">
          
          
         
          
          
        </fieldset>
        <fieldset>
          <legend><span class="number">2</span>Your vehicle profile</legend>
           <label for="id">vehicle name: :</label>
           <input type="text" id="user_id" name="vehicle_name" placeholder="vehicle name">
       
           
          
          <label for="user_address">address:</label>
          <input type="text"  name="vehicle_add" placeholder="your address or landmark">
          
           <label for="Ride_address">where you ride your cab?</label>
          <input type="text"  name="ride_add" placeholder="where people can reach you easily give landmark">
           
          
           <label for="platform">Do you ride your cab at night?</label>
          <select name="platform">
               <option>platform 1</option>
               <option>platform 6</option>
           </select>
          
           <label for="city">city:</label>
          <select name="city">
              <option>jabalpur</option>
          </select>    
        
        <label for="night">Do you ride your cab at night?</label>
          <select name="night">
              <option>yes</option>
               <option>NO</option>
          </select>
          
          <label for="gender">Gender:</label>
          <select name="gender">
              <option> male</option>  
              <option> female</option>
              <option> other</option>  
              
          </select>
        
          <label for="age">age :</label>
          <input type="text"  name="age" placeholder="write your age">
           
          <label for="year">year:</label>
          <select name="year">
              <option><option><?php  echo date("Y") ?></option>  
              
              
          </select>
          <label for="month">month:</label>
          <select name="month">
              <option><option><?php  echo date("m") ?></option>  
              
              
          </select>
          <label for="day">day:</label>
          <select name="day">
              <option><option><?php  echo date("d") ?></option>  
             
          </select>
        
        
        </fieldset>
       
        <button type="submit" name="b1" onclick="msg()">Register</button>
        
      </form>
 <?php
include("db.php");

if(isset($_POST['b1'])){
   
   $uname = $_POST['uname'] ;
   $mobile = $_POST['mobile'] ;
   
   $vehicle_name = $_POST['vehicle_name'] ;
   
   $vehicle_add = $_POST['vehicle_add'] ;
   $ride_add = $_POST['ride_add'] ;
   
   $platform = $_POST['platform'];
   $city = $_POST['city'] ;
   $night = $_POST['night'] ;
   $gender = $_POST['gender'] ;
   $age = $_POST['age'] ;
   $year = $_POST['year'] ;
   $month = $_POST['month'] ;
   $day = $_POST['day'] ;
   
   $next_pay_date= date('Ymd ', mktime(date('h'),date('i'),date('s'),date($month),date($day)+31,date($year)))."\n";
   $payment ='yes';
  $query = "insert into vehicle_data (uname,mobile,vehicle_name,vehicle_add,ride_add,platform,city,night,gender,age,year,month,day,next_pay_date,payment) values('$uname','$mobile','$vehicle_name','$vehicle_add','$ride_add','$platform','$city','$night','$gender','$age','$year','$month','$day','$next_pay_date','$payment')";
        
        $submit = mysqli_query($link,$query);
        if ($submit) {
            
            echo "<script> alert('record succesfully saved')</script>"; 
        }
        
        else{
             echo "<script> alert('something wrong')</script>";  
        }
    
}

?>
   
     
     <div> <?php include("footer.php") ?></div>
    </body>
</html>