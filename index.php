<?php include "App/config.php" ?>
<?php include "App/Template/header.php" ?>
<?php include "App/Components/loader.php" ?>
<?php include "App/Components/navbar.php" ?>
    <section id="home">
        <div class="container text-center">
            <div class="desc-title fw-bold m-0 p-0">Jangan <span>sampai</span> ada <span class="dua">tugasmu</span> yang ter<span class="tiga">lewat!</span></div>
            <div class="desc text-secondary m-0 p-0"></div>
        </div>
    </section>
    <section id="kenapa-kita">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="desc-title fw-bold m-0 p-0" data-aos="fade-up" data-aos-duration="1200">KENAPA <span class="hover-zoom">KITA?</span></div>
                    <div class="desc text-secondary" data-aos="fade-up" data-aos-duration="1200">Kami percaya bahwa semua orang memiliki potensi untuk mencapai hal-hal besar. Kami ingin membantu Anda untuk mewujudkan potensi tersebut dengan memberikan alat yang dapat membantu Anda untuk tetap <span class="bg-ungu text-light px-1">terorganisir</span> dan <span class="bg-biru-muda text-light px-1">produktif</span>  sehingga Anda tetap <span class="bg-pink text-light px-1">fokus pada tujuan Anda.</span></div>
                    <div class="mt-5" data-aos="fade-up" data-aos-duration="1200">
                        <a href="#" class="btn btn-gradient py-2 px-5 text-light fw-semibold fs-5">Cobain sekarang gratis!</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <dotlottie-player src="https://lottie.host/520145c4-d1c8-4b7d-b562-d39276af4adc/md0hPMoD9e.json" background="transparent" speed="0.75" style="width: 100%;" data-aos="fade-in" data-aos-duration="1200" loop autoplay></dotlottie-player>
                </div>
            </div>
        </div>
    </section>
    <section id="images-slider">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-aos="fade-in" data-aos-duration="1200">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="src/img/curoseol-1.jpg" class="d-block w-100" alt="Eror">
                </div>
                <div class="carousel-item">
                <img src="src/img/curoseol-2.jpg" class="d-block w-100" alt="Eror">
                </div>
                <div class="carousel-item">
                <img src="src/img/curoseol-3.jpg" class="d-block w-100" alt="Eror">
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-10 text-start">
                    <div class="desc-title fw-bold" data-aos="fade-up" data-aos-duration="1200">APA AJA <span class="bg-ungu text-light">FITUR</span> YANG <span class="bg-biru-muda text-light">TERSEDIA?</span></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="1200">
                        <div class="card-body text-center text-light">
                            <div class="card-icon">
                                <i class="fa-regular fa-handshake"></i>
                            </div>
                            <div class="card-desc fw-bold">
                                KERJASAMA TIM
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="card-body text-center text-light">
                            <div class="card-icon">
                                <i class="fa-solid fa-print"></i>
                            </div>
                            <div class="card-desc fw-bold">
                                PRINT TODOLISTMU
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="card-body text-center text-light">
                            <div class="card-icon">
                                <i class="fa-solid fa-repeat"></i>
                            </div>
                            <div class="card-desc fw-bold">
                                DRAG AND DROP
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "App/template/footer.php" ?>
