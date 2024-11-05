<?php

// $a="Hy This is my First Php Program";
// echo $a."<br>";
//   $a = substr($a, 0, 4);
// echo $a ."<br>";  
// die();
// $a="komal";
// echo $a."<br>";

// $aar=array("a","2","komal","Bca","Pho");
// // print_r($aar) ;
// foreach($aar as $a){
//     echo"<br> ";
//     print_r($aar) ;
// }
if(!empty($_POST['sub'])){
echo $s_name = $_POST['stuname'];
echo " ";
echo $s_class = $_POST['stuclass'];
echo " ";

echo $s_rollno = $_REQUEST['stuRollNo']; 
}?>

<form method="post">
    <input type="text" name="stuname" placeholder="Enter Your Name">
    <input type="text" name="stuclass" placeholder="Enter Class">
    <input type="text" name="stuRollNo" placeholder="Enter Roll No">
    <input type="submit" value="Submit " name="sub">
</form>