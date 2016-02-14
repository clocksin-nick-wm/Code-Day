
<?php


require_once("connect.php");

if(empty($_POST['firstname']))
{
    $errorMessage = "<li>You forgot to enter your first name.</li>";
}
if(empty($_POST['lastname']))
{
    $errorMessage = "<li>You forgot to enter your last name.</li>";
}
if(empty($_POST['phonenumber']))
{
    $errorMessage = "<li>You forgot to enter a phone number.</li>";
};
if(empty($_POST['email']))
{
    $errorMessage = "<li>You forgot to enter your email.</li>";
}
if(empty($_POST['Password']))
{
    $errorMessage = "<li>You forgot to enter your Password.</li>";
}

    $biz_name = str_replace("'", "", $_POST['biz_name']);
    $email = str_replace("'", "", $_POST['email']);
    $password = str_replace("'", "", $_POST['Password']);

    $query = "INSERT INTO client (business_name, email, password) VALUES ('$biz_name', '$email', '$password')";

    $query = mysqli_query($mysqli, $query);

    if($query) {
        echo "Thank God!";
        die();
    }


