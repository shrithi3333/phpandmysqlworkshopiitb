
<?php

 if($_POST["s1"]==$_POST["s2"] and $_POST["s2"]==$_POST["s3"] and $_POST["s1"]==$_POST["s3"])
 {
     echo "It is an Equilateral Triangle.";
 }
 
 else if($_POST["s1"]==$_POST["s2"] or $_POST["s2"]==$_POST["s3"] or $_POST["s3"]==$_POST["s1"])
 {
     echo "It is an Isosceles Triangle.";
 }
 
 else{
     echo "It is an Scalene Triangle.";
 }

?>
