<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Registration form</title>
</head>
<body>
  <center>
   <h1>Registration Form</h1>
   <hr>
   <form action="Reg Action.php"method="POST">
    <h1>Registration Form</h1>
   <hr>
   <h3>Basic Information:</h3>
   <br>
   <br>
   First Name:
   <input type="text" name="First name">
   <br>
   <br>
   Last Name:
   <input type="text" name="Last name">
   <br>
   <br>
   Gender:
   <input type="radio" name="Male">male
   <input type="radio" name="Male">female
   <input type="radio" name="Male">others
   <br>
   <br>
   DOB:
   <input type="date" name="DOB">
   <br>
   <br>
   Religion:
   <select name="Religion"id="Religion" >
    <option value="muslim">muslim</option>
    <option value="hindu">hindu</option>
    <option value="christian">cristian</option>
    <option value="buddhists">buddhists</option>
    <option value="jews">jews</option>
    <option value="others">others</option>
    
   </select>
   <br>
   <br>
   <h3>Contact Information:</h3>
   <br>
   <br>
   Present Address:    
   <textarea id="Present Address" name="Present Address
   " rows="4" cols="50">

</textarea>
   <br>
   <br>
    Permanent Adress:
   <textarea id="Present Address" name="Present Address
" rows="4" cols="50">
</textarea>
    <br>
  <br>
    Phone:
    <input type="tel" name="Phone">
     <br>
  <br>
  Email:
    <input type="email" name="email">
    <br>
  <br>
     Personal Website Link:
    <input type="url" name="Personal Website Link">
    <br>
  <br>
  <input type="submit">
   <br><br>  Click for  <a href="http://localhost/xampp/Login.php">LOGIN</a> 
   </center>
</body>
</html>
