<?php

$error='';
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['Gender'];
$country=$_POST['country'];
$data=[$name,$email,$date,$gender,$country,"\n"];
$file_open=fopen("user_data.csv","a");
fputcsv($file_open,$data);
fclose($file_open);
echo "thank you for registering";





	
//print_r(form_data);
?>