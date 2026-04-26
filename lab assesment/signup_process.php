<?php
$nameErr = $lnameErr = $contactErr = $emailErr = "";
$name = $email = $lname = $contact = "";
 
function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = cleanInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
 
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
    } else {
        $lname = cleanInput($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $lnameErr = "Only letters and white space allowed";
        }
    }
 
    if (empty($_POST["contact"])) {
        $contactErr = "Contact number is required";
    } else {
        $contact = cleanInput($_POST["contact"]);
        if (!preg_match("/^[0-9]*$/", $contact)) {
            $contactErr = "Only numbers allowed";
        }
    }
 
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}
 