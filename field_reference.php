<?php

$postFields = array();
$postFields["email_address"] = $_POST["email_address"];
$postFields["first_name"] = $_POST["first_name"];
$postFields["last_name"] = $_POST["last_name"];
$postFields["middle_name"] = $_POST["middle_name"];
$postFields["home_number"] = $_POST["home_num"];
$postFields["address_line_1"] = $_POST["adr_1"];
$postFields["address_line_2"] = $_POST["adr_2"];
$postFields["address_line_3"] = $_POST["adr_3"];
$postFields["city_name"] = $_POST["city"];
$postFields["state_code"] = $_POST["state"];
// The Code is looking for a State Code For Example TX instead of Texas
$postFields["state_name"] = $_POST["state_name"];
$postFields["country_code"] = $_POST["country"];
$postFields["zip_code"] = $_POST["postal_code"];
$postFields["sub_zip_code"] = $_POST["sub_postal"];
$postFields["mail_type"] = $_POST["mail_type"];
$postFields["lists"] = $_POST['lists'];
