<?php 
$con1 = mysqli_connect("localhost", "root","", "kalakriti","3308") or die(mysqli_error($con1));
$B_Roll_No =filter_input(INPUT_GET,"B_Roll_No");
$Branch_Name =filter_input(INPUT_GET, 'Branch_Name');
$Batch_Code =filter_input(INPUT_GET,"Batch_Code");
$Knowledge =filter_input(INPUT_GET,"Knowledge");
$kalakriti_database_query2="insert into branch_panel(B_Roll_No,Branch_Name ,Batch_Code ,Knowledge) values('$B_Roll_No','$Branch_Name' ,'$Batch_Code' ,'$Knowledge')";
$kalakriti_database_submit2= mysqli_query($con1, $kalakriti_database_query2);
if(!$kalakriti_database_submit2)
{die("dammit");
}
 else {
echo"successfully entered";    
}
 echo "to enter more specification click next";
 echo "<h3><a href='branch.php'> <button>Next</button></a></h3>";
 echo "<br>";
 echo "<br>";
  echo "<h3><a href='index.php'> <button >Submit</button></a></h3>";
?>