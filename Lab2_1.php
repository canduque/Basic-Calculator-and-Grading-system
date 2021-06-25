<!DOCTYPE html>
<html>
<head>
  
  <title>LAB2_1</title>
</head>
<body>
<h2>
<?php
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo "Input: <br>";
echo "1, 2 <br>";
echo "4, 2 <br>";
echo "2, 2 <br><br>";

echo "Output: <br>";
echo test(1, 2)."<br>";
echo test(4, 2)."<br>";
echo test(2, 2)."<br>";   

?>
<h2>
</body>
</html>