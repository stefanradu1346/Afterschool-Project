<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="output.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body?>
    <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden text-center">
                
                <div class="w-full lg:w-2/3 py-16 px-12">
                    <h2 class="text-3xl mb-4">Contact</h2>
                    <form action="contact.php" method="post" id="form">
                        <div class="mt-5">
                            <input name="nume" type="text" placeholder="Name" class="border border-gray-400 py-1 px-2 w-full" >
                        </div>
                        <div class="mt-5">
                            <input name="mail" type="text" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input name="tel" type="text" placeholder="Tel" class="border border-gray-400 py-1 px-2 w-full">
                        </div>

                        <div class="mt-5">
                        <textarea id="msg" name="msg" rows="4" cols="50" class="border border-gray-400 py-1 px-2 w-full"></textarea>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="w-full bg-purple-500 py-3 text-center text-white" name="submit">Trimite!</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
    extract($_REQUEST);
    if(isset($_POST['submit'])){
        $nume = $_POST['nume'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        $msg = $_POST['msg'];
    $file = fopen("FisierSave.txt","a");

    fwrite($file,"Nume: ");
    fwrite($file,$nume."\n");
    
    fwrite($file,"Email: ");
    fwrite($file,$mail."\n");
    
    fwrite($file,"Tel: ");
    fwrite($file,$tel."\n");

    fwrite($file,"Mesaj: ");
    fwrite($file,$msg."\n");
    fwrite($file,"\n");

    fclose($file);
    }
    
?>
</body>