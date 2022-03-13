<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
    .err{
      color: red;
    }
  </style>
</head>
<body>


  


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;  ?>" method= "post">  
      

      <!-- name-->
      <label> 1. </label>
  <fieldset style="width: 500px"> 
              <legend > NAME</legend>
              <input type="text" name="name"> <span class=" err">*

     
              </span>
              
              <hr> 

   </fieldset> <br> <br>

<!-- Email-->

 <label> 2. </label>
 <fieldset style="width:500px">
  <legend>EMAIL </legend>
  <input type="EMAIL" name="email" > <span class="err">*
    <?php
          if (isset($emailErr)) {
            // code...
            echo $emailErr;
          }

    ?>
    
  </span>
  <hr> 
 </fieldset > <br> 

 <!-- Date of Birth-->

 <label> 3. </label>
 
<fieldset style="width: 500px; ">
<legend>DATE OF BIRTH</legend>
<table>
<tr style="text-align: center;">
  <th style="font-weight: normal;"><label for="dd" >dd</label></th>
  <th></th>
  <th style="font-weight: normal;"><label for="mm" >mm</label></th>
  <th></th>
  <th style="font-weight: normal;"><label for="yyyy" >yyyy</label></th>
  <th></th>
</tr>
<tr>
<td><input type="text" name="dd" style="width: 30px" value="<?php echo $dd;?>"></td>
<td>/</td>
<td><input type="text" name="mm" style="width: 30px" value="<?php echo $mm;?>"></td>
<td>/</td>
<td><input type="text" name="yyyy" style="width: 30px;" value="<?php echo $yyyy;?>"></td>
<td style="padding-left: 10px"><span class="err">* <?php echo $dobErr;?></span></td>
</tr>
</table>
<hr>

</fieldset>

  

  <br>

 <label> 4. </label>
 <fieldset style="width:500px"> 
    
  
<legend> GENDER</legend>
<input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="err">*
    <?php 
      if (isset($genderErr)) {
        echo $genderErr; 
      }
      ?>
      </span>

<hr>

  </fieldset> <br>

  <label>5. </label>
  <fieldset style="width:500px">

                <legend>DEGREE</legend>

               <input type="checkbox" id="degree" name="degree[]" value="ssc"> SSC
  <input type="checkbox" id="degree" name="degree[]" value="hsc"> HSC
  <input type="checkbox" id=
Ezazul
Ezazul Islam
input type="checkbox" id="degree" name="degree[]" value="hsc"> HSC
  <input type="checkbox" id="degree" name="degree[]" value="bsc"> BSc
  <input type="checkbox" id="degree" name="degree[]" value="msc"> MSc
  <br>  
  <span class="err" >* 

    <?php echo $degreeErr;

    ?></span>      


      </fieldset><br>

      <!--bloodgroup-->

      <label> 6. </label>

   <fieldset style="width: 500px; ">
<legend> BLOOD GROUP</legend>
  <select name="bloodGroup" id="bloodGroup">
    <option value="blank">Select</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select> 
  <br>  
  <span class="err" >* <?php echo $bloodGroupErr;?></span>  

      </fieldset>
  
  <input type="submit" name="submitbutton">
  <?php 
  if (isset($_POST['submitButton'])) {
    echo "<h1>Your Input</h1>";

    echo $name . "<br>";
    echo $email . "<br>";
    echo $dobErr. "<br>";
    echo $gender . "<br>";
    echo $degree . "<br>";
    echo $bloodGroup . "<br>";
  }

   ?>
 </form>

</body>
</html>