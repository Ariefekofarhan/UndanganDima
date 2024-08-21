<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dima & Siska</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/ring.png">
    <style>
        /* No Scroll */
    body.no-scroll {
        overflow: hidden;
    }

    /* animasi pop up */
    @keyframes popUp {
        0% {
            transform: scale(0.5);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .pop-up {
        animation: popUp 0.5s ease-out forwards;
    }


        .map-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
}
        .hidden-content {
            display: none;
        }
        #countdown {
    display: flex; /* Flexbox for alignment */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    gap: 20px; /* Spacing between cards */
}

/* Countdown card styling */
.countdown-card {
    background-color: #914F1E; /* Black background */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Padding inside the card */
    color: #fff; /* White text color */
    text-align: center; /* Center align text */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Shadow for depth */
    width: 100px; /* Fixed width for the cards */
}
.countdown-card2 {
    background-color: #ffffff; /* Black background */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Padding inside the card */
    color: #fff; /* White text color */
    text-align: center; /* Center align text */
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.5); /* Shadow for depth */
    width: 40px; /* Fixed width for the cards */
}

.countdown-card h2 {
    font-size: 3rem; /* Large font size for numbers */
    margin: 0; /* Remove default margin */
    font-weight: bold; 
    color: #DEAC80;/* Bold font for prominence */
}

.countdown-card p {
    font-size: 1rem; /* Font size for labels */
    margin: 0; /* Remove default margin */
    font-weight: 500; /* Slightly bold label text */
}

/* Responsive design */
@media (max-width: 768px) {
    #countdown {
        flex-direction: column; /* Stack countdown cards vertically on small screens */
    }

    .countdown-card {
        width: auto; /* Auto width for stacked cards */
        margin-bottom: 10px; /* Margin below each card */
    }

    .countdown-card h2 {
        font-size: 2.5rem; /* Adjust font size for smaller screens */
    }

    .countdown-card p {
        font-size: 0.9rem; /* Adjust label font size for smaller screens */
    }
}
.card-custom {
            box-shadow: 0 40px 40px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
        }
        .card-body-custom {
            padding: 20px;
        }
        /* Galery */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive grid */
            gap: 50px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease; /* Add a smooth transition */
        }
        .gallery-item:hover img {
            transform: scale(1.1); /* Zoom on hover */
        }
        .gallery-item a {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .gallery-item a:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-1" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/2.1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Dima & Siska</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" id="playButton"><a href="#start"></a>
                                <span></span>
                            </button>
                             <!-- Elemen audio -->
    <audio id="backgroundAudio" src="sound\sound.mp3"></audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="start">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/3.4.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-uppercase text-white mb-3 animate-on-scroll" style="letter-spacing: 3px; ">Save The Date</h5>
                            <h2 class="display-1 font-secondary text-white mt-n3 mb-md-4 animate-on-scroll">Dima & Siska</h2>
                            <i class="far fa-heart text-white"></i>
                            <div class="d-inline-block py-3 px-4">
                                <p class="font-weight-normal font-size-small text-white mb-3 pb-1 animate-on-scroll" style="font-family: Verdana, sans-serif;">Dan di antara tanda-tanda (kebesaran)-Nya <br> ialah Dia menciptakan pasangan-pasangan <br>untukmu dari jenismu sendiri, agar kamu <br>cenderung dan merasa tentram kepadanya, <br>dan Dia menjadikan di antaramu rasa kasih <br> dan sayang. Sungguh, pada yang demikian <br> itu benar-benar terdapat tanda-tanda <br> (kebesaran Allah) bagi kaum yang berfikir </p>
                                <p class="font-weight-normal text-white pb-1 animate-on-scroll" style="letter-spacing: 2px;"><b>(Qs.Ar-Rum Ayat 21)</b></p>
                            </div>
                            <!-- Countdown Timer -->
                            <div class="container">
                                <div class="row align-items-start animate-on-scroll">
                                <div class="col">
                                    <h1 class="text-uppercase text-white" id="days">00</h1>
                                            <p>Days</p>
                                </div>
                                <div class="col">
                                    <h1 class="text-uppercase text-white"id="hours">00</h1>
                                            <p>Hours</p>
                                </div>
                                <div class="col">
                                    <h1 class="text-uppercase text-white" id="minutes">00</h1>
                                            <p>Minutes</p>
                                </div>
                                <div class="col">
                                    <h1 class="text-uppercase text-white" id="seconds">00</h1>
                                    <p>Seconds</p>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                
                <h1 class="font-secondary display-4 animate-on-scroll">The Groom & Bride</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <p class="text-center"><i> Tanpa mengurangi rasa hormat. Kami mengundang Bapak/ibu/Saudara/i serta kerabat sekalian untuk menghadiri acara pernikahan kami</i></p>
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0  ">
                <div class="col-md-6 p-0 text-center">
                    <div class=" animate-on-scroll h-100 d-flex flex-column justify-content-center p-5">
                        <h3 class="mb-3">The Groom</h3>
                        
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-male text-primary pr-3"></i>Dima Tri Putra</h3>
                        <p>Anak ketiga Dari <br> <b>Bapak Yuniardi & Ibu Nani Rosita</b></p>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="https://www.facebook.com/dima.triputra"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 p-0 " style="min-height: 400px; position: relative;">
                    <img class="card countdown-card2 position-absolute w-80 h-100" src="img/dimaBiru.jpg" style="object-fit: cover; width: 65%; height: 100%; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-6 p-0" style="min-height: 400px; position: relative;">
                    <img class="card countdown-card2  position-absolute w-60 h-100" src="img/obonBiru.jpg" style="object-fit: cover; width: 65%; height: 100%; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                </div>
                <div class="col-md-6 p-0 text-center">
                    <div class="animate-on-scroll h-100 d-flex flex-column justify-content-center p-5">
                        <h3 class="mb-3">The Bride</h3>
                        
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-female text-primary pr-3"></i>Siska Sahara</h3>
                        <p>Anak Perrtama Dari <br><b>Bapak Rahman & Ubu Cucun</b></p>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="https://www.facebook.com/siska.s.3150"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- About End -->
    
     <!-- Event Start -->
     <div class="container-fluid py-5" id="event">
        <div class="container py-5">
            <div class="card card-custom m-2 animate-on-scroll">
                <div class="card-body card-body-custom">
                    <div class="section-title position-relative text-center">
                        <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Event</h6>
                        <h1 class="font-secondary display-4">Our Wedding Event</h1>
                        <i class="far fa-heart text-dark"></i>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col-md-6 text-center">
                            <a href="https://maps.app.goo.gl/mTpJrcY49skgfBtL6"><button  class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4 mb-3" data-filter=".first">Google Map</button></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 border-right border-primary">
                            <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                                <img class="img-fluid mb-4" src="img/event-1.jpg" alt="">
                                <h4 class="mb-3">Akad Nikah</h4>
                                <p class="mb-2">Cipeuteuy, Kec. Kabandungan</p>
                                <p class="mb-0">12:00AM - 14:00PM</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center text-md-left ml-md-3">
                                <img class="img-fluid mb-4" src="img/event-2.jpg" alt="">
                                <h4 class="mb-3">Resepsi</h4>
                                <p class="mb-2">Cipeuteuy, Kec. Kabandungan</p>
                                <p class="mb-0">14:00AM - 18:00PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->
    <!-- Galery -->
    <div class="container-fluid" id="gallery" style="padding: 10px 0; margin: 10px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3 animate-on-scroll" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-black animate-on-scroll">Our Photo Gallery</h1>
            <i class="far fa-heart text-dark"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gallery-grid">
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/1.jpg" alt="">
                            <a href="img/1.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/2.jpg" alt="">
                            <a href="img/2.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/3.jpg" alt="">
                            <a href="img/3.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/14.jpg" alt="">
                            <a href="img/14.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/15.jpg" alt="">
                            <a href="img/15.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/13.jpg" alt="">
                            <a href="img/13.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/9.jpg" alt="">
                            <a href="img/9.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/7.jpg" alt="">
                            <a href="img/7.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/11.jpg" alt="">
                            <a href="img/11.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid w-100" src="img/16.jpg" alt="">
                            <a href="img/16.jpg" data-lightbox="gallery">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- turut mengundang -->
    <div class="container-fluid py-2" id="family">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Tamu Undangan</h6>
                <h1 class="font-secondary display-4">Turut Mengundang</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row animate-on-scroll">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul>
                            <p><b>Turut Mengndangan pihak laki-laki</b></p>
                            <li>Keluarga Besar Bapak Ishak</li>
                            <li>Keluarga Besar Bapak M. Yunus Saleh (alm)</li>
                            <li>Keluarga Besar BapakUci sanusi (alm)</li>
                            <li>Keluarga Besar BapakAtin (Alm)</li>
                            <li>Bapak Ujang Sopandi (Kepala Desa Pondokkaso landeuh)</li>
                            <li>Bapak Anto Nurwanto S.E. (Sekdes Pondokkaso landeuh)</li>
                            <li>Bapak Dadin Nuryadin S.Pd.</li>
                            <li>Bapak Isep Rizwan Efendi (Paman)</li>
                            <li>Bapak Dani Maulana (Paman)</li>
                            <li>Bapak Ujang Supriadi (Paman)</li>
                            <li>Bapak Iwang (Ketua RW 03)</li>
                            <li>Bapak Apip (Ketua RW 01)</li>
                            <li>Ibu Euis Suminar (Ketua RT 06)</li>
                            <li>Bapak H. Agustani (Ketua DKM)</li>
                            <li>Karang Taruna (Desa Pondokkasolandeuh)</li>
                            <li>Panji Azhar (Ketua Pemuda)</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                                <p><b>Turut Mengundang Pihak Perempuan</b></p>
                                <li>Bapak Purnama Wijaya (Kepala Desa)</li>
                                <li>Ustad Umar Bakri (Pimpinan Ponpes)</li>
                                <li>Ustad Yanto (Ustad setempat)</li>
                                <li>Ustad Mamat (Ustad setempat)</li>
                                <li>Bapak Adun (Uwa)</li>
                                <li>Bapak Rahmat (Uwa)</li>
                                <li>Ibu Farida (Uwa)</li>
                                <li>Bapak Tomi (Paman)</li>
                                <li>Bapak Maman (Uwa)</li>
                                <li>Bapak Udin (Uwa)</li>
                                <li>Bapak Ipin (Uwa)</li>
                                <li>Bapak Ibin (Uwa)</li>
                                <li>Bapak Dudun (Uwa)</li>
                                <li>Bapak Andi (Paman)</li>
                                <li>Anisa Tiara (Adik)</li>
                                <li>Sita Ainnur (Adik)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  turut mengundang End -->

    <div class="container-fluid" id="Gift">
    <div class="container py-2">
        <div class="d-flex flex-column align-items-center text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gift</h6>
            <h1 class="font-secondary display-4">Wedding Gift</h1>
             <!-- Gift -->
                <div class="gift animate-on-scroll">
                <div class="gift-front">
                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                    <img src="img/dana.jpg" alt="Logo" style="padding:2px; width: 168px; height: 48px; margin-right: 10px; z-index: 2;">
                    <div class="kotakatas"></div>
                    </div>
                    <p class="nama">M. Dima Tri Putra</p>
                    
                    <div><img class="qr" src="img/qr.jpg" alt=""></div>
                    <div class="number" id="number">
                        <span>0857</span>
                        <span>2080</span>
                        <span>7005</span>
                    </div>
                    <button onclick="copyNumber()"class="chip"><b>Salin</b></button>
                    <div class="expiry">
                    Valid Thru: 12/24
                    </div>
                    <div class="bulat"></div>
                    <div class="bulat1"></div>
                </div>
                <div class="gift-back">
                    <div class="stripe"></div>
                    <h1>CVV</h1>
                    <div class="cvv">123</div>
                </div>
                </div>
                <div class="gift animate-on-scroll">
                <div class="gift-front" style="background-color: #914F1E;">
                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                    <h3 style="z-index: 2;" class="font-dark m-4 text-muted">Gift</h3>
                    <div class="kotakatas"></div>
                    </div>
                    <p class="nama text-white" style=" left: 30%;" >Siska Sahara</p>
                    <button onclick="copyAlamat()"class="chip"><b>Salin</b></button>
                    <p class="text-white" id="alamat" style="text-align: left; font-size:12px; position:absolute; top:75%;">
                    6JF4+7QW, Jl. Kalapa Nunggalcipeutey, <br>Cipeuteuy, Kec. Kabandungan, <br>Kabupaten Sukabumi, Jawa Barat 43368</p>
                    <div class="bulat"></div>
                    <div class="bulat1"></div>
                </div>
                <div class="gift-back">
                    <div class="stripe"></div>
                    <h1>CVV</h1>
                    <div class="cvv">123</div>
                </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Google Map End -->

    <!-- Footer Start -->
         <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="contact">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/3.3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fas fa-ring text-white"></i>
                            <div class="d-inline-block py-3 px-4 mb-3">
                                <p class="font-weight-normal font-size-small text-white mb-3 pb-1 animate-on-scroll" style="font-family: Verdana, sans-serif;">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila <br> Anda berkenan hadir dan memberikan do’a restunya untuk pernikahan kami. <br><br>Atas do'a & restunya, kami ucapkan terima kasih.</p>
                            </div>
                            <div class="d-inline-block py-3 px-4 mb-4">
                                <p class="font-weight-normal text-white pb-1 animate-on-scroll" style="letter-spacing: 2px;"><b>Kami Yang Berbahagia.</b></p>
                                <h3 class="display-1 font-secondary text-white mt-n3 mb-md-4 animate-on-scroll">Dima & Siska</h3>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.tiktok.com/@far.hand?_t=8mfRpfSlAMZ&_r=1"><i class="fab fa-tiktok"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/arief.farhan.94"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.linkedin.com/in/arief-farhan-96425b312?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/arief.e_?igsh=MWJxdHVxZWs4eXlvbQ=="><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="m-0">&copy; 2024. Designed by <a class="text-primary" href="https://www.instagram.com/arief.e_?igsh=MWJxdHVxZWs4eXlvbQ==">@arief.e_</a> All Rights Reserved.</p>
                    </div>
                </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top mb-5" style="z-index: 5;"><i class="fa fa-angle-double-up"></i></a>

 <!-- Navbar Start -->
 <nav style="background-color: #982B1C;" class="navbar fixed-bottom shadow-sm navbar-expand-lg navbar-dark py-1 py-lg-0 px-lg-2">
    <!-- <a href="#home" class="navbar-brand d-block d-lg-none m-2 ">
        <i class="fas fa-home" style="color: #DAD4B5; font-size: 24px;"></i>
    </a>
    <a href="#about" class="navbar-brand d-block d-lg-none m-2 ">
        <i class="fas fa-user" style="color: #DAD4B5; font-size: 24px;"></i>
    </a>
    <a href="#gallery" class="navbar-brand d-block d-lg-none m-2 ">
        <i class="fas fa-images" style="color: #DAD4B5; font-size: 24px;"></i>
    </a>
    <a href="#family" class="navbar-brand d-block d-lg-none m-2 ">
        <i class="fas fa-users" style="color: #DAD4B5; font-size: 24px;"></i>
    </a>
    <a href="#rsvp" class="navbar-brand d-block d-lg-none m-2 ">
        <i class="fas fa-heart" style="color: #DAD4B5; font-size: 24px;"></i>
    </a>
    <a href="#contact" class="navbar-brand d-block d-lg-none m-2">
        <i class="fas fa-envelope" style="color: #DAD4B5; font-size: 24px;"></i>
    </a> -->

    <div class="navbar-brand d-block d-lg-none " style="color: #DAD4B5; font-size: 24px;" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0 ">
            <a href="#home" class="nav-item nav-link active m-2"><i class="fas fa-home"></i></a>
            <a href="#about" class="nav-item nav-link m-2"><i class="fas fa-user"></i></a>
            <a href="#gallery" class="nav-item nav-link m-2"><i class="fas fa-images"></i></a>
            <a href="#family" class="nav-item nav-link m-2"><i class="fas fa-users"></i></a>
            <a href="#rsvp" class="nav-item nav-link m-2"><i class="fas fa-heart"></i></a>
            <a href="#contact" class="nav-item nav-link m-2"><i class="fas fa-envelope"></i></a>
        </div>
    </div>

    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="#home" class="nav-item nav-link active"><i class="fas fa-home"></i></a>
            <a href="#about" class="nav-item nav-link"><i class="fas fa-user"></i></a>
            <a href="#gallery" class="nav-item nav-link"><i class="fas fa-images"></i></a>
        </div>
        <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                <h1 class="font-secondary text-white mb-n2">Dima <span style="color: #fff;">&</span> Siska</h1>
            </a>
        <div class="navbar-nav mr-auto py-0">
            <a href="#family" class="nav-item nav-link"><i class="fas fa-users"></i></a>
            <a href="#Gift" class="nav-item nav-link"><i class="fas fa-gift"></i></a>
            <a href="#contact" class="nav-item nav-link"><i class="fas fa-envelope"></i></a>
        </div>
    </div>
</nav>

    <!-- Navbar End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
          // Salin nomor
    function copyNumber() {
    // Menggabungkan teks dari elemen span menjadi satu string
    var number = document.getElementById("number").innerText;
    
    // Membuat elemen textarea untuk menyalin teks
    var textarea = document.createElement("textarea");
    textarea.value = number;
    document.body.appendChild(textarea);
    
    // Menyalin teks ke clipboard
    textarea.select();
    document.execCommand("copy");
    
    // Menghapus elemen textarea setelah menyalin
    document.body.removeChild(textarea);
    
    // Menampilkan alert jika nomor berhasil disalin
    alert("Number copied: " + number);
}
    function copyAlamat() {
    // Menggabungkan teks dari elemen span menjadi satu string
    var number = document.getElementById("alamat").innerText;
    
    // Membuat elemen textarea untuk menyalin teks
    var textarea = document.createElement("textarea");
    textarea.value = number;
    document.body.appendChild(textarea);
    
    // Menyalin teks ke clipboard
    textarea.select();
    document.execCommand("copy");
    
    // Menghapus elemen textarea setelah menyalin
    document.body.removeChild(textarea);
    
    // Menampilkan alert jika nomor berhasil disalin
    alert("Alamat copied: " + number);
}
    // No Scroll
    document.addEventListener("DOMContentLoaded", function() {
        // Menonaktifkan scroll pada awalnya
        document.body.classList.add('no-scroll');

        // Menangani klik tombol play
        document.getElementById('playButton').addEventListener('click', function() {
            // Mengaktifkan scroll kembali
            document.body.classList.remove('no-scroll');
        });
    });

        document.getElementById('playButton').addEventListener('click', function() {
            document.getElementById('main-content').classList.remove('hidden');
            document.getElementById('home').classList.add('hidden');  // Optionally hide the carousel after play
        });

        // Additional code to handle video playback
        document.querySelectorAll('.btn-play').forEach(button => {
            button.addEventListener('click', function() {
                var videoSrc = button.getAttribute('data-src');
                var videoFrame = document.getElementById('video');
                videoFrame.setAttribute('src', videoSrc);
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
    function updateCountdown() {
        const targetDate = new Date('2024-09-09T09:00:00'); // Tanggal target 9 September jam 09:00
        const now = new Date();
        const timeDiff = targetDate - now;

        if (timeDiff <= 0) {
            document.getElementById('countdown').innerHTML = '<h2>00</h2><p>Days</p><h2>00</h2><p>Hours</p><h2>00</h2><p>Minutes</p><h2>00</h2><p>Seconds</p>';
            return;
        }

        const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

        document.getElementById('days').innerText = days.toString().padStart(2, '0');
        document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
        document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');
    }

    setInterval(updateCountdown, 1000); // Update setiap detik
});
document.getElementById('playButton').addEventListener('click', function() {
            var audio = document.getElementById('backgroundAudio');
            audio.play(); // Memutar audio
            document.getElementById('start').scrollIntoView({ behavior: 'smooth' }); // Scroll ke bagian About
        });
        document.getElementById('rsvpForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
});

// db_rsvp
document.getElementById('rsvpForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form yang default

    // Ambil data dari form
    var name = document.getElementById('name').value;
    var message = document.getElementById('message').value;

    // Kirim data ke PHP menggunakan Fetch API
    fetch('submit_rsvp.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'name': name,
            'message': message
        })
    })
    .then(response => response.text())
    .then(data => {
        // Tampilkan alert di dalam elemen yang sudah disediakan
        var alertContainer = document.getElementById('alertContainer');
        alertContainer.innerHTML = '<div class="alert alert-success" role="alert">Successfully submitted</div>';
        
        // Reset form setelah respons diterima
        document.getElementById('rsvpForm').reset();
    })
    .catch(error => {
        // Tangani error jika ada
        console.error('Error:', error);
        var alertContainer = document.getElementById('alertContainer');
        alertContainer.innerHTML = '<div class="alert alert-danger" role="alert">Submission failed. Please try again.</div>';
    });
});




// // Muncul Pesan
// document.getElementById('rsvpForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent the default form submission

//     // Capture form values
//     var name = document.getElementById('name').value;
//     var message = document.getElementById('message').value;

//     // Update card content
//     document.getElementById('userName').textContent = name;
//     document.getElementById('userMessage').textContent = message;

//     // Show the success card
//     document.getElementById('messageCard').style.display = 'block';

//     // Append the new message to the list
//     var messageContainer = document.createElement('div');
//     messageContainer.className = 'border-bottom py-2';
//     messageContainer.innerHTML = '<strong>' + name + ':</strong> ' + message;
//     document.getElementById('rsvpMessages').appendChild(messageContainer);
// });
    // Optionally, you can hide the form or reset it
    // document.getElementById('rsvpForm').reset();
    </script>
<!-- Card -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Galery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

<!-- Animasi -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.animate-on-scroll');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

</body>

</html>