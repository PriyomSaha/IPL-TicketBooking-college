<?php

session_start();
 $inpnumber = $_POST['number'];
 $servername = "localhost";
 $user = "id7017369_sayok";
 $password = "Mypassword1#";
 $database = "id7017369_iplticket";
 $conn = mysqli_connect($servername,$user,$password,$database);
 
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 $_SESSION["email"];
 $_SESSION["numberoftickets"];
 
$sql= "SELECT * FROM Seats_availability";
$row = mysqli_query($conn, $sql)->fetch_assoc();

if ($inpnumber == '1')
{
    #include 'allocateseats.php';
    $a = $row["International(NW)"]- $_SESSION["numberoftickets"];
   $q = "UPDATE `Seats_availability` SET `International(NW)`= ".$a;
    mysqli_query($conn, $q);
}
elseif ($inpnumber == '2')
{
   # include 'allocateseats.php';
    $a = $row["International(NE)"]- $_SESSION["numberoftickets"];
   $q = "UPDATE `Seats_availability` SET `International(NE)`= ".$a;
    mysqli_query($conn, $q);
    
}
elseif ($inpnumber == '3')
{
    #include 'allocateseats.php';
    $a = $row["General(W)"]- $_SESSION["numberoftickets"];
    $q = "UPDATE `Seats_availability` SET `General(W)`= ".$a;
    mysqli_query($conn, $q);
    
}
elseif ($inpnumber == '4')
{
    #include 'allocateseats.php';
    $a = $row["General(E)"]- $_SESSION["numberoftickets"];
    $q = "UPDATE `Seats_availability` SET `General(E)`= ".$a;
    mysqli_query($conn, $q);
}
elseif ($inpnumber == '5')
{
    #include 'allocateseats.php';
    $a = $row["Premium(W)"]- $_SESSION["numberoftickets"];
    $q = "UPDATE `Seats_availability` SET `Premium(W)`= ".$a;
    mysqli_query($conn, $q);
}
elseif ($inpnumber == '6')
{
    #include 'allocateseats.php';
    $a = $row["Premium(E)"]- $_SESSION["numberoftickets"];
    $q = "UPDATE `Seats_availability` SET `Premium(E)`= ".$a;
    mysqli_query($conn, $q);
}
else
{
    #include 'allocateseats.php';
    $a = $row["Platinum"]- $_SESSION["numberoftickets"];
   $q = "UPDATE `Seats_availability` SET `Platinum`= ".$a;
    mysqli_query($conn, $q);
}
mysqli_close($conn);
?>