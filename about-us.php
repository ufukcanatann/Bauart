<?php include('layouts/_header.php') ?>
<section id="#bizKimiz" class="breadcrumb-area" data-background="assets/img/bg/bread-crumb-bg.png">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="breadcrumb-title">
                        <h2 class="title text-white"><?php echo $lang['a-top-title']; ?></h2>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="list-unstyled bread-crumb text-md-end">
                        <li><a href="<?php echo BASE_URL; ?>"><?php echo $lang['ab-top-title']; ?></a></li>
                        <li><?php echo $lang['ab-category']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-area-one without-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-image position-relative">
                    <div class="image">
                        <img src="assets/img/projects-/home-screen.png" width="550px" alt="about-us">
                    </div>
                    <div class="active-customer d-flex align-items-center">
                        <div class="title">
                            <p><?php echo $lang['a-pro-num']; ?></p>
                            <h2 class="number"><span>29</span></h2>
                            <p><?php echo $lang['a-pro-tit']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-info ms-4">
                    <div class="section-title-one">
                        <span class="sub-title uppercase"><?php echo $lang['a-top-title']; ?></span>
                        <h2 class="title"><?php echo $lang['a-title']; ?></h2>
                    </div>
                    <p><?php echo $lang['a-desc']; ?></p>
                    <p class="mt-2"><?php echo $lang['a-desc2']; ?></p>
                    <div class="about-list">
                        <div class="about-list-items d-flex">
                            <div class="icon">
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                            <div class="text">
                                <h4 class="title"><?php echo $lang['a-mis-title']; ?></h4>
                                <p><?php echo $lang['a-mis-desc']; ?></p>
                            </div>
                        </div>
                        <div class="about-list-items d-flex">
                            <div class="icon">
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                            <div class="text">
                                <h4 class="title"><?php echo $lang['a-vis-title']; ?></h4>
                                <p><?php echo $lang['a-vis-desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faaliyetAlanlarimiz" class="working-process-area-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="section-title-one">
                    <span class="sub-title uppercase no-after dark"><?php echo $lang['afa-top-title']; ?></span>
                    <h2 class="title"><?php echo $lang['afa-title']; ?></h2>
                </div>
                <div class="working-process-info">
                    <p><?php echo $lang['afa-desc']; ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 ms-auto">
                <div class="working-process-item-two d-flex justify-content-between align-items-center">
                    <div class="info d-flex align-items-center">
                        <div class="image">
                            <img src="assets/img/working-process/icon-1.svg" alt="icon-1">
                        </div>
                        <div class="title">
                            <h4><?php echo $lang['afa-field1']; ?></h4>
                        </div>
                    </div>
                    <div class="number">
                        <h3>01</h3>
                    </div>
                </div>
                <div class="working-process-item-two d-flex justify-content-between align-items-center">
                    <div class="info d-flex align-items-center">
                        <div class="image">
                            <img src="assets/img/working-process/icon-2.svg" alt="icon-2">
                        </div>
                        <div class="title">
                            <h4><?php echo $lang['afa-field2']; ?></h4>
                        </div>
                    </div>
                    <div class="number">
                        <h3>02</h3>
                    </div>
                </div>
                <div class="working-process-item-two d-flex justify-content-between align-items-center">
                    <div class="info d-flex align-items-center">
                        <div class="image">
                            <img src="assets/img/working-process/icon-3.svg" alt="icon-3">
                        </div>
                        <div class="title">
                            <h4><?php echo $lang['afa-field3']; ?></h4>
                        </div>
                    </div>
                    <div class="number">
                        <h3>03</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action-area mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="image">
                <img src="<?php echo BASE_URL; ?>assets/img/banner/need-help-banner3.png" alt="call-to-action-image" class="img-fluid w-100">
            </div>
        </div>
        <div class="col-lg-6 align-self-center">
            <div class="info">
                <div class="phone-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="text-white title"><span style="font-weight: 400"><?php echo $lang['sup-title']; ?>&nbsp;&nbsp;</span><a href="tel:+902165481024"><?php echo $lang['sup-tel']; ?></a></h3>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/_footer.php') ?>

</body>

</html>
