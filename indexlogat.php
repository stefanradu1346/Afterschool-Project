<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<style>
    *{
        scroll-behavior:smooth;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footerdesigh.css">
    <title>KidSchool Garden</title>
</head>

<body class="font-Poppins">

    <!-- Navbar -->

    <header>
        <nav class="container flex items-center py-4 mt-4 sm:mt-12">
            <div class="py-1">
                <img class="h-11 inline" src="icon.png" alt="" />KidSchool Garden
            </div>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-bookmark-blue uppercase text-xs">
            <li class="cursor-pointer"><a href="#aboutus">Despre noi</a></li>
                <li class="cursor-pointer"><a href="#pricing">Preturi</a></li>
                <li class="cursor-pointer"><a href="#contact">Contact</a></li>
                <li><h1><b>Utilizator: </b></h1><?php echo $_SESSION['nume']; ?></li>
                <a href="logout.php">
                    <button type="button" class="bg-purple-500 text-white rounded-md px-7 py-3 uppercase">
                        Log out!
                    </button>
                </a>
                <h1 id="timp-curent"></h1>

            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="text-2xl fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>


    <!-- Hero section -->

    <section class="relative">
        <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
            <!-- Content -->
            <div class="flex flex-1 flex-col items-center lg:items-start">

                <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
                    Bun venit la KidSchool Garden!
                </h2>

                <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
                    Noi suntem KidSchool Garden, un proiect educational afterschool, unde copiii din clasele primare au langa ei profesori-mentori, care ii sustin, asculta si indruma!
                </p>

                <div class="flex justify-center flex-wrap gap-6">

                </div>

            </div>

            <!-- Image -->

            <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10 ">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full " src="hero-bg.jpg" alt="">
            </div>
            <!-- Rectangle -->
            <div class=" hidden md:block overflow-hidden bg-purple-500  absolute h-100 w-2/4 top-28 right-0 lg:-bottom-28 lg:-right-36"></div>

        </div>
    </section>

    <!-- About Us -->
    <section class="bg-bookmark-white py-20 mt-20 lg:mt-60" id="aboutus">

        <!-- Heading -->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-bookmark-blue">Despre noi</h1>
            <p class="text-center text-bookmark-grey">
            KidSchool Garden, lider mondial în educația complementară pentru copiii între 6 luni și 8 ani, cultivă curiozitatea acestora prin cel mai complex program de educație și dezvoltare a potențialului înnăscut.
            Fiecare copil se naşte cu un set unic de abilităţi şi talente, iar aceasta este perioada de maximă receptivitate, optimă pentru dezvoltarea potențalului nativ al fiecărui copil.
            </p>
        </div>

        <!-- Feature #1 -->
        <div class="relative mt-20 lg:mt-24">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="aboutUs.jpg" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Copiii dumneavoastra - prioritatea noastra!</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                    Avem grijă de toți copiii; fără diferențe, fără favoritism. Toți vor fi tratați ca egali cu noi, mentorii lor!
                    </p>
                    
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="
                    hidden
                    lg:block
                    overflow-hidden
                    bg-purple-500
                    absolute
                    h-80
                    w-2/4
                    -bottom-24
                    -left-36
                ">
            </div>
        </div>

        <!-- Feature #2 -->
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0" id="pricing">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="pricing.jpg" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Preturi</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                    Te poţi înscrie acum pentru două şedinţe de probă, câte una pentru fiecare program.
Ulterior, dacă vei alege să le continui pe amândouă, le vei primi la un preţ redus cu 20%

FasTrackFundamental + FasTrackEnglish = 500 lei 400 lei
                    </p>
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="
                hidden
                lg:block
                overflow-hidden
                bg-purple-500
                absolute
                h-80
                w-2/4
                -bottom-24
                -right-36
            "></div>
        </div>

        <!-- Feature #3 -->
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0" id="contact">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="contact.jpg" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Contacteaza-ne</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                    Apasa pe butonul de mai jos si completează formularul de mai jos iar noi te contactăm în cel mai scurt timp:
                    </p>
                    <a href="contact.php">
                    <button type="button" class="btn bg-purple-500 text-white hover:bg-bookmark-white hover:text-black">Contact</button>
                    </a>
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="
            hidden
            lg:block
            overflow-hidden
            bg-purple-500
            absolute
            h-80
            w-2/4
            -bottom-24
            -left-36
          "></div>
        </div>

    </section>

    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
               <div class="py-1">
                <img class="h-11 inline" src="icon.png" alt="" />KidSchool Garden
            </div>
  	 		</div>
            <div class="footer-col">
                
            </div>
  	 		<div class="footer-col">
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


<script>
    let time = document.getElementById("timp-curent");
    

    setInterval(() =>{
        let d = new Date();
        time.innerHTML = d.toLocaleTimeString();
    },1000)
    

</script>

</body>

</html>
