<?php 
$con = mysqli_connect("localhost", "root","", "kalakriti","3308") or die(mysqli_error($con));
$First_Name =filter_input(INPUT_GET, 'First_Name');

$Middle_Name =filter_input(INPUT_GET,"Middle_Name");
$Last_Name =filter_input(INPUT_GET,"Last_Name");
$Roll_No =filter_input(INPUT_GET,"Roll_No");
$Phone_No =filter_input(INPUT_GET,"Phone_No");
 //$First_Name =$_POST['First_Name'];

 

$kalakriti_database_query="INSERT INTO student_panel (First_Name ,Middle_Name ,Last_Name ,Roll_No ,Phone_No) VALUES ('$First_Name' ,'$Middle_Name' ,'$Last_Name' ,'$Roll_No' ,'$Phone_No')"; 

$kalakriti_database_submit= mysqli_query($con, $kalakriti_database_query);
if(!$kalakriti_database_submit)
{die("dammit");
}
 else {
echo"successfully entered";    
}
echo "<h3><a href='branch.php'><button > Next</button></a></h3>";
?>        