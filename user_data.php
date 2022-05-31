<?php

$error='';
$name='';
$email='';
$date='';
$gender='';
$country='';


function clean_text($string){
	$string=trim($string);
	$string=stripslashes($string);
	$string=htmlspecialchars($string);
	return $string;
}

if(isset($_POST['register_user']))
{
	if(empty($_POST['name'])){
		$error=  '<p><label for=""  class="text-danger">Please enter your name</label></p>';
	}
	else{
		$name=clean_text($_POST['name']);
		if(!preg_match("/^[a-zA-Z]*$/",$name)){
			$error= '<p><label for=""  class="text-danger">only letters and white spaces are allowed</label></p>';
		}

	}
	if($error==''){
		$file_open=fopen("user_data.csv","a");
		$no_rows=count(file("user_data.csv"));
		$form_data=array(
			'name'=>$name,
			'email'=>$email,
			'date'=>$date,
			'gender'=>$gender,
			'country'=>$country,
		);
		fputcsv($file_open,$form_data);

		}
	}

	
//print_r(form_data);
?>