<?php
if (isset($_GET["num"] , $_GET["data"])) 
{
echo "The form was submitted: " . $_GET["num"] . " Value:". $_GET["data"];
$num=$_GET["num"];
$val=$_GET["data"];
}
?>
