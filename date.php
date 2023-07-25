<?php 

session_start();

$conn = mysqli_connect("localhost", "root", "");

if(!$conn){
    echo "Eroare la conectare";
    exit;
}

// $db = mysqli_select_db($conn, 'Afterschool');

// $sql = "CREATE DATABASE AfterSchool";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
//   mysqli_select_db($conn, 'Afterschool');
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// $create_table = "CREATE TABLE INFO (
// mail char(40) PRIMARY KEY ,
// nume char(20),
// parola char(20),
// datee char(20))";

mysqli_select_db($conn, 'Afterschool');

// if (mysqli_query($conn, $create_table)) {
//     echo "Table INFO created successfully";
// }else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// ------------------------------------

if(isset($_POST['submit'])){
    $mail = $_POST['mail'];
    $nume = $_POST['nume'];
    $parola = $_POST['parola'];
    $date = date("Y/m/d");
    $introducere = "INSERT INTO INFO VALUES ('$mail','$nume','$parola','$date')";
    if(mysqli_query($conn, $introducere)){
        header("Location: index.php");
    }else {
        echo "ERROR";
    }


}

/*

if(isset($_POST['submit'])){
    $mail = $_POST['mail'];
    $parola = $_POST['parola'];
}

$select = mysqli_query($conn,"SELECT * FROM INFO WHERE nume = '$nume' AND parola = '$parola' ");
$row = mysqli_fetch_array($select);

if(is_array($row)){
    $_SESSION["nume"] = $row ['nume'];
    $_SESSION["parola"] = $row ['parola'];

}else
echo "Nu merge";

*/
// ------------------------------------

?>
