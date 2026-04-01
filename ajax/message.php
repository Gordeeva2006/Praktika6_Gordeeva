<?
    session_start();
	include("../settings/connect_datebase.php");

    $IdUser = $_SESSION['user'];
    $Token = $_POST["Token"];
    $Message = $_POST["Message"];
    $IdPost = $_POST["IdPost"];

    if ($Token != $_SESSION["CSRF"]) {
        exit;
    }

    $mysqli->query("INSERT INTO `comments`(`IdUser`, `IdPost`, `Messages`) VALUES ({$IdUser}, {$IdPost}, '{$Message}');");
?>