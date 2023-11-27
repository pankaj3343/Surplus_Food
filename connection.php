<?php
$username = "root";
$password = "";
$server = "localhost";
$db = "surplus";
$con = mysqli_connect($server, $username, $password, $db);
if ($con) {
?>
    <!-- <script>
        alert('Connection succesful');
    </script> -->
<?php
} else {
    die("no connection" . mysqli_connect_error());
}





?>