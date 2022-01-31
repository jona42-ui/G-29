<html>  
   <head>
      <title>KinderCare</title>
      <style>
               img {
  width: 400px;
  height: 500px;
  object-fit: contain;
  border-radius: 50%;
               }

  table {
  width: 40%;
  height:150%;
}

   body{
      background-image: url('px1.jpg');background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
   }


      </style>
   </head>
<body >  
<table>
   <tr>
      <td><img src="littlegirl.jpg"></td>
      <td>
         <h1 style="font-family: Times New Romans">Welcome Teacher</h1>
         <p>Create a new assignment</p>


      <form action="http://localhost:8080/phpmyadmin" method="post" enctype="multipart/form-data">  
   <div class="check" style="z-index:8;width:200px;border-radius:60px;margin:10px auto">  
   <label>start: <input type="datetime-local" name="start" id="start"> </label>
   <label>stop: <input type="datetime-local" name="stop" id="stop"> </label>

   <p>Select characters;</p>

<input class="form_check" type="checkbox" name="characters[]" value="A" id="A"><label class="form_label" for="A">A</label>
<input class="form_check" type="checkbox" name="characters[]" value="B" id="B"><label class="form_label" for="B">B</label>
<input class="form_check" type="checkbox" name="characters[]" value="C" id="C"><label class="form_label" for="C">C</label>
<input class="form_check" type="checkbox" name="characters[]" value="D" id="D"><label class="form_label" for="D">D</label>
<input class="form_check" type="checkbox" name="characters[]" value="E" id="E"><label class="form_label" for="E">E</label>
<input class="form_check" type="checkbox" name="characters[]" value="F" id="F"><label class="form_label" for="F">F</label>
<input class="form_check" type="checkbox" name="characters[]" value="G" id="G"><label class="form_label" for="G">G</label>
<input class="form_check" type="checkbox" name="characters[]" value="H" id="H"><label class="form_label" for="H">H</label>
<input class="form_check" type="checkbox" name="characters[]" value="I" id="I"><label class="form_label" for="I">I</label>
<input class="form_check" type="checkbox" name="characters[]" value="J" id="J"><label class="form_label" for="J">J</label>
<input class="form_check" type="checkbox" name="characters[]" value="K" id="K"><label class="form_label" for="K">K</label>
<input class="form_check" type="checkbox" name="characters[]" value="L" id="L"><label class="form_label" for="L">L</label>
<input class="form_check" type="checkbox" name="characters[]" value="M" id="M"><label class="form_label" for="M">M</label>
<input class="form_check" type="checkbox" name="characters[]" value="N" id="N"><label class="form_label" for="N">N</label>
<input class="form_check" type="checkbox" name="characters[]" value="O" id="O"><label class="form_label" for="O">O</label>
<input class="form_check" type="checkbox" name="characters[]" value="P" id="P"><label class="form_label" for="P">P</label>
<input class="form_check" type="checkbox" name="characters[]" value="Q" id="Q"><label class="form_label" for="Q">Q</label>
<input class="form_check" type="checkbox" name="characters[]" value="R" id="R"><label class="form_label" for="R">R</label>
<input class="form_check" type="checkbox" name="characters[]" value="S" id="S"><label class="form_label" for="S">S</label>
<input class="form_check" type="checkbox" name="characters[]" value="T" id="T"><label class="form_label" for="T">T</label>
<input class="form_check" type="checkbox" name="characters[]" value="U" id="U"><label class="form_label" for="U">U</label>
<input class="form_check" type="checkbox" name="characters[]" value="V" id="V"><label class="form_label" for="V">V</label>
<input class="form_check" type="checkbox" name="characters[]" value="X" id="X"><label class="form_label" for="X">X</label>
<input class="form_check" type="checkbox" name="characters[]" value="Y" id="Y"><label class="form_label" for="Y">Y</label>
<input class="form_check" type="checkbox" name="characters[]" value="Z" id="Z"><label class="form_label" for="Z">Z</label>

<input type="submit" value="submit" name="sub">
</div>  
</form>  
      </td>   
      
   </tr>
</table>


   
<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="kindercare";//database name  
$tbl_name="assignments"; //table name  
$conn=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string 

$start = $_POST['start'];
     $stop = $_POST['stop'];
     $sql = "INSERT INTO assignments (start, stop)
     VALUES ('$start','$stop')";

$checkbox1=$_POST['characters'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk.= $chk1.",";  
   }  
   $conn=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string
$in_ch=mysqli_query($conn,"insert into checkbox(assignments) values ('$chk')");  

if (mysqli_query($conn,$sql)) {
   echo "New record has been added successfully !";
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
}


}       
     
     mysqli_close($conn);

?>  
</body>  
</html>  