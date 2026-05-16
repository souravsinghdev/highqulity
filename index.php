<!-- connect start from here --->
<?php include 'common/connect.php'; ?>
<!-- connect start from here --->

<!doctype html>
<html>
    <head>
        <!-- head start from here --->
        <?php include "common/head.php" ?>
        <!--- head end here --->
    </head>
    <body>
        <!--- header start from here --->
        <?php include "common/header.php" ?>
        <!--- header end here --->

        <!---- carousel start from here  ---->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <!--  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> --->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/imgs/slide1.webp" class="d-block w-100" alt="Dog image" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Puppies for sale in delhi</h5>
                        <p>Buy your favourite pet from us.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/imgs/slide2.webp" class="d-block w-100" alt="cat image" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Persian cat for sale in delhi.</h5>
                        <p>Buy your favourite pet from us.</p>
                    </div>
                </div>
                <!--
                <div class="carousel-item">
                 <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                     <h5>Third slide label</h5>
                     <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                -->
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--- carousel end here ---->

        <!---------- about us start -------->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center pt-5">
                    <i class="fa-solid fa-paw" style="font-size: 55px; color: #fc420c"></i>
                    <h1 class="pt-2 font-file pb-2">ABOUT US</h1>
                </div>
            </div>
        </div>
        <!---------- about us end here -------->

        <!---------- read more session start from here ----------->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5">
                    <h2 style="color: #675444; font-size: 45px" class="pb-4">Cat Shop Near Me</h2>
                    <h6 class="pt-1 text-secondary">
                        Welcome to the premium pet shop for Persian cats in Delhi, NCR! We specialize in offering
                        top-quality Persian kittens and cats for sale with prices ranging from INR 12,000 to 80,000,
                        ensuring you find the perfect pet to suit your family and budget. cat seller near me Located
                        near Gurgaon, we proudly serve Persian cats for sale in Delhi, Noida, Ghaziabad, and Faridabad,
                        delivering your feline companion with 500+ cash-on-delivery options. Persian cat near me Our
                        selection includes various Persian cat breeds, including the beautiful black Persian cat, giving
                        you a choice of healthy, Persian cat-priced well-bred kittens. Find Persian cats for sale,
                        Persian kittens, and more through our trusted pet shop network. cat shop near me Explore our
                        full range and bring home your perfect Persian companion today.
                    </h6>
                    <div class="pt-5">
                        <button class="button-contant p-2">READ MORE</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/imgs/about2.webp" width="100%"/>
                </div>
            </div>
            <hr><br>
        </div>
        <!------- session end here ------->
         
        <!--- category banner start from here ---> 
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="text-center mt-3 mb-3">
                       <h4 class="font-file fnt-file">Category</h4>    
                     </div>
                 </div>
             </div>
         </div>
        <!---categroy banner send here --->

        <!--- category start from here --->
        <div class="container">
            <div class="row">
                <?php 
                  $sql = "SELECT * FROM category;"; 
                  $result = $conn->query($sql);
                   
                  foreach ($result as $row) {
                   /* die(var_dump($row));*/
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 mt-5 text-center">
                    <div class="background-effect">
                        <div class="mb-2">
                            <img src="assets/imgs/category-img/<?=$row['category_img'] ?>" width="100%" height="200px"/>
                        </div>
                        <h5><?=$row['category_name'] ?></h5>
                        <div class="m-2">
                            <a href="pets.php?category_slug=<?=$row['category_slug'] ?>">
                                <button class="button mt-2">VIEW MORE</button>
                            </a>
                           <!-- <button class="button-contant mt-1 p-2">BUY NOW</button> -->
                        </div>
                    </div>
                </div>
                <?php
                  } 
                ?>
            </div>
        </div>
        <!--- category end here --->

        <!----- about delivery information ----->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <h1 class="pt-5 text-center font-size">
                        Thank you, Delhi, for making us the No.1 pet provider in Delhi NCR! Your trust fuels our
                        passion.this year, we've found loving homes for 500+ kitten, all thanks to you. we look forword
                        to bringing more joy with every pet we provide
                    </h1>
                    <h4 class="text-center font-size text-danger pt-4 pb-5">
                        Successfully Delivered 500+ Furry Babies.
                    </h4>
                </div>
            </div>
        </div>
        <!------ end here ------>

        <!------ fedback videos start from here ------>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="">
                        <iframe
                            width="100%"
                            height="470"
                            src="https://www.youtube.com/embed/-p73kVYPzqU"
                            title="persian cat for sale #cat #catlover #petlover #funny #cute #duet #cutebaby #kitten #love #pets"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <iframe
                            width="100%"
                            height="470"
                            src="https://www.youtube.com/embed/xXl_ii1iwg0"
                            title="pure breed kitten -best pet shop in delhi"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <iframe
                            width="100%"
                            height="470"
                            src="https://www.youtube.com/embed/1YU3cm_t0mo"
                            title="We provide healthy kittens and cats for adoption in Delhi."
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <iframe
                            width="100%"
                            height="470"
                            src="https://www.youtube.com/embed/VU8lg9y5moA"
                            title="cat shop delhi | highqulitypet.in"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!------- feedback videos contend end here ------->

        <!----- persion cat price start here ------->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pt-5">
                        <i class="fa-solid fa-paw" style="font-size: 55px; color: #fc420c"></i>
                        <h1
                            class="pt-2"
                            style="font-size: 70px; font-family: &quot;Brush Script MT&quot; cursive; color: #675444"
                        >
                            Persian cat price in Delhi
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!------persion cat price end here -------->

        <!------- information about deliver season (2) ------->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pt-5 text-center">
                        <p class="pt-5">
                            Welcome a furry friend into your life with our stunning Persian cats, available in Delhi,
                            India, with prices ranging from INR 12,000 to 80,000. At Persian Kitten Delhi NCR, we <br />
                            take pride in offering the finest quality kittens in a variety of colors including white,
                            black, grey, golden, ginger, orange, calico, bicolor, and more. Just let us know your <br />
                            preferences, and we’ll help you find the perfect kitten.
                        </p>
                        <p>
                            We are dedicated to providing purebred, home-raised kittens with luxurious, three-coat fur.
                            Our Persian kittens are available at competitive prices throughout Delhi, offering <br />
                            you the opportunity to welcome a gorgeous feline companion into your family.
                        </p>
                        <p>
                            Explore our website to see all the options and allow us to assist you in finding the ideal
                            Persian kitten that suits your needs. Your dream kitten awaits at Persian Kitten Delhi
                            <br />
                            NCR.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!------ information about deliver season (2) end here ------>

        <!--- We make your customer happy! start from here --->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <h4>We make your customer happy!</h4>
                    </div>
                    <p>
                        High qulity pet is one of the most compassionate, clean, and high-touch Pet Grooming, Home like
                        Pet Boarding and Pet Moving (relocation) Services provider based out of Delhi, India. Our
                        boutique pet shop along with our Grooming Parlour is based out of Delhi. The pet relocation
                        service is both, global and domestic and limited to the relocation of cats and dogs.
                    </p>
                    <h5>We now provide broadly four types of services:</h5>
                    <div class="pb-2 mt-3">
                        <img class="pe-2" src="assets/imgs/img5.webp" width="30px" />Global Pet Relocation Services
                        <br />
                    </div>
                    <div class="pb-2">
                        <img class="pe-2" src="assets/imgs/img5.webp" width="30px" />Pet Grooming & Beauty Services
                        <br />
                    </div>
                    <div class="pb-2">
                        <img class="pe-2" src="assets/imgs/img5.webp" width="30px" />Pet Boarding Services for all types
                        of pets <br />
                    </div>
                    <div class="pb-2">
                        <img class="pe-2" src="assets/imgs/img5.webp" width="30px" />A boutique Pet Shop
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12"></div>
            </div>
        </div>
        <!--- We make your customer happy! end here --->

        <!----
    <div class="background-attech">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img src="assets/imgs/blurbimg.webp" style="width: auto; position: absolute; top: -200px; left: 200px; z-index: 999;">
                </div>
                <div class="col-lg-4 my-auto">
                    <div class="padding">
                        <h3>Calling All New Pet Parents!</h3>
                        <p>Join the Dogs & Cats Club Today</p>
                        <button class="button-contant">CONTACT US</button>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    --->

        <!--- Calling all new pet parents start from here --->
        <div class="background-attech">
            <div class="container">
                <div class="row flex-column flex-lg-row">
                    <div class="col-lg-8 text-center">
                        <img
                            src="assets/imgs/blurbimg.webp"
                            style="width: auto; position: absolute; top: -200px; left: 200px; z-index: 999"
                            class="blurbimg"
                        />
                    </div>
                    <div class="col-lg-4 my-auto">
                        <div class="padding">
                            <h3>Calling All New Pet Parents!</h3>
                            <p>Join the Dogs & Cats Club Today</p>
                            <button class="button-contant">CONTACT US</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- Calling all new pet parents start from here --->

        <!---- avail of Our other Services ---->
        <div class="background-file">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pt-5 text-center">
                            <i class="fa-solid fa-paw" style="font-size: 55px; color: #fc420c; padding-top: 150px"></i>
                            <h3
                                style="
                                    color: #675444;
                                    font-size: 60px;
                                    font-family: &quot;Open Sans&quot; &quot;sans-serif&quot;;
                                "
                            >
                                Avail Of Our Other Services
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- avail of Our other Services end here ---->

        <!---- pet servies start from here ---->
        <div class="background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pt-4">
                        <div class="background-color text-center">
                            <img
                                src="assets/imgs/h.jpeg"
                                width="90%"
                                style="border-radius: 155px 45px 225px 75px / 15px 125px 15px 155px"
                            />
                        </div>
                    </div>
                    <div class="col-lg-3 pt-4">
                        <div class="background-color text-center">
                            <img
                                src="assets/imgs/d.jpg"
                                width="90%"
                                style="border-radius: 155px 45px 225px 75px / 15px 125px 15px 155px"
                            />
                        </div>
                    </div>
                    <div class="col-lg-3 pt-4">
                        <div class="background-color text-center">
                            <img
                                src="assets/imgs/g.webp"
                                width="90%"
                                style="border-radius: 155px 45px 225px 75px / 15px 125px 15px 155px"
                            />
                        </div>
                    </div>
                    <div class="col-lg-3 pt-4">
                        <div class="background-color text-center">
                            <img
                                src="assets/imgs/1.png"
                                width="90%"
                                style="border-radius: 155px 45px 225px 75px / 15px 125px 15px 155px"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 pb-5 text-center">
                <div class="pt-5 pb-5">
                    <button class="button-change">CONTANT US</button>
                </div>
            </div>
        </div>
        <!---- pet servies end here ---->

        <!---- pet care information start from here ---->
        <div class="background-connection pt-5 pb-5 mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="counter">
                            <i class="fa-solid fa-users" style="font-size: 60px; color: #f8bf50"></i>
                            <h3 class="pt-3 text-white">1500</h3>
                            <center>
                                <hr style="width: 40px; color: white" />
                            </center>
                            <h5 class="text-white">PETS DELIVERED</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="counter">
                            <i class="fa-solid fa-dog" style="font-size: 60px; color: #f8bf50"></i>
                            <h3 class="pt-3 text-white">1500</h3>
                            <center>
                                <hr style="width: 40px; color: white" />
                            </center>
                            <h5 class="text-white">PETS DELIVERED</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="counter">
                            <i class="fa-solid fa-house" style="font-size: 60px; color: #f8bf50"></i>
                            <h3 class="pt-3 text-white">1500</h3>
                            <center>
                                <hr style="width: 40px; color: white" />
                            </center>
                            <h5 class="text-white">PETS DELIVERED</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="counter">
                            <i class="fa-solid fa-award" style="font-size: 60px; color: #f8bf50"></i>
                            <h3 class="pt-3 text-white">1500</h3>
                            <center>
                                <hr style="width: 40px; color: white" />
                            </center>
                            <h5 class="text-white">PETS DELIVERED</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- pet care information end here ---->

        <!---- footer of website start from here ---->
        <?php include "common/footer.php" ?>
        <!---- footer end here ---->

        <!------  navbar start from here 
    <div class="bg-warning sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="p-4">
                        <img src="assets/imgs/logo.png" height="50px" />
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="text-right p-4">
                        <span class="p-4 text-contant">Home</span>
                        <a class="p-4 text-contant" href="about_us.html">About us</a> 
                        <div class="dropdown text-contant">
                            <button class="drop-btn dropdown-toggle">Pets</button>
                            <div class="dropdown-content text-center">
                                <a href="#">Dogs</a>
                                <a href="#">Cats</a>
                                <a href="#">Birds</a>
                                <a href="#">Bengal</a>
                                <a href="#">British Shorthair</a>
                                <a href="#">Exotic Short hair</a>
                                <a href="#">Extreme Punch</a>
                                <a href="#">Himalayan</a>
                                <a href="#">Maine Coon</a>
                                <a href="#">Ragdoll</a>
                                <a href="#">Russian Blue</a>
                                <a href="#">Scottish Fold</a>
                                <a href="#">Siamese</a>
                            </div>
                        </div>
                        
                        <div class="dropdown text-contant">
                            <button class="drop-btn dropdown-toggle">PUPPIES</button>
                            <div class="dropdown-content text-center">
                                <a href="#">American Bully</a>
                                <a href="#" class="active">beagle</a>
                                <a href="#">Bichone Frise</a>
                                <a href="#">Bolognese</a>
                                <a href="#">Cavalier King Charles</a>
                                <a href="#">Chow Chow</a>
                                <a href="#">German Shepherd</a>
                                <a href="#">Golden Retriever</a>
                                <a href="#">Labrador</a>
                                <a href="#">Lhasa Apso</a>
                                <a href="#">Maltese</a>
                                <a href="#">Papilon</a>
                                <a href="#">Pekingese</a>
                                <a href="#">pomeranion</a>
                                <a href="#">Poodle</a>
                                <a href="#">pug</a>
                                <a href="#">Rottweiler</a>
                                <a href="#">Shin Tzn</a>
                                <a href="#">Siberain Huskey</a>
                                <a href="#">Toy Pom</a>
                                <a href="#">Yorkshire Terrier</a>
                            </div>
                        </div>
                        
                        <span class="p-4 text-contant">TESTIMONIALS</span>
                        <a href="pet-travel.html" class="p-4 text-contant">Pet Travel</a>
                        <a href="contact.html" class="p-4 text-contant">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     narbar end here ------>

        <!-- carousel start from here 
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
           
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

           
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/imgs/slide1.webp" alt="dogs image" class="d-block" style="width: 100%" />
                    <div class="carousel-caption" style="bottom: 50%">
                        <h1 style="color: #ffffff" class="font-family">Puppies for sale in delhi</h1>
                        <p class="font-family">Buy your favourite pet from us</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/imgs/slide2.webp" alt="cat image" class="d-block" style="width: 100%" />
                    <div class="carousel-caption" style="bottom: 50%">
                        <h1 style="color: #ffffff" class="font-family">Persian cat for sale in delhi</h1>
                        <p class="font-size">Buy your favourite pet from us</p>
                    </div>
                </div>
            </div>
           
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        carousel end here ----->

        <!---- footer start from here 
        <div class="background-items" style="border-top: 5px solid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pt-5">
                            <div class="background-img">
                                <img src="assets/imgs/logo.png" width="200px" />
                            </div>
                            <p class="text-light">
                                At High Quality Pets, we never compromise with quality, our aim is to provide you the
                                highest quality of cats or kitten at best market rate, our kittens are food and litter
                                trained, they are very active and playful will fill your life with joy, buy your persian
                                cat or kitten only from highqualitypets.in
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pt-5 m-auto w-50 text-light">
                            <h3>Explore</h3>
                            <h5>-Home</h5>
                            <h5>-About Us</h5>
                            <h5>-Dogs</h5>
                            <h5>-cats</h5>
                            <h5>-Testimonial</h5>
                            <h5>-Contact Us</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pt-5 text-white text-light">
                            <h2>Contact information</h2>
                            <span><i class="fa-solid fa-phone"></i> +91-9540532869</span><br />
                            <span><i class="fa-regular fa-envelope"></i> highqulitypets@gmail.com</span><br />
                            <span
                                ><i class="fa-solid fa-location-dot"></i> C-99,G/F BLOCK C JAFFARABAD NEAR MCD
                                PARK,DELHI,delhi 110032</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
       end here  ---->
    </body>
</html>
