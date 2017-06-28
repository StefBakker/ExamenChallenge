<?php

require(ROOT . "model/RegisterModel.php");

function register()
{
	if (isset($_SESSION['username'])){ 
		header("Location:" . URL . "home/index");
	}
	else{
		render("register/register");
	}	
}

function createUser()
{
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['address'])  && isset($_POST['city']) && isset($_POST['email']) && isset($_POST['postalcode']) && isset($_POST['stylist']) && isset($_POST['phonenumber'])){
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		createUserAction($_POST['username'], $password, $_POST['firstname'], $_POST['lastname'], $_POST['address'], $_POST['email'], $_POST['city'], $_POST['postalcode'], $_POST['phonenumber'], $_POST['stylist']);
	}
	else{
		echo"Fill in all fields.";
	}
	header("Location:" . URL . "home/index");
}