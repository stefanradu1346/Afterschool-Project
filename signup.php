
<?php 
    require 'date.php';
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="output.css" rel="stylesheet">
    <title>Register Page</title>
</head>

<body>
    <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('LOGIN.png');">
                    <h1 class="text-white text-3xl mb-3">Creeaza un cont</h1>
                </div>
                <div class="w-full lg:w-1/2 py-16 px-12">
                    <h2 class="text-3xl mb-4">Register</h2>
                    <form action="signup.php" method="post">
                        <div class="mt-5">
                            <input name="mail" type="email" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input name="nume" type="text" placeholder="Username" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input name="parola" type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="checkbox" class="border border-gray-400">
                            <span>
                               Accept <a href="#" class="text-purple-500 font-semibold">Terms of Use</a> & <a href="#" class="text-purple-500 font-semibold">Privacy Policy</a>
                            </span>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="w-full bg-purple-500 py-3 text-center text-white" name="submit">Register Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
