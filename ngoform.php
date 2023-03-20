<?php  
 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "hackoverflow";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ".mysqli_connect_error());  
 }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ngoform.css">
    <title>Ngo Detail form</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">  
        <div class="container">  
          <h1 style="text-align: center;"> Fill Details To Create Template</h1>  
        <hr>  

        <label> <b>NGO Name</b> </label>       
      <input type="text" name="Name" placeholder= "NGO Name" maxlength="20" required />   
     
      <label> <b>Title/Moto</b> </label>  
      <input type="text" name="title" placeholder="Title/Moto" maxlength="50" required />

      <label><b>Short Description</b> </label>    
      <input type="text" name="S_describe" placeholder="Short Description" maxlength="150" required />   
      
      <label><b>Tell Us about Your NGO</b> </label> <br>   
      <textarea  name="aboutNgo" placeholder="About NGO" maxlength="1000"  required >  </textarea><br>
      
      <label><b>Address</b> </label>    
      <input type="text" name="Address" placeholder="Address"  required /> 
      
      <label><b>phone</b> </label>    
      <input type="phone" name="phone"  maxlength="13" required /> 
      
      <label><b>Email ID</b> </label>    
      <input type="email" name="emailID"  maxlength="75" required /><br> <br>

      <label><b>Instagram Handle of your NGO</b> </label>    
      <input type="text" name="insta" placeholder="Link" maxlength="100" required /> 
      
      <label><b>Other Social Media</b> </label>    
      <input type="text" name="other_social"  maxlength="100" required />
      
      

      <label><b>Why Should One Volunteer</b> </label>   <br> 
      <textarea  name="volunteer_outcome"  maxlength="1000" required ></textarea><br> 
<br>
      <label><b>WHY Should One Donate</b> </label>    <br><br>
      <textarea name="donar_outcome"  maxlength="1000" required > </textarea>
<br><br>

      <hr>
      <h2>Founders Details</h2>

      <label><b>Founder-1 Name</b> </label>    
      <input type="text" name="founder1_name"  maxlength="100" required /> 

      <label><b>Founder-2 Name</b> </label>    
      <input type="text" name="founder2_name"  maxlength="100" required /> 

      <label><b>Short description about Founder 1</b> </label>    
      <input type="text" name="founder1_describe"  maxlength="200" required /> 

      <label><b>Short description about Founder 2</b> </label>    
      <input type="text" name="founder2_describe"  maxlength="200" required /> 


      <label><b>Image pf Founder 1</b> </label>    
      <input type="file" name="founder1_pic" accept="image/png, image/jpg"required /> 
      
      <label><b>Image pf Founder 2</b> </label>    
      <input type="file" name="founder2_pic" accept="image/png, image/jpg"required /> 

      <hr>
            <h2>TOP 3 Donations</h2>

      <label><b>Donation-1 Name</b> </label>    
      <input type="text" name="donar1_name"  maxlength="100" required /> 

      <label><b>Donation-2 Name</b> </label>    
      <input type="text" name="donar2_name"  maxlength="100" required /> 

      <label><b>Donation-3 Name</b> </label>    
      <input type="text" name="donar3_name"  maxlength="100" required /> 

      <label><b>Donation-1 amount</b> </label>    
      <input type="number" name="donar1_amount"  maxlength="100" required /> 

      <label><b>Donation-2 amount</b> </label>    
      <input type="number" name="donar2_amount"  maxlength="100" required /> 

      <label><b>Donation-3 amount</b> </label>    
      <input type="number" name="donar3_amount"  maxlength="100" required /> 

      <label><b>Short description about Donation 1</b> </label>    
      <input type="text" name="donar1_describe"  maxlength="200" required /> 

      <label><b>Short description about Donation 2</b> </label>    
      <input type="text" name="donar2_describe"  maxlength="200" required /> 
      
      <label><b>Short description about Donation 3</b> </label>    
      <input type="text" name="donar3_describe"  maxlength="200" required /> 


      <label><b>Image of Donar 1</b> </label>    
      <input type="file" name="donar1_pic" accept="image/png, image/jpg"required /> 
      
      <label><b>Image of donar 2</b> </label>    
      <input type="file" name="donar2_pic" accept="image/png, image/jpg"required /><br> 

      <label><b>Image of donar 3</b> </label>    
      <input type="file" name="donar3_pic" accept="image/png, image/jpg"required />
      <hr>
      <br>
<br>
      <label><b>Image of your LOGO</b> </label>    
      <input type="file" name="logo" accept="image/png, image/jpg"required />
      <br><br>
      <label><b>Image of face background</b> </label>    
      <input type="file" name="face_bg" accept="image/png, image/jpg"required />
      <br><br>
      <label><b>Image for about us section</b> </label>    
      <input type="file" name="about_img" accept="image/png, image/jpg"required />
      
      
      
    
      <input type="submit" class="registerbtn" name="submit" value="submit">
      <a href="templateOptions.php?emailID=<?php echo $emailID ?>"><h4>Go to Template page</h4></a>
      <hr>

      
      
       


<?php
if (isset($_POST["submit"])){
  
  $emailID =  $_REQUEST['emailID'];

  $S_describe =  $_REQUEST['S_describe'];
  $aboutNgo = $_REQUEST['aboutNgo'];
  $phone = $_REQUEST['phone'];
  $Address =  $_REQUEST['Address'];
  $insta =  $_REQUEST['insta'];
  $other_social =  $_REQUEST['other_social'];
  $Name =  $_REQUEST['Name'];
  $title =  $_REQUEST['title'];
  $donar_outcome =  $_REQUEST['donar_outcome'];
  $volunteer_outcome =  $_REQUEST['volunteer_outcome'];
  

  $donar1_name =  $_REQUEST['donar1_name'];
  $donar2_name =  $_REQUEST['donar2_name'];
  $donar3_name=  $_REQUEST['donar3_name'];
  $donar1_amount =  $_REQUEST['donar1_amount'];
  $donar2_amount =  $_REQUEST['donar2_amount'];
  $donar3_amount=  $_REQUEST['donar3_amount'];
  $donar1_describe =  $_REQUEST['donar1_describe'];
  $donar2_describe =  $_REQUEST['donar2_describe'];
  $donar3_describe=  $_REQUEST['donar3_describe'];


  $founder1_describe =  $_REQUEST['founder1_describe'];
  $founder2_describe =  $_REQUEST['founder2_describe'];
  $founder1_name =  $_REQUEST['founder1_name'];
  $founder2_name =  $_REQUEST['founder2_name'];

   mkdir("user/$emailID", 0777, true);
  // Performing insert query execution
  // here our table name is college



$pname = $_FILES["face_bg"]["name"];
$tname = $_FILES["face_bg"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNameface_bg=$emailID."-face_bg.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNameface_bg);

$pname = $_FILES["logo"]["name"];
$tname = $_FILES["logo"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNamelogo=$emailID."-logo.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNamelogo);

$pname = $_FILES["about_img"]["name"];
$tname = $_FILES["about_img"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNameabout_img=$emailID."-about_img.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNameabout_img);



$pname = $_FILES["donar1_pic"]["name"];
$tname = $_FILES["donar1_pic"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNamedonar1_pic=$emailID."donar1_pic.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNamedonar1_pic);

$pname = $_FILES["donar2_pic"]["name"];
$tname = $_FILES["donar2_pic"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNamedonar2_pic=$emailID."donar2_pic.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNamedonar2_pic);

$pname = $_FILES["donar3_pic"]["name"];
$tname = $_FILES["donar3_pic"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNamedonar3_pic=$emailID."donar3_pic.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNamedonar3_pic);

$pname = $_FILES["founder1_pic"]["name"];
$tname = $_FILES["founder1_pic"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNamefounder1_pic=$emailID."founder1_pic.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNamefounder1_pic);

$pname = $_FILES["founder2_pic"]["name"];
$tname = $_FILES["founder2_pic"]["tmp_name"];
$fileExt = explode('.',$pname);
$fileActualExt = strtolower(end($fileExt));
$uploads_dir = 'user/'.$emailID;
$newNamefounder2_pic=$emailID."founder2_pic.".$fileActualExt;
move_uploaded_file($tname, $uploads_dir.'/'.$newNamefounder2_pic);

$sql = "INSERT INTO ngoform (emailID,logo,S_describe,face_bg,aboutNgo,phone,Address,
insta,other_social,name,title,donar_outcome,volunteer_outcome,about_img)  
VALUES ('$emailID','$newNamelogo','$S_describe','$newNameface_bg','$aboutNgo','$phone','$Address','$insta',
'$other_social','$Name','$title','$donar_outcome','$volunteer_outcome','$newNameabout_img');";
$con->query($sql)==true;


$sql1 = "INSERT INTO donars (emailID,donar1_pic,donar2_pic,donar3_pic,donar1_name,donar2_name,donar3_name
,donar1_amount,donar2_amount,donar3_amount,donar1_describe,donar2_describe,donar3_describe)  
VALUES ('$emailID','$newNamedonar1_pic','$newNamedonar2_pic','$newNamedonar3_pic','$donar1_name','$donar2_name','$donar3_name','$donar1_amount','$donar2_amount',
'$donar3_amount','$donar1_describe','$donar2_describe','$donar3_describe');";
$con->query($sql1)==true;

$sql2 = "INSERT INTO founders (emailID,founder1_pic,founder2_pic,founder1_name,founder2_name,founder1_describe
,founder2_describe)  
VALUES ('$emailID','$newNamefounder1_pic','$newNamefounder2_pic','$founder1_name','$founder2_name','$founder1_describe'
,'$founder2_describe');";
$con->query($sql2)==true;

}
?>

</body>
    
</body>
</html>