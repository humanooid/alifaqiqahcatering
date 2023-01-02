<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Catering dan Aqiqah anak Pangkalpinang, Sungailiat dan Toboali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Pichforest" name="author" />

    <link rel="shortcut icon" href="../../favicon.png">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="../../css/materialdesignicons.min.css" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="../../css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="../../css/swiper.min.css" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="../../css/style.min.css" type="text/css" />
    <link rel="stylesheet" href="../../css/custom.css" type="text/css" />

    <!-- Colors -->
    <link href="../../css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="../../css/swiper-js.css" rel="stylesheet" type="text/css" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body[data-layout-mode=dark] .accordion .accordion-body {
            background-color: #343f4b !important;
        }

        body[data-layout-mode=dark] .accordion .accordion-body p {
            color: #ffffff !important;
        }

        .text-gradiant {
            background: -webkit-linear-gradient(#00613A, #005734);
            -webkit-background-clip: text;
        }

        .bg-gradiant {
            background: linear-gradient(80deg, #00613A 0%, #005734 100%);
            border: none !important;
            color: #fff !important;
        }

        .mode-btn {
            background-color: #343a40;
            border: 1px solid #343a40;
        }

        .navbar .navbar-nav .nav-link:hover,
        .navbar .navbar-nav .nav-link:active,
        .navbar .navbar-nav .nav-link.active {
            color: #00613A !important;
        }

        .btn {
            border-color: #00613A;
        }

        .btn-link {
            color: #00613A;
        }

        .btn-link:hover {
            color: #005734;
        }

        .service .service-box a:hover {
            color: #00613A;
        }

        .service .service-box:hover a {
            color: #00613A;
        }


        .app-slider .swiper-container .swiper-pagination-bullet-active {
            background: #00613A;
        }

        .section.footer.bg-dark.overflow-hidden .bg-arrow {
            background: #00613A;
            background-repeat: no-repeat;
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-left: auto;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 1.25rem;
            transition: transform .2s ease-in-out
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transform: rotate(-180deg)
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode">
        <!-- <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i> -->
    </a>

    <!-- START  NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
        <div class="container-fluid">

            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="/">
                <img src="logo.png" class="logo-light" alt="" height="30">
                <img src="alifaqiqah logo.png" class="logo-dark" alt="" height="30">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Layanan</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#app">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                {{-- <div class="ms-auto">
                    <a href="" class="btn bg-gradiant">Login</a>
                </div> --}}
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->



    <!-- home section -->
    <section class="home bg-light" id="home">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    {{-- <img src="images/baby-phone.png" alt="" class="img-fluid mb-4 smallphone-image"> --}}
                    <h1 class="display-5 fw-bold mt-5">Aqiqah <span class="hashtag-text px-3">#terbaik</span> dengan paket harga yang tepat.</h1>
                    <p class="mt-4 text-muted">Wilayah Pangkalpinang dan sekitarnya</p>
                    {{-- <button class="btn bg-gradiant mt-4">Read More</button> --}}
                </div>



                <div class="col-lg-6">
                    <!-- <img src="home-left.png" alt="" class="img-fluid"> -->
                    {{-- <div class="up-botton-text d-flex align-items-center d-none d-md-block">
                        <h5>Welcome To Styza 🙋‍♀️</h5>
                    </div> --}}
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

        <div class="background-line"></div>
    </section>
    <!-- end home section -->



    <!-- service section -->
    <section class="section service" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Kenapa Memilih Kami?</h6>
                        <h2 class="f-40">Layanan Aqiqah & Catering Kami</h2>
                        {{-- <div class="border-phone">
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                                inventore omnis aliquid rerum alias molestias.</p>

                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-lg-3">
                    <div class="service-box text-center shadow">
                        <div class="service-icon p-4" style="background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-shield-check-outline text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="#" class="serviceTitle">
                                <h5 class="fw-bold">Sudah Terdaftar dan Memiliki Kandang Sendiri</h5>
                            </a>
                            <p class="text-muted" style="text-align:justify;">Alif Aqiqah & Catering didalam
                                memenuhi kualitas dan pelayanan
                                kepada anda telah terdaftar sebagai Tempat Pemotongan Hewan yang sehat dengan
                                dikeluarkannya Surat Keterangan Tempat
                                <span id="service1">
                                    Pemotongan Hewan dari Dinas Pertanian terkait
                                    bernomor :
                                    524.7/0625/TPH-MDBRT/DINPERTAN/2018.
                                    <br><br>
                                    Penataan Bangunan dengan kelengkapan Kandang sendiri dengan ketersediaan Kambing
                                    atau
                                    Domba campur sekitar 40 s.d 50 ekor perbulan, Ruang Penampungan, Tempat Pembuangan
                                    Limbah, Ruang Pelayuan Daging dan tersedianya sumber air bersih. Menjadikan Alif
                                    Aqiqah
                                    & Catering terus berbenah mencapai peringkat standarisasi terbaik.
                                </span>
                                <br>
                                <center>
                                    <button class="btn btn-sm btn-link" onclick="expandService($(this), 1)">Lihat
                                        Selengkapnya</button>
                                </center>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 pt-4 pt-lg-0">
                    <div class="service-box text-center shadow">
                        <div class="service-icon p-4" style="background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-clipboard-search-outline text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="#" class="serviceTitle">
                                <h5 class="fw-bold">Pilihan Paket Aqiqah yang Tepat dan Bersertifikat</h5>
                            </a>
                            <p class="text-muted" style="text-align:justify;">Kami menyediakan ragam pilihan paket
                                harga yang tepat untuk aqiqah
                                anda, Anda dapat memilih bebas Kambing atau Domba Aqiqah Sehat berkualitas yang kami
                                sediakan sesuai syar'i dan
                                <span id="service2">
                                    sebagai amanah kami, juga menu masakan yang dapat disesuaikan
                                    fleksible untuk memenuhi selera yang anda inginkan dengan Kombinasi Harga Murah dan
                                    Kualitas Rasa menghasilkan Ketepatan kepuasan meriah, istimewa, hemat dan Barokah.
                                    <br><br>
                                    Mendapatkan Sertifikat Aqiqah bagi yang beraqiqah dan bonus mendapatkan Risalah
                                    Aqiqah.
                                    Dan Kami menyediakan Hadiah Spanduk Do'a dan atau Selamat datang untuk Tasyakuran
                                    Aqiqah
                                    pada Pemilihan Paket tertentu.
                                </span>
                                <br>
                                <center>
                                    <button class="btn btn-sm btn-link" onclick="expandService($(this), 2)">Lihat
                                        Selengkapnya</button>
                                </center>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 pt-4 pt-lg-0">
                    <div class="service-box text-center shadow">
                        <div class="service-icon p-4" style="background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-silverware-fork-knife text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="#" class="serviceTitle">
                                <h5 class="fw-bold">Masakan Hiegienis dan Tidak Berbau Prengus</h5>
                            </a>
                            <p class="text-muted" style="text-align:justify;">Rasa Masakan yang sedap dan enak pada
                                menu kami telah teruji sejak
                                tahun 2012 yang lalu, melalui program tester masakan yang kami sediakan dan atau pada
                                survey atas testimoni Customer Alif
                                <span id="service3">
                                    Aqiqah & Catering.
                                    <br><br>
                                    Yang tetap Konsisten kami jaga adalah Proses yang Syar'i, Prioritas Hiegienis plus
                                    melengkapi rasa yang enak dan sedap dengan menghilangkan bau prengus pada menu
                                    masakan.
                                    Dengan adanya Surat Laik Hiegienis dari Dinas Kesehatan (DKPPKB) Kota Pangkalpinang
                                    Nomor : 443.51/144/DINKES-PPKB/VIII/2018 dan Sertifikat Halal MUI untuk Catering dan
                                    rumah potong hewan.
                                    <br><br>
                                    Upaya ini adalah didalam menjunjung amanah yang telah dipercayakan kepada kami dan
                                    Profesionalitas untuk anda.
                                </span>
                                <br>
                                <center>
                                    <button class="btn btn-sm btn-link" onclick="expandService($(this), 3)">Lihat
                                        Selengkapnya</button>
                                </center>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 pt-4 pt-lg-0">
                    <div class="service-box text-center shadow">
                        <div class="service-icon p-4" style="background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-human-handsup text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="#" class="serviceTitle">
                                <h5 class="fw-bold">Pelayanan Gratis Antar dan Distribusi</h5>
                            </a>
                            <p class="text-muted" style="text-align:justify;">Ramah tamah dan Kemudahan bagi anda
                                untuk kami utamakan. Dengan
                                Pelayanan Online Website, Fanpage Facebook dan WA pada 24/7 (full Service) dari Petugas
                                kami.
                                <br>
                                <span id="service4">
                                    <br>
                                    Alif Aqiqah & Catering melayani secara cuma-cuma untuk antaran Paket Aqiqah dan
                                    Distribusi kepada Pihak yang anda tunjukkan atau Pihak yang kami sediakan didalam
                                    wilayah yang sama. Distribusi ditujukan kepada Pondok Pesantren, Anak Yatim, Panti
                                    Asuhan. Pelayanan Distribusi terdokumentasi yang nantinya dikirimkan kepada anda.
                                </span>
                                <br>
                                <center>
                                    <button class="btn btn-sm btn-link" onclick="expandService($(this), 4)">Lihat
                                        Selengkapnya</button>
                                </center>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start features -->
    <!-- <div class="section features" id="features">    -->
    <!-- start container -->
    <div class="container">
        <!-- <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Kenapa Perlu Aqiqah?</h6>
                        <h2 class="f-40">Dalil Aqiqah</h2>
                        <p class="text-muted">
                        <h4>
                            كُلُّ غُلاَمٍ رَهِينَةٌ بِعَقِيقَتِهِ تُذْبَحُ عَنْهُ يَوْمَ سَابِعِهِ
                            وَيُحْلَقُ وَيُسَمَّيكُلُّ غُلاَمٍ رَهِينَةٌ بِعَقِيقَتِهِ تَذْ بَحُ عَنْهُ يَوْمَ سَابِعِهِ
                            وَيُحْلَقُ وَيُسَمَّى“
                        </h4>
                        <h6>
                            Setiap bayi tergadai dengan aqiqahnya, disembelihkan (kambing)
                            untuknya pada hari ke tujuh, dicukur dan diberi nama”
                        </h6>
                        <em>
                            [HR Abu awud, no. 2838, at-Tirmidzi no. 1522,
                            Ibnu Majah no. 3165 dll dari sahabat Samurah bin Jundub Radhiyallahu anhu.
                            Hadits ini dishahihkan oleh al-Hakim dan disetujui oleh adz-Dzahabi, Syaikh al-Albani
                            dan Syaikh Abu Ishaq al-Huwaini dalam kitab al-Insyirah Fi Adabin Nikah hlm. 97]
                        </em>
                        </p>
                    </div>
                </div>
            </div> -->

        {{-- <div class="row justify-content-center">


                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Top Features</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Smart Features</button>
                        </li>

                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="features-item text-start text-lg-end">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-message-alert-outline f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Responsive Design</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-autorenew f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Cool Features</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-eyedropper f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Lifetime Support</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="images/features/phone.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <div class="features-item">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-lifebuoy f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Stunning Design</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-dropbox f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Best PSD Pack</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-flask f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Creative Idea</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="images/features/phone2.png" alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Smart Features</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Fast Messaging</h6>
                                                        <p class="text-muted">Soluta velit sint, esse quis tempora
                                                            impedit corrupti in recusandae tenetur dignissimos
                                                            voluptates..</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">User Freindly</h6>
                                                        <p class="text-muted">Amet repudiandae illo quasi enim
                                                            iusto
                                                            corporis ratione? Laudantium reprehenderit sint provident.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Minimal Interface</h6>
                                                        <p class="text-muted">Repellat ad in autem, odio quos ex
                                                            eum
                                                            recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                            soluta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notification</h6>
                                                        <p class="text-muted">Ipsam nisi quam velit maxime corrupti
                                                            ut
                                                            quos, ad eum laudantium voluptatibus, facilis numquam
                                                            repellendus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
    </div>
    <!-- end container -->
    </div>
    <!-- end features -->



    <!-- testimonial section -->
    {{-- <section class="section bg-light testimonial" id="testimonial">
        <!-- start container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="title">
                        <p class=" text-primary fw-bold mb-0">Client Testimonial <i
                                class="mdi mdi-cellphone-iphone"></i>
                        </p>
                        <h3>What they think of us!</h3>
                        <p class="text-muted">Morbi at erat et tortor tempor sodales non eu lacus Donec at gravida
                            nunc
                            vitae
                            volutpat. Morbi in sem quis
                            dui placerat ornare.</p>
                        <button class="btn bg-gradiant">Read More Testimonial <i
                                class="mdi mdi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testi-slider" id="testi-slider">
                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-1.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-2.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Easy and prefect solution</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-3.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-4.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-4.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <!-- slider item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section> --}}
    <!-- end testimonial -->

    <!-- pricing section -->
    <section class="section pricing  bg-light" id="pricing">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Paketnya Apa Saja?</h6>
                        <h2 class="f-40">Pilihan Paket</h2>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                            inventore omnis aliquid rerum alias molestias.</p> --}}

                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-lg-2">
                    <div class="price-item shadow overflow-hidden">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Paket A</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-light mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>1,850</h2>
                            </div>
                            <p class="text-white-50 mb-0">Domba Betina</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>200 Sate Tusuk</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>50 Porsi Gulai</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Spanduk (Jika ada Acara)</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Tempelan Nama Anak untuk Nasi Kotak</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+Sertifikat Aqiqah</li>
                            </ul>
                            <center>
                                <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket A&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="price-item shadow overflow-hidden mt-4 mt-lg-0">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Paket B</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>2,000</h2>
                            </div>
                            <p class="text-white-50 mb-0">Domba Betina</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>250 Sate Tusuk</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>65 Porsi Gulai</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Spanduk (Jika ada Acara)</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Tempelan Nama Anak untuk Nasi Kotak</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+Sertifikat Aqiqah</li>
                            </ul>
                            <center>
                                <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket B&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="price-item shadow overflow-hidden mt-4 mt-lg-0">
                        <div class="topbar-header bg-danger py-2 text-center">
                            <h6 class="mb-0 text-white fw-normal"><b>Harga Terbaik !</b></h6>
                        </div>
                        <div class="price-up-box bg-warning active p-4">
                            <div class="badge bg-warning fw-normal f-14">Paket C</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>2,200</h2>
                            </div>
                            <p class="text-white-50 mb-0">Kambing Betina</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>350 Sate Tusuk</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>80 Porsi Gulai</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Spanduk (Jika ada Acara)</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Tempelan Nama Anak untuk Nasi Kotak</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+Sertifikat Aqiqah</li>
                            </ul>
                            <center>
                                <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket C&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="price-item shadow overflow-hidden mt-4 mt-lg-0">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Paket D</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>2,650</h2>
                            </div>
                            <p class="text-white-50 mb-0">Kambing Betina</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>500 Sate Tusuk</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>100 Porsi Gulai</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Spanduk (Jika ada Acara)</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Tempelan Nama Anak untuk Nasi Kotak</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+Sertifikat Aqiqah</li>
                            </ul>
                            <center>
                                <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket D&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="price-item shadow overflow-hidden mt-4 mt-lg-0">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Paket E</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>2,800</h2>
                            </div>
                            <p class="text-white-50 mb-0">Kambing Betina</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>300 Sate Tusuk</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>70 Porsi Gulai</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Spanduk (Jika ada Acara)</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Tempelan Nama Anak untuk Nasi Kotak</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+Sertifikat Aqiqah</li>
                            </ul>
                            <center>
                                <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket E&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row align-items-center justify-content-center">
                <div class="col-lg-2">
                    <div class="price-item shadow overflow-hidden">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Paket F</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>3,000</h2>
                            </div>
                            <p class="text-white-50 mb-0">Kambing Jantan</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>350 Sate Tusuk</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>85 Porsi Gulai</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Spanduk (Jika ada Acara)</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Tempelan Nama Anak untuk Nasi Kotak</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+Sertifikat Aqiqah</li>
                            </ul>
                            <center>
                                <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket F&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="price-item shadow overflow-hidden mt-4 mt-lg-0">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Paket G</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>3.300</h2>
                            </div>
                            <p class="text-white-50 mb-0">Kambing Jantan</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>500 Sate Tusuk</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>100 Porsi Gulai</b></li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Spanduk (Jika ada Acara)</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Tempelan Nama Anak untuk Nasi Kotak</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+ Sertifikat Aqiqah</li>
                            </ul>
                            <center>
                                <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket G&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                            </center>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-2">
                <div class="price-item shadow overflow-hidden mt-4 mt-lg-0">
                    <div class="price-up-box p-4">
                        <div class="badge bg-primary fw-normal f-14">Paket H</div>
                        <div class="price-tag mt-2">
                            <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">IDR</sup>3,000</h2>
                        </div>
                        <p class="text-white-50 mb-0">Kambing Jantan</p>
                    </div>
                    <div class="border border-3"></div>

                    <div class="price-down-box p-4">
                        <ul class="list-unstyled ">
                            <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>500 Sate Tusuk</b></li>
                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>80 Porsi Gulai</b></li>
                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Antar Wil. Pangkalpinang dan Sekitarnya*</li>
                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Gratis Distribusi</li>
                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+ Sertifikat Aqiqah</li>
                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>+ Risalah Aqiqah</li>
                        </ul>
                        <center>
                            <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah Paket H&phone=+6281395493158" class="btn btn-sm btn-primary mt-3">PESAN</a>
                        </center>
                    </div>
                </div>
            </div> -->
            </div>

        </div>

        <br>

        <!-- <div class="container-fluid mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 bg-muted pt-3" style="height: 110px">
                    <div class="title">
                        <h4 class="text-white">Paket Aqiqah Kambing Jantan Paket Masak</h4>
                    </div>
                    <center>
                        <img src="../../Jual-Kambing-domba-Alif-Aqiqah-Catering-Pangkalpinang.png"
                            alt="Jual-Kambing-domba-Alif-Aqiqah-Catering-Pangkalpinang" width="100px"
                            class="img-fluid mt-2">
                    </center>
                </div>
                <div class="col-lg-4 bg-dark pt-3" style="height: 110px">
                    <div class="title">
                        <h4 class="text-white">Catering | Nasi Kotak | Prasmanan</h4>
                    </div>
                    <img src="../../Nasi-Kotak-Alif-Aqiqah-Catering-Pangkalpinang.png"
                        alt="Nasi-Kotak-Alif-Aqiqah-Catering-Pangkalpinang" width="70px" class="img-fluid">
                    <button class="btn btn-sm btn-orange float-end mb-3">Pesan</button>
                </div>
            </div>
        </div> -->

        <br>

    </section>
    <!-- end pricing -->

    <!-- box package section -->
    <section class="section box-package" id="box-package">
        <div class="col-lg-12 mt-5">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-4">
                    <div class="accordion shadow" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Paket Nasi Kotak Menu A
                                    <span class="badge bg-warning text-dark mx-2">Rp. 13.000,-</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <center>
                                        <ul class="list-unstyled ">
                                            <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Nasi Putih</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Sayur</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Acar</li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Paket Nasi Kotak Menu B
                                    <span class="badge bg-warning text-dark mx-2">Rp. 14.500,-</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <center>
                                        <ul class="list-unstyled ">
                                            <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Nasi Putih</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Sayur/Acar</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>Buah</b></li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>Kerupuk</b></li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>Sambel</b></li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Paket Nasi Kotak Menu C
                                    <span class="badge bg-warning text-dark mx-2">Rp. 17.500,-</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <center>
                                        <ul class="list-unstyled ">
                                            <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Nasi Putih</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Sayur/Acar</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Buah</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Kerupuk</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>Sambel + Telur</b></li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Paket Nasi Kotak Menu D
                                    <span class="badge bg-warning text-dark mx-2">Rp. 20.000,-</span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <center>
                                        <ul class="list-unstyled ">
                                            <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Nasi Putih</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Sayur/Acar</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Buah</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Kerupuk</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>Sambel Telur dan Goreng Ati</b></li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>Air Mineral</b></li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Paket Nasi Kotak Menu E
                                    <span class="badge bg-warning text-dark mx-2">Rp. 25.000,-</span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <center>
                                        <ul class="list-unstyled ">
                                            <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Nasi Putih</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Sayur/Acar</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Buah</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Kerupuk</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Sambel Telur/Goreng Ati</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Air Mineral</li>
                                            <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i><b>Masakan Ayam (*Isi di Form) </b></li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 m-3">
                    <div class="accordion shadow" id="accordionExample">
                        <div class="accordion-item">
                            <div class="row">
                                <div class="bg-warning p-4 rounded-top shadow">
                                    <div class="title float-start">
                                        <h4 class="text-white">PAKET LIVEGRILL & LIVESTOCK</h4>
                                        <hr class="mb-2">
                                        <p class="text-white">Kambing Guling, Bakar Lezat Plus Layanan Masak, Kambing
                                            Hidup yang sehat dan bobot berkualitas</p>
                                    </div>

                                    <a href="whatsapp://send?text=Assalamu'alaikum admin Alif Aqiqah, saya ingin pesan Aqiqah PAKET LIVEGRILL & LIVESTOCK&phone=+6281395493158">
                                        <button class="btn btn-muted float-end">PESAN
                                        </button>
                                    </a>
                                    <h3><span class="badge bg-light text-danger position-absolute px-5" style="bottom: -20px; left: 10px; z-index: 99;">Mulai dari IDR 2,200</span></h3>
                                </div>
                                <div class="col-12 p-0 shadow">
                                    <div id="foto">
                                        <img class="img-fluid rounded-bottom" src="../../images/foto.jpg" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end box package -->

    <!-- slider section -->
    <section class="section app-slider bg-light" id="app">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Apa Kata Pelanggan?</h6>
                        <h2 class="f-40">Testimoni</h2>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                            <br>
                            inventore omnis aliquid rerum alias molestias.
                        </p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container">
                        {{-- <div class="fream-phone ">
                            <img src="images/testi/phone-fream.png" alt="" class="img-fluid">
                        </div> --}}

                        <div class="swiper-wrapper">
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes1.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes2.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes3.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes4.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes5.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes6.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes7.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="testimonials/tes8.png" alt="" class="img-fluid">
                            </div>
                        </div>

                        <!-- navigation buttons -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
    </section>
    <!-- end section -->

    <!-- gallery section -->
    <!-- Swiper -->
    <section class="section pricing" id="gallery">
        <div class="title text-center mb-5">
            <h6 class="mb-0 fw-bold text-primary">Sate, Gule, Nasi Kebuli</h6>
            <h2 class="f-40">Galeri Kami</h2>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/galeri-1.jpg" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                    <img src="../images/galeri-2.jpg" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                    <img src="../images/galeri-3.jpg" alt="Slide 3">
                </div>
                <div class="swiper-slide">
                    <img src="../images/galeri-4.jpg" alt="Slide 4">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- end-section -->

    <!-- footer section -->
    <section class=" section footer bg-dark overflow-hidden" id="contact">
        <div class="bg-arrow">

        </div>
        <!-- container -->
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <a class="navbar-brand-footer logo text-uppercase" href="index-1.html">
                        <img src="logo.png" class="logo-light" alt="" height="30">
                        <!-- <img src="images/logo-dark.png" class="logo-dark" alt="" height="28"> -->
                    </a>
                    <p class="text-white-50 mt-2 mb-0">
                        <b class="text-white">PANGKALPINANG (Alamat Kantor dan Catering)</b><br>
                        0813 9549 3158 | 0852 0890 2234<br>Jalan Selangat Komplek Guru No. 1
                        Selindung Baru <br>

                        <b class="text-white">Alamat Kandang</b><br>
                        Parit lalang, Pangkalpinang
                    </p>
                    <p class="text-white-50 mt-2 mb-0">
                        <b class="text-white">SUNGAILIAT</b>
                        <br>
                        0812 71 777 43<br>
                        Jalan Batin Tikal No. 59/127
                        Senang Hati
                    </p>
                    <p class="text-white-50 mt-2 mb-0">
                        <b class="text-white">TOBOALI</b><br>
                        0853 8367 4812<br>
                        Gang Mawar
                        Kelurahan Gadung
                    </p>
                    <p class="text-white-50 mt-2 mb-0">
                        <b class="text-white">KOBA</b><br>
                        0852 7392 9997<br>
                        Jl. Balai Desa Nibung RT.06
                        Kelurahan Gadung
                    </p>
                    <div class="footer-icon mt-4">
                        <div class=" d-flex align-items-center">
                            <a href="https://web.facebook.com/people/Alif-Aqiqah-Catering-Pangkalpinang/100069678948378/" class="me-2 avatar-sm text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                                <i class="mdi mdi-facebook f-24 align-middle text-light"></i>
                            </a>
                            <a href="https://www.instagram.com/alifaqiqahcatering/?hl=en" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                <i class="mdi mdi-instagram f-24 align-middle text-light"></i>
                            </a>
                            <a href="https://wa.me/+6281395493158" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="WhatsApp">
                                <i class="mdi mdi-whatsapp f-24 align-middle text-light"></i>
                            </a>
                            <!-- <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter">
                                <i class="mdi mdi-twitter f-24 align-middle text-light"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="googleplay">
                                <i class="mdi mdi-google-play f-24 align-middle text-light"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center">
                                <i class="mdi mdi-linkedin f-24 align-middle text-light" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"></i>
                            </a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5 class="text-white">Contact Us</h5>
                    <form class="contactForm" action="sendemail.php" method="get">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="name" class="text-white form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="email" class="text-white form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phone" class="text-white form-label">No Handphone</label>
                                    <input type="number" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="message" class="text-white form-label">Pesan</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="mailto:gilangaryadimahardika@gmail.com">
                                    <button type="submit" class="btn btn-muted float-end" name="submit" value="submit">Submit</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- end container -->
    </section>

    <section class="bottom-footer py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="mb-0 text-center text-muted">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> alifaqiqahcatering. Made with <i class="mdi mdi-brain text-pink"></i>
                        by <a href="https://humanoo.id/" target="_blank" class="text-muted">humanoo.id</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->


    <!-- Style switcher -->
    <div class="style-switcher" id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
        <div>
            <h6>Select your color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
            </ul>
        </div>
        <!-- <div class="bottom">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="uil uil-setting text-white"
                    style="display: inline; line-height: 46px;"></i></a>
        </div> -->
    </div>
    <!-- end switcher-->



    <!--Bootstrap Js-->
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- Slider Js -->
    <script src="../../js/tiny-slider.js"></script>
    <script src="../../js/swiper.min.js"></script>

    <!-- <script src="../../js/smooth-scroll.polyfills.min.js"></script> -->

    <!-- counter -->
    <!-- <script src="../../js/counter.init.js"></script> -->

    <!-- App Js -->
    <script src="../../js/app.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        $(document).ready(function() {
            $("#service1").slideUp();
            $("#service2").slideUp();
            $("#service3").slideUp();
            $("#service4").slideUp();

            //let theme = localStorage.getItem("theme");
            //if (theme == "light" || theme == "") {
            //    document.body.removeAttribute("data-layout-mode");
            //} else {
            //    document.body.setAttribute("data-layout-mode", "dark");
            //}
        })

        function expandService(el, id) {
            if ($("#service" + id).is(":visible")) {
                $("#service" + id).slideUp();
                el.text("Lihat Selengkapnya");
            } else {
                $("#service" + id).slideDown();
                el.text("Sembunyikan");
            }
        }
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3.5,
            spaceBetween: 5,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>

</html>