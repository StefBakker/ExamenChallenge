<?php
function createUserAction($username, $password, $firstname, $lastname, $address, $email, $city, $postalcode, $phonenumber, $stylist)
{
  $db = openDatabaseConnection();

  $sql = "INSERT INTO users(username, password, firstname, lastname, address, email, city, postalcode, phonenumber, stylist) VALUES (:username, :password, :firstname, :lastname, :address, :email, :city, :postalcode, :phonenumber, :stylist)";
  $query = $db->prepare($sql);

  $query->execute(array(
      ':username' => $username,
      ':password' => $password,
      ':firstname' => $firstname,
      ':lastname' => $lastname,
      ':address' => $address,
      ':email' => $email,
      ':city' => $city,
      ':postalcode' => $postalcode,
      ':phonenumber' => $phonenumber,
      'stylist' => $stylist
    ));

  var_dump($sql);

  $db = null;
}