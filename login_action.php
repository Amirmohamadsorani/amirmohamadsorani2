
<?php
include("header.html");
?>

<?php
if(isset($_POST["username"]) && !empty($_POST["username"])
 && isset($_POST["passw"])  && !empty($_POST["passw"]))
{
    $username=$_POST["username"];
    $password=$_POST["passw"];
    echo("<p>".$username."</p>");
    echo("<p >".$password."</p>");
}

?>

<?php
include("footer.html");
?>
