<?php
require __DIR__ . "/database/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Development School</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="spacing--10"></div>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="badge badge-info">Development</span>
                    <h2>
                        <?= $company->getCompany(); ?>
                    </h2>
                    <p>
                        <?= $company->getDescription()?>
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <span class="badge badge-info">TEAM</span>
                    <div class="spacing--2"></div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($company->getTeam() as $team) { ?> 
                            <div class="carousel-item" id="team-avatar">
                                <div class="d-block w-100">
                                    <div class="text-center">
                                        <img src="/assets/img/avatar.png" width="200" alt="">
                                    </div>
                                    <div class="text-center pt-4">
                                        <h4 class="text-uppercase">
                                            <?= $team->getName(); ?>
                                        </h4>
                                        <p>
                                            <?= $team->getOccupation(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="spacing--10"></div>

    <section class="pricing py-5">
        <div class="container">
            <div class="row">
                <!-- Free Tier -->
                <?php foreach ($company->getProducts() as $product) { ?>
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center"><?= $product->getDescription(); ?></h5>
                            <h6 class="card-price text-center text-black-50"><?= $product->getPrice(); ?><span class="period">US$</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <?php foreach ($product->getBenefits() as $benefit) { ?>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                <?= $benefit ?>
                                </li>
                                <?php } ?>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase shadow-blue">Pay</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
        const carouselElement = window.document.querySelectorAll("#team-avatar");
        carouselElement[0].classList.add("active");
    </script>
</body>

</html>