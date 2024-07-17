<?php include('layouts/_header.php');

if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
        showToast("Mesajınız başarıyla iletilmiştir.");
    });
    </script>';
}

?>

<section class="breadcrumb-area" data-background="assets/img/bg/bread-crumb-bg.png">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="breadcrumb-title">
                        <h2 class="title text-white"><?php echo $lang['c-top-title']; ?></h2>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="list-unstyled bread-crumb text-md-end">
                        <li><a href="<?php echo BASE_URL; ?>"><?php echo $lang['ab-top-title']; ?></a></li>
                        <li><?php echo $lang['c-top-title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title-one">
                    <span class="sub-title uppercase"><?php echo $lang['c-top-title']; ?></span>
                    <h2 class="title"><?php echo $lang['c-title']; ?></h2>
                </div>
                <div class="short-description">
                    <p><?php echo $lang['c-desc']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <form action="send_email.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="text" name="name" placeholder="<?php echo $lang['cf-name']; ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="<?php echo $lang['cf-mail']; ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" name="phone" placeholder="<?php echo $lang['cf-tel']; ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <textarea name="message" placeholder="<?php echo $lang['cf-mes']; ?>" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="submit-btn uppercase"><?php echo $lang['cf-btn']; ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-information">
                    <div class="contact-info-item">
                        <ul class="list-unstyled">
                            <li class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </li>
                            <li class="info">
                                <h4 class="title"><?php echo $lang['cd-tel']; ?></h4>
                                <p><a href="tel:902165481024">+90 (216) 548 10 24</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-info-item">
                        <ul class="list-unstyled">
                            <li class="icon">
                                <i class="fas fa-envelope"></i>
                            </li>
                            <li class="info">
                                <h4 class="title"><?php echo $lang['cd-mail']; ?></h4>
                                <p><a href="mailto:info@bauart.com.tr">info@bauart.com.tr</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-info-item">
                        <ul class="list-unstyled">
                            <li class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </li>
                            <li class="info">
                                <h4 class="title"><?php echo $lang['cd-address']; ?></h4>
                                <p><?php echo $lang['cd-address-desc']; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-map-area">
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.502612770204!2d29.122680075513017!3d40.992371020405024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac9f219bbf92d%3A0xbb8b68a37bcad85b!2sBauArt!5e0!3m2!1str!2str!4v1717600204067!5m2!1str!2str" width="600" height="450" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

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


<!-- Toast Mesajı için JavaScript -->
<script>
    function showToast(message) {
        var toast = document.createElement('div');
        toast.className = 'toast';
        toast.innerText = message;
        document.body.appendChild(toast);

        setTimeout(function() {
            toast.classList.add('show');
        }, 100);

        setTimeout(function() {
            toast.classList.remove('show');
            document.body.removeChild(toast);
        }, 3000);
    }
</script>

<style>
    .toast {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #5cb85c;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        position: fixed;
        z-index: 1;
        left: 50%;
        top: 230px;
        font-size: 17px;
    }

    .toast.show {
        visibility: visible;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @keyframes fadein {
        from {
            top: 0;
            opacity: 0;
        }

        to {
            top: 230px;
            opacity: 1;
        }
    }

    @keyframes fadeout {
        from {
            top: 230px;
            opacity: 1;
        }

        to {
            top: 0;
            opacity: 0;
        }
    }
</style>

</body>

</html>