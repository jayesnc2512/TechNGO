<?php  
 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "hackoverflow";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ".mysqli_connect_error());  
 }

 $emailID = $_GET['emailID'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volunteer1 registration</title>
    <link rel="stylesheet" href="v_1.css">
</head>
<body>
    <form action="mailto:<?php echo '$emailID'?>" method="post" enctype="text/plain">
    
        <h1>Volunteer registration</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" size="20" required>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" size="30" required>
  
          <label for="add">Address:</label>
          <input type="text" name="add" id="v_add" size="100" required>
  
          <label for="age">Age:</label>
          <input type="number" name="age" id="v_age" size="3" required>
          
          <label for="contact no.">Contact no.:</label>
          <input type="number" name="contact " id="c-no" size="13" required >
          
          <label>Gender:</label>
          <input type="radio" id="under_13" value="under_13" name="user_age" ><label for="under_13" class="light">Male</label><br>
          <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">Female</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Why do want to become volunteer?:</label>
          <textarea id="bio" name="user_desc" required></textarea>
        </fieldset>
        <fieldset>
        
        <button type="submit">Submit</button>
      </form>
    
</body>
</html>