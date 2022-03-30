 <?php
$course_name = $_POST["cname"];
$course_price = $_POST["cprice"];
$course_trainer = $_POST["course_trainer"];
echo $course_name.$course_price.$course_trainer;
$db = mysqli_connect("localhost","root","","coaching") or die("Ops! Wrong");
$insert = "INSERT INTO  course( c_name,c_price,c_trainer) VALUES
('{$course_name}',{$course_trainer},{$course_price} )";
mysqli_query($db,$insert) or die("Ops! Wrong");
header("Location: http://localhost/crud%20operation/allcourse.php");
mysqli_close($db)

 ?>