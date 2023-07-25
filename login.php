<?php
session_start();
$conn = mysqli_connect("localhost", "root", "","afterschool") or die ('Unable to connect');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="output.css" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('LOGIN.png');">
                    <h1 class="text-white text-3xl mb-3">Login</h1>
                </div>
                <div class="w-full lg:w-1/2 py-16 px-12">
                    <h2 class="text-3xl mb-4">Logheaza-te la contul tau</h2>
                    <form action="login.php" method="post">
                        <div class="mt-5">
                            <input name="nume" type="text" placeholder="Name" class="border border-gray-400 py-1 px-2 w-full" >
                        </div>
                        <div class="mt-5">
                            <input name="parola" type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        
                        <div class="mt-5">
                            <button type="submit" class="w-full bg-purple-500 py-3 text-center text-white" name="submit">Login!</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

$eroare = "";

if(isset($_POST['submit'])){
    $nume = $_POST['nume'];
    $parola = $_POST['parola'];
}

$select = mysqli_query($conn,"SELECT * FROM INFO WHERE nume = '$nume' AND parola = '$parola' ");
$row = mysqli_fetch_array($select);

if(is_array($row)){
    $_SESSION["nume"] = $row ['nume'];
    $_SESSION["parola"] = $row ['parola'];

}else{
    if($_POST["nume"]!="" && $_POST["parola"]!="")
   echo "<script>alert('Cont incorect')</script>"; 
}
 

if(isset($_SESSION["nume"])){
    header("Location:indexlogat.php");
}

    ?>
</body>

</html>
