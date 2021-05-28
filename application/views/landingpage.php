<!-- Jumbotron -->
<style>
    .jumbotron {
        background-image: url(assets/assets/img/jumbotron-bg.jpg);
        background-size: cover;
        height: 500px;
        width: 1280px;
        text-align: center;
        position: relative;
    }

    .info-panel {
        /* background-color: salmon; */
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        margin-top: -100px;
        background-color: white;
        padding: 15px;
    }

    .info-panel img {
        width: 65px;
        height: 65px;
        margin-right: 15px;
        margin-bottom: 10px;
    }

    .info-panel h4 {
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .workingspace {
        margin-top: 100px;
        text-align: center;
    }

    .workingspace h3 {
        font-size: 40px;
        font-weight: 160;
        text-transform: uppercase;
        margin-top: 15px;
    }

    .workingspace p {
        font-size: 15px;
        color: black;
        font-weight: 160;
        margin: 25px 0;
    }

    .testimonial {
        text-align: center;
        font-size: 15px;
        margin-top: 15px;
        font-style: italic;
    }

    .testimonial img {
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
        height: 100px;
        width: 100px;
    }
</style>
<div class="">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-white">Syukuri Apa Yang Kita <span>Punya</span>, Bukan <span>Mengeluh!</span>
            </h1>
            <a href="" class="btn btn-primary tombol">Our Work</a>
        </div>
    </div>
    <!-- Akhir Jumbotron -->
    <!-- Container -->
    <div class="container">
        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="assets/assets/img/employee.png" alt="Employee" class="float-left">
                        <h4>24 Hours</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="assets/assets/img/hires.png" alt="High Res" class="float-left">
                        <h4>High Res</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-lg">
                        <img src="assets/assets/img/security.png" alt="Security" class="float-left">
                        <h4>Security</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Info Panel -->

        <!-- Working Space -->
        <div class="row workingspace">
            <div class="col">
                <img src="assets/assets/img/workingspace.png" alt="Workingspace" class="img-fluid">
            </div>
            <div class="col">
                <h3>You <span>Work</span> like at <span>home</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto optio ab perspiciatis unde.</p>
                <button class="btn btn-primary tombol">Gallery</button>
            </div>
        </div>
        <!-- Akhir Working Space -->
    </div>
    <!-- Testimonial -->
    <section class="testimonial">
        <div class="row justify-content-center">
            <div class="col-8">
                <h5>Barangsiapa yang bersungguh-sungguh dia pasti akan berhasil, dan Barangsiapa yang bersabar dia akan
                    sukses.</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center d-flex">
                <figure class="figure">
                    <img src="assets/assets/img/yayat.jpg" alt="Testi 1" class="figure-img img-fluid rounded-circle">
                    <figcaption class="figure-caption">
                        <h5>Maulana Hidayat</h5>
                        <span>Fullstack Web Developer</span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!-- Akhir Container -->
</div>