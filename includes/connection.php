<?php 
// open connection 
	$conn = mysqli_connect("localhost","root","","estore");
	if(!$conn){
		die("cannot connect to server");
	}