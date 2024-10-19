<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('<?= base_url('assets/landing-assets/img/bg-header-banner.jpg'); ?>');">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>
                    Cars
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">list Style</h1>
        </div>
    </div>
</div>

<!-- Car Rentals Section Start -->
<section class="car-list-section section-padding fix">
    <div class="container">
        <div class="car-list-wrapper">
            <div class="row g-4">
                <?php foreach ($cars as $car): ?>
                    <div class="col-lg-12">
                        <div class="car-list-items">
                            <div class="car-image bg-cover" style="background-image: url('assets/car-images/<?= $car->photo; ?>');">
                                <div class="post-cat">
                                    <?= $car->name; ?>
                                </div>
                            </div>
                            <div class="car-content">
                                
                                <h6 class="price">Rp. <?= number_format($car->price_rate, 0, ',', '.'); ?> <span>/ Day</span></h6>
                                <h3><a href="car-details.html"><?= $car->name; ?></a></h3>
                                <p>
                                    <?= $car->description; ?>
                                </p>
                                <ul class="icon-items">
                                    <li>
                                        <img src="<?= base_url('assets/landing-assets/img/car/seat.svg'); ?>" alt="img" class="me-1">
                                        <?= $car->seat; ?> Seats
                                    </li>
                                    <li>
                                        <img src="<?= base_url('assets/landing-assets/img/car/door.svg'); ?>" alt="img" class="me-1">
                                        <?= $car->door; ?> Doors
                                    </li>
                                    <li>
                                        <img src="<?= base_url('assets/landing-assets/img/car/automatic.svg'); ?>" alt="img" class="me-1">
                                        <?= $car->engine; ?>
                                    </li>
                                    <li>
                                        <img src="<?= base_url('assets/landing-assets/img/car/petrol.svg'); ?>" alt="img" class="me-1">
                                        <?= $car->fuel; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Cta Cheap Rental Section Start -->
<section class="cta-cheap-rental-section">
    <div class="container">
        <div class="cta-cheap-rental">
            <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay="
                    .3s">
                <div class="logo-thumb">
                    <a href="index.html">
                        <img src="<?= base_url('assets/landing-assets/img/logo/white-logo.svg'); ?>" alt="logo-img">
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