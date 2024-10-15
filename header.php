<body>
    <link rel="stylesheet" href="assets/css/header.css">
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top d-none d-lg-block">
            <div class="container justify-content-between">
                <!-- Navbar Toggler (Mobilde Görünür) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar İçeriği -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarContent">

                    <!-- Logo Ortada -->
                    <a class="navbar-brand mx-5" href="anasayfa">
                        <img src="assets/img/header-logo.png" alt="Logo" class="img-fluid">
                    </a>


                </div>

                <!-- Sosyal Medya İkonları -->
                <div class="d-none d-lg-flex align-items-center px-4">
                    <ul class="navbar-nav">

                        <li class="nav-item px-2">
                            <a class="nav-link" href="iletisim">İletişim</a>
                        </li>
                    </ul>
                    <a class="nav-link px-2" href="https://www.instagram.com/morfit_turkiye/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a class="nav-link px-2" href="https://www.facebook.com/people/Morfit/100092975647559/" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a class="nav-link px-2" href="https://www.youtube.com/channel/UCflgmXSyvz8QOCCo3F2-NFg" target="_blank"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="fixed-buttons">

            <div class="botros-button-default"><a href="https://api.whatsapp.com/send?phone=905533881469"
                        rel="nofollow noreferrer" target="_blank"> <i class="fab fa-whatsapp-square px-1"></i>Whatsapp
                        Hattı</a></div>
                <!-- <div class="botros-button-default"><a href="#"><i class="fas fa-user-friends px-2"></i>Morfit’li Olmak</a></div> -->
            </div>

        </nav>


        <!-- Mobil Navbar -->
        <nav id="mobile-navbar" class="d-lg-none d-block fixed-top">
            <a class="navbar-brand" href="anasayfa">
                <img src="assets/img/mobil-logo.png" alt="Logo" width="100">
            </a>
            <button class="navbar-toggler" id="menu-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <div></div>
                <div></div>
                <div></div>
            </button>
        </nav>

        <!-- Offcanvas Menü -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <!-- Menü başlığı yerine logo eklendi -->
                <a class="navbar-brand" href="anasayfa">
                    <img src="assets/img/mobil-logo.png" alt="Logo" width="100">
                </a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="collapse-menu">
                    <li><a href="iletisim">İletişim</a></li>
                </ul>

                <!-- Sosyal Medya İkonları -->
                <div class="social-icons">
                    <a href="https://www.facebook.com/people/Morfit/100092975647559/" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/morfit_turkiye/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCflgmXSyvz8QOCCo3F2-NFg" target="_blank"><i class="bi bi-youtube"></i></a>
                </div>

                <!-- Dil Seçenekleri -->
                <div class="language-buttons">
                    <a href="?lang=tr">TR</a>
                    <div class="language-divider"></div>
                    <a href="?lang=en">EN</a>
                </div>

            </div>
        </div>
    </header>
    <script>
        // Scroll olduğunda navbar rengini değiştirme
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        // Scroll olduğunda navbar rengini değiştirme
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mobile-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        // Dropdown menünün tıklanabilir ve kapanmadan açık kalmasını sağlama
        document.querySelectorAll('.nav-item.dropdown').forEach(function(dropdown) {
            dropdown.addEventListener('mouseenter', function() {
                const dropdownMenu = this.querySelector('.mega-dropdown');
                dropdownMenu.classList.add('show');
            });

            // Fare dropdown menüden ayrıldığında kapanmasını engelliyoruz
            dropdown.removeEventListener('mouseleave', function() {
                const dropdownMenu = this.querySelector('.mega-dropdown');
                dropdownMenu.classList.remove('show');
            });

            dropdown.addEventListener('click', function() {
                const dropdownMenu = this.querySelector('.mega-dropdown');
                dropdownMenu.classList.toggle('show');
            });
        });


        // Mobilde navbar-toggler ile menü açma kapama
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            const navbarCollapse = document.getElementById('navbarContent');
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            } else {
                navbarCollapse.classList.add('show');
            }
        });

        // Menü toggle butonunun animasyonu
        const menuToggler = document.getElementById('menu-toggler');

        menuToggler.addEventListener('click', function() {
            menuToggler.classList.toggle('open'); // Toggle animasyonu
        });

        // Offcanvas menü kapandığında toggle butonu hamburger şekline geri döner
        const offcanvasMenu = document.getElementById('offcanvasMenu');
        offcanvasMenu.addEventListener('hidden.bs.offcanvas', function() {
            menuToggler.classList.remove('open'); // Kapatıldığında butonu eski haline getir
        });
    </script>
</body>