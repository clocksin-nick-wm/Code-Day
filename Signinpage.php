
<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=dovia', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = "";

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



    $stmt = $dbh->prepare("INSERT INTO personalinfo (firstname, lastname, phonenumber, email, Password ) VALUES (?, ?, ?, ?,?)");

    $result = $stmt->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['phonenumber'],  $_POST['email'], $_POST['Password']));

    if(!$result){
        print_r($stmt->errorInfo());
    }

    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}?>

