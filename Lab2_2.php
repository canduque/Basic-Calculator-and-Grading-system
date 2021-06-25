<!DOCTYPE html>
<html>
<head>
  
  <title>LAB2_2</title>
</head>
<body>
<h2>
<?php
function test($n) 
{
     $x = 51;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}
echo "Input: <br>";
echo "51 <br>";
echo "30 <br>";
echo "54<br><br>";

echo "Output: <br>";
echo test(51)." <br>";
echo test(30)." <br>";
echo test(54)." <br>";  
?>
</h2>
</body>
</html>