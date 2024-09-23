<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<?php
$description = ''; // Varsayılan değer veya boş bırakabilirsiniz
$keywords = ''; // Varsayılan değer veya boş bırakabilirsiniz
$title = 'İletişim | Morfit'; // Varsayılan değer veya boş bırakabilirsiniz
$canonical = 'iletisim'; // Varsayılan değer veya boş bırakabilirsiniz

include('head.php'); // SEO bilgilerini head kısmında kullanır
?>
<link rel="stylesheet" href="assets/css/cihaz.css">
<link rel="stylesheet" href="assets/css/tum-cihazlar.css">
<link rel="stylesheet" href="assets/css/iletisim.css">
<link rel="stylesheet" href="assets/css/salon.css">

<body>
    <?php include('header.php'); ?>
    <section class="py-5 mt-5" id="merkez">
    <div class="container mt-5">
        <h1 class="kurumsal-baslik">İletişim Bilgileri</h1>
        <div class="row">
            <ul class="kurumsal-hash">
                <li><a href="#merkez">Morfit Merkez</a></li>
                <li><a href="#bayi">Bayiler</a></li>
                <li><a href="#form">Başvuru Formu</a></li>
            </ul>
        </div>
        <div class="d-flex justify-content-center align-items-center pt-5 mt-5 cards" style="gap: 90px;">
            <div class="card">
                <a href="tel:+905533881469">
                    <img src="assets/img/icons8-phone-50.png" alt="Telefon">
                    <span>+90 553 388 14 69</span>
                </a>
            </div>
            <div class="card">
                <a href="mailto:info@morfit.com">
                    <img src="assets/img/icons8-mail-50.png" alt="E-posta">
                    <span>info@morfit.com</span>
                </a>
            </div>
            <div class="card">
                <a href="https://goo.gl/maps/YourGoogleMapsLink" target="_blank">
                    <img src="assets/img/icons8-map-location-66.png" alt="Konum">
                    <span>Ali Baba, Yeşiloğlu Blv. 78/B, 63320 Karaköprü/Şanlıurfa</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container cihaz mb-5 py-5" data-aos="zoom-out-up" id="bayi">
    <h2 class="cihazlar-baslik pb-4 pt-3">Lorem ipsum dolor sit amet.</h2>
    <p class="alt-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    
    <div class="container p-5" id="container">
        <div class="swiper-container-wrapper">
            <div class="swiper cozumSwiper">
                <div class="swiper-wrapper">
                    <!-- First Slide -->
                    <div class="swiper-slide">
                        <div class="card-bayi">
                            <i class="bi bi-pin-map-fill"></i>
                            <p>Antalya</p>
                            <a href="#">+90000000000</a>
                            <a href="mailto:info@morfitsystems.com">info@morfitsystems.com</a>
                        </div>
                    </div>
                    <!-- Second Slide -->
                    <div class="swiper-slide">
                        <div class="card-bayi">
                            <i class="bi bi-pin-map-fill"></i>
                            <p>İstanbul</p>
                            <a href="#">+90000000000</a>
                            <a href="mailto:istanbul@morfitsystems.com">istanbul@morfitsystems.com</a>
                        </div>
                    </div>
                    <!-- Third Slide -->
                    <div class="swiper-slide">
                        <div class="card-bayi">
                            <i class="bi bi-pin-map-fill"></i>
                            <p>Ankara</p>
                            <a href="#">+90000000000</a>
                            <a href="mailto:ankara@morfitsystems.com">ankara@morfitsystems.com</a>
                        </div>
                    </div>
                </div>

                <!-- Navigation buttons -->
                <div class="custom-swiper-button-prev">
                    <span class="material-symbols-outlined">arrow_circle_left</span>
                </div>
                <div class="custom-swiper-button-next">
                    <span class="material-symbols-outlined">arrow_circle_right</span>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="form">
        <div class="container p-lg-5">
            <div class="testbox" style="position: relative;">
                <!-- Result message -->
                <div id="result"></div>
                <form id="contactForm" action="mesaj-gonder.php" method="POST" enctype="multipart/form-data">
                    <h2 class="mb-5"> Morfit ailesine Katılmak İçin Formu Doldur</h2>
                    <p style="color:#003C89;  font-family: 'Vogie-Regular', sans-serif; ">*Formda doldurulması zorunlu
                        alanlar</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="testbox-item">
                                <p>Adınız Soyadınız<span class="required">*</span></p>
                                <div class="name-item">
                                    <input type="text" name="name" id="name" placeholder="Adınız Soyadınız" required />
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
                            <input class="name" type="tel" id="phone" name="phone" placeholder="Telefon Numaranız"
                                required />
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
                        <div class="col-md-8">
                            <div class="testbox-item">
                                <p>Mesajınız*<span class="required">*</span></p>
                                <textarea name="mesaj" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                <div class="row ms-4 mt-lg-5">
                                    <div class="question">
                                        <div class="question-answer checkbox-item">
                                            <div>
                                                <input type="checkbox" id="check_1" name="check_1"
                                                    value="kisisel_veriler" required />
                                                <label for="check_1" class="check"><a href="#"><span>6698 sayılı Kişisel
                                                            Verilerin Korunması Kanununa ait bilgilendirmeyi
                                                            okudum.</span></a></label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="check_2" name="check_2"
                                                    value="aydinlatma_metni" required />
                                                <label for="check_2" class="check"><a href="#"><span>Tarafıma Morfit
                                                            System tarafından reklam, pazarlama, tanıtım ve
                                                            bilgilendirme amaçlı SMS, e-posta ve telefon yoluyla
                                                            elektronik ileti gönderilmesi amacıyla Aydınlatma ve Açık
                                                            Rıza Metni Kapsamında onay/açık rıza verdiğimi beyan
                                                            ediyorum.</span></a></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="g-recaptcha" data-sitekey="6LfGXUsqAAAAAKaUfHrz0xL8M_T3-mOLXVaVUD8f">
                                    </div>

                                    <div class="btn-block">
                                        <button type="submit">Gönder</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

        fetch("mesaj-gonder-iletisim.php", {
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
                    slidesPerView: 2,
                },
            },
        });
    });
    </script>
    <script>
    // Get all links inside the list
    var links = document.querySelectorAll('.kurumsal-hash li a');

    // Loop through each link
    links.forEach(function(link) {
        // Add an event listener for click event
        link.addEventListener('click', function() {
            // Remove active class from all links
            links.forEach(function(l) {
                l.classList.remove('active');
            });

            // Add active class to the clicked link
            link.classList.add('active');
        });
    });

    // Function to check and add active class based on URL hash
    function checkActiveLink() {
        var hash = window.location.hash;
        // Loop through each link
        links.forEach(function(link) {
            // If the link's href matches the hash, add active class
            if (link.getAttribute('href') === hash) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Call the function initially to set active link based on URL
    checkActiveLink();

    // Listen for hashchange event and update active link accordingly
    window.addEventListener('hashchange', checkActiveLink);
    </script>
</body>

</html>