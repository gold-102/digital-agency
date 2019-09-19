<?php 
    require_once ('db.php');
    header('Location: contact.php');

    if(isset($_POST['submit'])) {

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $msg = $_REQUEST['msg'];

        $q = "INSERT INTO contact_form(name, email, msg) VALUES ('$name', '$email', '$msg')";

        mysqli_query($db, $q);


    }


?>