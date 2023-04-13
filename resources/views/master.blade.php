<!DOCTYPE html>
<html lang="en">

<head>

@include('layout.style')

</head>

<body>


@include('layout.header')

    <div id="modal" class="popupContainer" style="display:none;">
        <div class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </div>

        <section class="popupBody">
            <!-- Social Login -->
            <div class="social_login">
                <div class="">
                    <a href="#" class="social_box fb">
                        <span class="icon"><i class="fab fa-facebook"></i></span>
                        <span class="icon_title">Connect with Facebook</span>

                    </a>

                    <a href="#" class="social_box google">
                        <span class="icon"><i class="fab fa-google-plus"></i></span>
                        <span class="icon_title">Connect with Google</span>
                    </a>
                </div>

                <div class="centeredText">
                    <span>Or use your Email address</span>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                    <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                </div>
            </div>

            <!-- Username & Password Login form -->
            <div class="user_login">
                <form>
                    <label>Email / Username</label>
                    <input type="text" />
                    <br />

                    <label>Password</label>
                    <input type="password" />
                    <br />

                    <div class="checkbox">
                        <input id="remember" type="checkbox" />
                        <label for="remember">Remember me on this computer</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>
                                Back</a></div>
                        <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                    </div>
                </form>

                <a href="#" class="forgot_password">Forgot password?</a>
            </div>

            <!-- Register Form -->
            <div class="user_register">
                <form>
                    <label>Full Name</label>
                    <input type="text" />
                    <br />

                    <label>Email Address</label>
                    <input type="email" />
                    <br />

                    <label>Password</label>
                    <input type="password" />
                    <br />

                    <div class="checkbox">
                        <input id="send_updates" type="checkbox" />
                        <label for="send_updates">Send me occasional email updates</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>
                                Back</a></div>
                        <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Aplikasi Kasir Terjangkau dan Mudah Digunakan</h2>
                                        <p>Mudah digunakan untuk semua jenis usaha,
                                            teknologi sellEZ dapat melakukan apa yang dibutuhkan usahamu.</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button scroll-to-section">
                                            <a href="#contact">Dapatkan Sekarang<i class="fab fa-google-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/sync-web-app.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>Tinjau riwayat transaksi Anda untuk menganalisis penjualan barang terlaris.
                            Laporan terperinci harian, mingguan, dan bulanan memberi Anda gambaran tentang pertumbuhan bisnis Anda dan membantu Anda membuat keputusan yang lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>App Maintenance</h4>
                        <p>Dengan SallEZ, Anda dapat mengelola toko.
                            Selain itu, laporan transaksi juga dapat dilihat secara terpisah.</p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Upload Catalog</h4>
                        <p>Unggah produk dan buat katalog untuk mempermudah kategorisasi.
                        Perluas dan permudah pelanggan untuk menjangkau produk Anda.
                        </p>
                        <div class="text-button">
                            <a href="katalog.blade.php">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>List Of Document</h4>
                        <p>Anda dapat melihat semua riwayat pemasukan dan pengeluaran yang telah Anda buat dengan mengunduh
                            riwayat dalam berbagai format.</a>
                        </p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>Customer Service</h4>
                        <p>Tim layanan pelanggan yang ramah dan berpengalaman siap membantu Anda 24/7.</p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>Pembayaran Digital <em>Mudah</em> &amp; Lengkap</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <h5>Proses cepat tanpa ada tambahan biaya</h5>
                        <p>Mudah Terima semua pembayaran digital wallet yang terintegrasi dengan laporan penjualan</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="box-item">
                                <h4><a href="#">OVO</a></h4>
                                <img src="assets/images/ovo.jpg" alt="">
                                <!-- <p>Lorem Ipsum Text</p> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box-item">
                                <h4><a href="#">DANA</a></h4>
                                <img src="assets/images/dana1.png" alt="">
                                <!-- <p>Lorem Ipsum Text</p> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box-item">
                                <h4><a href="#">GO-PAY</a></h4>
                                <img src="assets/images/gopay.png" alt="">
                                <!-- <p>Lorem Ipsum Text</p> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box-item">
                                <h4><a href="#">ShopeePay</a></h4>
                                <img src="assets/images/shopeepay1.png" width="10" height="" alt="">
                                <!-- <p>Lorem Ipsum Text</p> -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Proses Pembayaran Cepat Tanpa Ribet dengan bantuan Digital Wallet</p>
                            <!-- <div class="gradient-button">
                                <a href="#">Start 14-Day Free Trial</a>
                            </div> -->
                            <span>*No Credit Card Required</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="assets/images/wallet.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="clients" class="the-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>Kelola <em>Persediaan</em> Produk</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>Kelola berbagai jenis persedian barang dengan sangat mudah sesuai jenis kebutuhan anda</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                            <div class="image-container">
                                <img src="assets/images/Menu Kelola Produk.png" alt="">
                                <img src="assets/images/Menu Kelola Produk2.png" alt="">
                                <img src="assets/images/Menu Transaksi.png" alt="">
                            </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <div class="row">
                                                    <!-- <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>David Martino Co</h4>
                                                        <span class="date">30 November 2021</span>
                                                    </div> -->
                                                    <!-- <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Financial Apps</span>
                                                    </div> -->
                                                    <!-- <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.8</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <!-- <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Jake Harris Nyo</h4>
                                                        <span class="date">29 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Digital Business</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.5</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <!-- <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>May Catherina</h4>
                                                        <span class="date">27 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Business &amp; Economics</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.7</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <!-- <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Random User</h4>
                                                        <span class="date">24 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">New App Ecosystem</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">3.9</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                    <!-- <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Mark Amber Do</h4>
                                                        <span class="date">21 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Web Development</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.3</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <!-- <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing
                                                                    elit, sed do eismod tempor idunte ut labore et
                                                                    dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div> -->
                                                            <div class="down-content">
                                                                <!-- <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>David Martino</h4>
                                                                    <span>CEO of David Company</span>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“CTO, Lorem ipsum dolor sit amet, consectetur
                                                                    adpiscing elit, sed do eismod tempor idunte ut
                                                                    labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Jake H. Nyo</h4>
                                                                    <span>CTO of Digital Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“May, Lorem ipsum dolor sit amet, consectetur
                                                                    adpiscing elit, sed do eismod tempor idunte ut
                                                                    labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>May C.</h4>
                                                                    <span>Founder of Catherina Co.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing
                                                                    elit, sed do eismod tempor idunte ut labore et
                                                                    dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Random Staff</h4>
                                                                    <span>Manager, Digital Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“Mark, Lorem ipsum dolor sit amet, consectetur
                                                                    adpiscing elit, sed do eismod tempor idunte ut
                                                                    labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Mark Am</h4>
                                                                    <span>CTO, Amber Do Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricing" class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2">
                    <div class="section-heading">
                        <h4>Mulai <em>Perjalanan</em> Baru Untuk Usahamu</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>Saat ini tidak ada lagi penghalang untuk mengoptimalkan usahamu.</p>
                        <p>dengan berbagai Fitur yang ada, SallEZ akan membantumu dimanapun kamu berada.</p>
                        <p>Unduh Gratis Aplikasi Pada Android Kesayanganmu</p>
                        
                    </div>
                    <img src="assets/images/Google_Play.png" width="244" alt class="image-4">
                </div>
                
                <!-- <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">$12</span>
                        <h4>Standard Plan App</h4>
                        <div class="icon">
                            <img src="assets/images/pricing-table-01.png" alt="">
                        </div> -->
                        <!-- <ul>
                            <li>Lorem Ipsum Dolores</li>
                            <li>20 TB of Storage</li>
                            <li class="non-function">Life-time Support</li>
                            <li class="non-function">Premium Add-Ons</li>
                            <li class="non-function">Fastest Network</li>
                            <li class="non-function">More Options</li>
                        </ul> -->
                        <!-- <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="col-lg-4">
                    <div class="pricing-item-pro">
                        <span class="price">$25</span>
                        <h4>Business Plan App</h4>
                        <div class="icon">
                            <img src="assets/images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Lorem Ipsum Dolores</li>
                            <li>50 TB of Storage</li>
                            <li>Life-time Support</li>
                            <li>Premium Add-Ons</li>
                            <li class="non-function">Fastest Network</li>
                            <li class="non-function">More Options</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">$66</span>
                        <h4>Premium Plan App</h4>
                        <div class="icon">
                            <img src="assets/images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Lorem Ipsum Dolores</li>
                            <li>120 TB of Storage</li>
                            <li>Life-time Support</li>
                            <li>Premium Add-Ons</li>
                            <li>Fastest Network</li>
                            <li>More Options</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>SellEZ</h4>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form id="search" action="#" method="GET">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Email Address..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div> -->
                            <!-- <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <button type="submit" class="main-button">Subscribe Now <i
                                            class="fa fa-angle-right"></i></button>
                                </fieldset>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>Office</h4>
                        <p>Politeknik Negeri Indramayu</p>
                        <p><a href="#">010-020-0340</a></p>
                        <p><a href="#">info@company.co</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">About</a></li>
                            <!-- <li><a href="#">Testimonials</a></li> -->
                            <li><a href="#">Pricing</a></li>
                        </ul>
                        <!-- <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Free Apps</a></li>
                            <li><a href="#">App Engine</a></li>
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">App News</a></li>
                        </ul>
                        <!-- <ul>
                            <li><a href="#">App Dev Team</a></li>
                            <li><a href="#">Digital Web</a></li>
                            <li><a href="#">Normal Apps</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h4>About Our Company</h4>
                        <div class="logo">
                            <img src="assets/images/log.png" alt="">
                        </div>
                        <p>Aplikasi Kasir Terjangkau Dan Mudah Digunakan.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © 2023 SallEZ App Dev Company.
                            <!-- <br>Design: <a href="https://templatemo.com/" target="_blank"
                                title="css templates">TemplateMo</a><br>

                            Distributed By: <a href="https://themewagon.com/" target="_blank"
                                title="Bootstrap Template World">ThemeWagon</a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>