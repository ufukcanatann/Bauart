</main>

<button class="scroll-to-top">
    <i class="fas fa-angle-up"></i>
</button>

<footer class="footer-area-one">
    <div class="footer-area-one-bg">
        <div class="container">
            <div class="footer-top-one">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="<?php echo BASE_URL; ?>">
                                    <img src="<?php echo BASE_URL; ?>assets/img/logo/bauart-logo-white.png" width="190px" alt="white-logo">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p><?php echo $lang['f-desc']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget ms-5">
                            <h4 class="footer-title uppercase"><?php echo $lang['f-title1']; ?></h4>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?php echo BASE_URL; ?>projects/project-details.php?project=0"><i class="fas fa-angle-right"></i> Querencia Long Beach</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>projects/project-details.php?project=1"><i class="fas fa-angle-right"></i> Boğaztepe Villa</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>projects/project-details.php?project=2"><i class="fas fa-angle-right"></i> Azure Villa</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>projects/project-details.php?project=3"><i class="fas fa-angle-right"></i> Era Park Evleri</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>project"><i class="fas fa-angle-right"></i> Daha Fazla</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget">
                            <h4 class="footer-title uppercase"><?php echo $lang['f-title2']; ?></h4>
                            <div class="footer-address">
                                <ul>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-paper-plane"></i>
                                        </div>
                                        <div class="content">
                                            <p><?php echo $lang['cd-address-desc']; ?></p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <a href="mailto:info@bauart.com.tr">info@bauart.com.tr</a>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <a href="tel:902165481024">+90 216 548 10 24</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget">
                            <h4 class="footer-title uppercase"><?php echo $lang['f-title3']; ?></h4>
                            <p><?php echo $lang['f-desc3']; ?></p>
                            <div class="footer-newsletter">
                                <form action="send_email.php" method="post">
                                    <div class="position-relative">
                                        <input type="email" name="footer_email" placeholder="<?php echo $lang['f-title3-plchol']; ?>" required>
                                        <button type="submit" class="position-absolute"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-12 col-lg-6 copy">
                        <div class="copyright">
                            <p><?php echo $lang['fa-copy']; ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="links text-lg-end">
                            <ul>
                                <li><a href="<?php echo BASE_URL; ?>corporate/terms"><?php echo $lang['fa-terms']; ?></a></li>
                                <li><a href="corporate/privacy"><?php echo $lang['fa-priv']; ?></a></li>
                                <li><a href="contact"><?php echo $lang['fa-contact']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo BASE_URL; ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery.odometer.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery.appear.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/slick.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

<script>
    $(document).ready(function() {
        var breadcrumbText = $('.bread-crumb .main-link').text().trim();
        var languageLinks = $('.language-selector .nav-link');
        var currentLang = new URLSearchParams(window.location.search).get('lang') || 'tr';

        $('.navbar-nav .nav-link').each(function() {
            var navText = $(this).text().trim();
            if (navText == breadcrumbText) {
                $(this).addClass('active');
            }
        });

        languageLinks.each(function() {
            if ($(this).attr('href').includes(`lang=${currentLang}`)) {
                $(this).addClass('active');
            }
        });
    });

    function updateURLParameter(url, param, paramVal) {
        var newAdditionalURL = "";
        var tempArray = url.split("?");
        var baseURL = tempArray[0];
        var additionalURL = tempArray[1];
        var temp = "";
        if (additionalURL) {
            tempArray = additionalURL.split("&");
            for (var i = 0; i < tempArray.length; i++) {
                if (tempArray[i].split('=')[0] != param) {
                    newAdditionalURL += temp + tempArray[i];
                    temp = "&";
                }
            }
        }
        var rows_txt = temp + "" + param + "=" + paramVal;
        return baseURL + "?" + newAdditionalURL + rows_txt;
    }

    document.querySelectorAll('.language-selector .nav-link').forEach(function(element) {
        element.addEventListener('click', function(e) {
            e.preventDefault();
            var newLang = this.getAttribute('href').split('lang=')[1];
            var currentURL = window.location.href;
            var newURL = updateURLParameter(currentURL, 'lang', newLang);
            window.location.href = newURL;
        });
    });
</script>