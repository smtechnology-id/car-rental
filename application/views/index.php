    <!-- Hero Section Start -->
    <section class="hero-section hero-1 fix">
        <div class="array-button">
            <button class="image-array-left">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('<?= base_url('assets/landing-assets') ?>/img/hero/hero-1.jpg');">
                        <div class="overlay-shape">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/hero/overlay.png" alt="img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Book Any Luxury Car in low price
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Car <span>Rental</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('<?= base_url('assets/landing-assets') ?>/img/hero/hero-2.jpg');">
                        <div class="overlay-shape">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/hero/overlay.png" alt="img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Book Any Luxury Car in low price
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Car <span>Rental</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section Start -->
    <section class="about-section fix section-padding pt-0">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="color-shape">
                                <img src="<?= base_url('assets/landing-assets') ?>/img/about/secondary-shape-color-full.png" alt="shape-img">
                            </div>
                            <div class="car-shape wow fadeInUp" data-wow-delay=".7s">
                                <img src="<?= base_url('assets/landing-assets') ?>/img/about/car-shape.png" alt="shape-img">
                            </div>
                            <div class="counter-content wow fadeInLeft" data-wow-delay=".4s">
                                <h2 class="text-white"><span class="count">50</span></h2>
                                <p class="text-white">
                                    Years of <br>
                                    Experience
                                </p>
                            </div>
                            <div class="about-image-1 wow fadeInDown" data-wow-delay=".3s">
                                <img src="<?= base_url('assets/landing-assets') ?>/img/about/01.jpg" alt="about-image">
                            </div>
                            <div class="about-image-2 wow fadeInLeft" data-wow-delay=".5s">
                                <img src="<?= base_url('assets/landing-assets') ?>/img/about/02.jpg" alt="about-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <img src="<?= base_url('assets/landing-assets') ?>/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Services with a Wide
                                    Range of Cars
                                </h2>
                            </div>
                            <h4 class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                                committed to providing our customers with exceptional service.
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum is simply ipun txns mane so dummy text of free available in market the printing and typesetting industry has been the industry's standard dummy text ever.
                            </p>
                            <div class="about-list-item wow fadeInUp" data-wow-delay=".7s">
                                <ul>
                                    <li>
                                        Many Pickup Locations
                                    </li>
                                    <li>
                                        Offering Low Prices
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        Many Pickup Locations
                                    </li>
                                    <li>
                                        Offering Low Prices
                                    </li>
                                </ul>
                            </div>
                            <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".8s">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="<?= base_url('assets/landing-assets') ?>/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Cars We’re Offering <br>
                    for Rentals
                </h2>
            </div>
        </div>
        <div class="car-rentals-wrapper">
            <div class="array-button">
                <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                <button class="array-next"><i class="far fa-chevron-right"></i></button>
            </div>
            <div class="swiper car-rentals-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($cars as $car): ?>
                        <div class="swiper-slide">
                            <div class="car-rentals-items">
                                <div class="car-image">
                                    <img src="<?= base_url('assets/car-images/') ?><?= $car->photo; ?>" alt="img" style="width: 100%; height: 200px; object-fit: cover;">
                                </div>
                                <div class="car-content">
                                    <div class="post-cat">
                                        <?= $car->name; ?>
                                    </div>

                                    <h4><a href="car-details.html"><?= $car->name; ?></a></h4>
                                    <h6>Rp. <?= number_format($car->price_rate, 0, ',', '.'); ?> <span>/ Day</span></h6>
                                    <div class="icon-items">
                                        <ul>
                                            <li>
                                                <img src="<?= base_url('assets/landing-assets') ?>/img/car/seat.svg" alt="img" class="me-1">
                                                <?= $car->seat; ?> Seats
                                            </li>
                                            <li>
                                                <img src="<?= base_url('assets/landing-assets') ?>/img/car/door.svg" alt="img" class="me-1">
                                                <?= $car->door; ?> Doors
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <img src="<?= base_url('assets/landing-assets') ?>/img/car/automatic.svg" alt="img" class="me-1">
                                                <?= $car->engine; ?>
                                            </li>
                                            <li>
                                                <img src="<?= base_url('assets/landing-assets') ?>/img/car/petrol.svg" alt="img" class="me-1">
                                                <?= $car->fuel; ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="car-details.html" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


    <!-- Popular Car Section Start -->
    <section class="popular-car-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <img src="<?= base_url('assets/landing-assets') ?>/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">select car types</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    We’re Offering Popular <br>
                    Cars Models
                </h2>
            </div>
            <div class="row g-4 mt-30">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="car-details.html">Sedan</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/car/popular-car-1.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="car-details.html">Sports</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/car/popular-car-2.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="car-details.html">Jeep</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/car/popular-car-3.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="car-details.html">SUV</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/car/popular-car-4.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="car-details.html">Luxury</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/car/popular-car-5.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="car-details.html">Luxury</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="assets/img/car/popular-car-6.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="popular-car-text wow fadeInUp" data-wow-delay=".4s">
                <h6>Car rental services specifically for our customers.</h6>
                <a href="car-details.html" class="theme-btn">Find a car</a>
            </div>
        </div>
    </section>
    <!-- Cta Cheap Rental Section Start -->
    <section class="cta-cheap-rental-section">
        <div class="container">
            <div class="cta-cheap-rental">
                <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay=".3s">
                    <div class="logo-thumb">
                        <a href="index.html">
                            <img src="<?= base_url('assets/landing-assets') ?>/img/logo/white-logo.svg" alt="logo-img">
                        </a>
                    </div>
                    <h4 class="text-white">Save big with our cheap car rental</h4>
                </div>
                <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay="
                    .5s">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>