<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $project_description = $_POST["message"];

        $to = "vasanth1997sep@gmail.com";
        $subject = "Contact us form submission test";
        $message = "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Phone Number: $phone\n";
        $message .= "Project Description:\n$project_description";

        mail($to, $subject, $message);

        header("Location: https://hasotech.com/contact-us/");
        exit();
}
?>