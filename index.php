<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<?php
$description = ''; // Varsayılan değer veya boş bırakabilirsiniz
$keywords = ''; // Varsayılan değer veya boş bırakabilirsiniz
$title = 'Morfit ile Kendi Salonuzu Açın | Morfit'; // Varsayılan değer veya boş bırakabilirsiniz
$canonical = 'anasayfa'; // Varsayılan değer veya boş bırakabilirsiniz

include('head.php'); // SEO bilgilerini head kısmında kullanır
?>
<link rel="stylesheet" href="assets/css/cihaz.css">
<link rel="stylesheet" href="assets/css/tum-cihazlar.css">
<link rel="stylesheet" href="assets/css/salon.css">

<body>
    <?php include('header.php'); ?>
    <section class="section-cihaz">
        <div class="container d-flex justify-content-center align-items-center flex-column p-lg-5 mt-lg-5">

            <div class="row px-5">
                <div class="col-lg-6 mt-lg-5">

                    <h1 class="salon-baslik mt-5 pt-5" data-aos="zoom-in" data-aos-duration="1000">
                        Morfit ailesine <span>Katılmak
                            İçin Formu Doldur.</span>
                    </h1>
                </div>
                <div class="col-lg-6 pt-5" data-aos="zoom-in-left">
                    <div class="testbox" style="position: relative;">
                        <!-- Result message -->
                        <div id="result"></div>
                        <form id="contactForm" action="mesaj-gonder.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="testbox-item">
                                        <p>Adınız Soyadınız<span class="required">*</span></p>
                                        <div class="name-item">
                                            <input type="text" name="name" id="name" placeholder="Adınız Soyadınız"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testbox-item">
                                        <p>Email Adresiniz<span class="required">*</span></p>
                                        <div class="name-item">
                                            <input class="name" type="email" id="email" name="email"
                                                placeholder="Email Adresiniz" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <p>Telefon Numaranız<span class="required">*</span></p>
                                    <input class="name" type="tel" id="phone" name="phone"
                                        placeholder="Telefon Numaranız" required />
                                </div>
                                <div class="col-md-6">
                                    <p>Mesaj Tipi<span class="required">*</span></p>
                                    <div class="title-block">
                                        <select name="mesajturu" required>
                                            <option value="fiyat-talebi" selected>Fiyat Talebi</option>
                                            <option value="tesekkur">Teşekkür</option>
                                            <option value="istek/oneri">İstek/Öneri</option>
                                            <option value="sikayet">Şikayet</option>
                                            <option value="diger">Diğer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="testbox-item">
                                        <p>Mesajınız*<span class="required">*</span></p>
                                        <textarea name="mesaj" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="container">
                                        <div class="row">
                                            <div class="question">
                                                <div class="question-answer checkbox-item">
                                                    <div>
                                                        <input type="checkbox" id="check_1" name="check_1"
                                                            value="kisisel_veriler" required />
                                                        <label for="check_1" class="check"><span>6698 sayılı
                                                                Kişisel
                                                                Verilerin Korunması Kanununa ait bilgilendirmeyi
                                                                okudum.</span></label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" id="check_2" name="check_2"
                                                            value="aydinlatma_metni" required />
                                                        <label for="check_2" class="check"><span>Tarafıma
                                                                Morfit
                                                                System tarafından reklam, pazarlama, tanıtım ve
                                                                bilgilendirme amaçlı SMS, e-posta ve telefon yoluyla
                                                                elektronik ileti gönderilmesi amacıyla Aydınlatma ve
                                                                Açık
                                                                Rıza Metni Kapsamında onay/açık rıza verdiğimi beyan
                                                                ediyorum.</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LfGXUsqAAAAAKaUfHrz0xL8M_T3-mOLXVaVUD8f">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="btn-block">
                                                    <button type="submit">Gönder</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="cihaz mb-0" data-aos="zoom-in-up" data-aos-delay="300">
        <h2 class="cihazlar-baslik py-4 mt-5">TÜM CİHAZLARIMIZ</h2>

        <div class="container" id="container">
            <div class="swiper-container-wrapper">
                <div class="swiper cozumSwiper">
                    <!-- Swiper Slides -->
                    <div class="swiper-wrapper">
                        <!-- İlk Cihaz -->
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/slimline.png" alt="Vacu Magic Slim Line">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">Vacu Magic Slim Line</h4>
                                            <a href="https://www.morfitsystems.com/vacu-magic-slim-line" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- İkinci Cihaz -->
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/beauty-line.png"
                                                alt="Vacu Magic Beauty Line">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">Vacu Magic Beauty Line</h4>
                                            <a href="https://www.morfitsystems.com/vacu-magic-beauty-line" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Üçüncü Cihaz -->
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/infrabike.png" alt="İnfra Bike">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">İnfra Bike</h4>
                                            <a href="https://www.morfitsystems.com/infra-bike" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dördüncü Cihaz -->
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/elliptical.png" alt="Vacu Elliptical">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">Vacu Elliptical</h4>
                                            <a href="https://www.morfitsystems.com/vacu-elliptical" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/aquabike.png" alt="Aqua Bike">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">Aqua Bike</h4>
                                            <a href="https://www.morfitsystems.com/aqua-bike" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/magicroll.png" alt="Magic Roll">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">Magic Roll</h4>
                                            <a href="https://www.morfitsystems.com/magic-roll" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/rollbody.png" alt="Body Roll">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">Body Roll</h4>
                                            <a href="https://www.morfitsystems.com/body-roll" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="container itemCont">
                                        <div class="item-img">
                                            <img src="assets/img/magic-roll/magicvibe.png" alt="Magic Vib">
                                        </div>
                                        <div class="item-text">
                                            <h4 class="item-title">Magic Vib</h4>
                                            <a href="https://www.morfitsystems.com/magic-vib" class="cihaza-git">Cihazı İncele</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Gezinme Butonları -->
                    <div class="custom-swiper-button-prev">
                        <span class="material-symbols-outlined">
                            arrow_circle_left
                        </span>
                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="material-symbols-outlined">
                            arrow_circle_right
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container text-center px-5">
            <!-- Üst Başlıklar -->
            <p data-aos="fade-down" class="text-we-little ">Küçük Yatırım ile</p>
            <h2 data-aos="fade-down" class="we-title">BÜYÜK KAZANÇ</h2>
            <p class="text-we">
                Yes, we have a free version of untitled UI available for you to try out! it’s an incredibly powerful and
                large UI kit for Figma in it’s on right, but is doesn’t use the latest componentYes, we have a free
                version of untitled UI available for you to try out! it’s an incredibly powerful and large UI kit for
                Figma in it’s on right, but is doesn’t use the latest component
            </p>
            <div class="row mt-5 px-lg-5 custom-card-row">
                <!-- Kart 1 -->
                <div class="col-md-3">
                    <div class="custom-card">
                        <img src="assets/img/egitim-kadrosu.svg" class="custom-icon" alt="Tecrübeli Eğitim Kadrosu">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Tecrübeli Eğitim <br> Kadrosu</h5>
                        </div>
                    </div>
                </div>

                <!-- Kart 2 -->
                <div class="col-md-3">
                    <div class="custom-card">
                        <img src="assets/img/teknik-servis.svg" class="custom-icon" alt="Uzman Teknik Servis Kadrosu">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Uzman Teknik <br> Servis Kadrosu</h5>
                        </div>
                    </div>
                </div>

                <!-- Kart 3 -->
                <div class="col-md-3">
                    <div class="custom-card">
                        <img src="assets/img/hizli-teslimat.svg" class="custom-icon" alt="Hızlı Teslimat">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Hızlı Teslimat</h5>
                        </div>
                    </div>
                </div>

                <!-- Kart 4 -->
                <div class="col-md-3">
                    <div class="custom-card">
                        <img src="assets/img/yatirim.svg" class="custom-icon" alt="Bir Yılda Geri Dönen Yatırım">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Bir Yılda Geri <br> Dönen Yatırım</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container d-flex justify-content-center mt-5 mt-lg-0">
            <div class="row d-flex mx-auto">
                <div class="col-lg-6 d-flex justify-content-center align-items-start flex-column text-start px-5">
                    <p class="ust_baslik">Morfit ile Franchise Sektörünün</p>
                    <h2 class="yildiz_olun">YILDIZI OLUN</h2>
                    <p class="alt_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                    <button class="morfitli_ol" data-aos="fade-in"><a href="iletisim">Morfit’li Ol</a></button>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center" data-aos="zoom-in-down"
                    data-aos-delay="300"><img src="assets/img/morfitliol.jpg" alt="morfitliol" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <style>
    #result {
        text-align: center;
        font-size: 1.2rem;
        color: #fff;
        margin-bottom: 1rem;
        font-family: 'Vogie-Regular', sans-serif;
        background-color: rgba(0, 60, 137, 0.8);
        /* Saydam mavi arka plan */
        padding: 1rem;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: absolute;
        /* Changed to absolute */
        top: 50%;
        /* Align to the top of the container */
        left: 50%;
        /* Center horizontally */
        transform: translateX(-50%);
        /* Adjust for horizontal centering */
        width: 50%;
        /* Adjust width as needed */
        z-index: 999;
        display: none;
        /* Initially hidden */
    }
    </style>
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var form = event.target;
        var formData = new FormData(form);

        var userName = document.getElementById("name").value; // Kullanıcı adını al

        fetch("mesaj-gonder.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                var resultElement = document.getElementById("result");
                resultElement.innerHTML = `${userName}, ${data}`; // Mesajı kullanıcı adı ile birleştir
                resultElement.style.display = "block"; // Mesajı göster

                // Sayfanın 5 saniye sonra yenilenmesi için timeout kullanımı
                setTimeout(function() {
                    location.reload(); // Sayfa yenileme
                }, 5000); // 5 saniye (5000 milisaniye)
            })
            .catch(error => {
                document.getElementById("result").innerText = `Bir hata oluştu: ${error.message}`;
                document.getElementById("result").style.display = "block"; // Mesajı göster
            });
    });
    </script>
    <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.cozumSwiper', {
            slidesPerView: 1,
            loop: true, // Sonsuz döngü
            autoplay: {
                delay: 5000, // Otomatik ilerleme aralığı (milisaniye cinsinden)
                disableOnInteraction: false, // Kullanıcı etkileşimiyle otomatik ilerlemeyi devre dışı bırakma
            },
            navigation: {
                nextEl: '.custom-swiper-button-next',
                prevEl: '.custom-swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 3,
                },
            },
        });
    });
    </script>
</body>

</html>