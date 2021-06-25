<!DOCTYPE html>
<html>
<head>
  
  <title>Simple Grading System</title>
</head>
<body>
<?php  
$a=87;   

?>  
<center><h1>CINDY ANTONIO DUQUE</h1></center>
<center><h2>Simple Grading System</h2></center>
<HR>
<center><h2>Course Grade: <?php echo $a;?></h2></center>
<center>
<h2>
<?php 

if ($a<=100 and $a>=98)
{echo '1.00 Excellent!';}
else if ($a<=97 and $a>=95)
{echo '1.25 Superior!';}
else if ($a<=94 and $a>=92)
{echo '1.50 Very Good!';}
else if ($a<=91 and $a>=89)
{echo '1.75 Good!';}
else if ($a<=88 and $a>=86)
{echo '2.00 Very Satisfactory!';}
else if ($a<=85 and $a>=83)
{echo '2.25 Satisfactory!';}
else if ($a<=82 and $a>=80)
{echo '2.50 Average!';}
else if ($a<=79 and $a>=77)
{echo '2.75 Fair!';}
else if ($a<=76 and $a>=75)
{echo '3.00 Passed!';}
else if ($a<=74)
{echo 'Failed!';}
else if ($a>=101)
{echo 'Wrong Input!';}


?>
</h2>
</center>
</body>
</html>