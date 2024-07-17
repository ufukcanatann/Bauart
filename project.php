<?php include('layouts/_header.php');
$projects = json_decode(file_get_contents('projects/projects.json'), true);
?>

<section class="breadcrumb-area" data-background="assets/img/bg/bread-crumb-bg.png">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="breadcrumb-title">
                        <h2 class="title text-white"><?php echo $lang['h-project'] ?></h2>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="list-unstyled bread-crumb text-md-end">
                        <li><a href="<?php echo BASE_URL; ?>"><?php echo $lang['h-home'] ?></a></li>
                        <li class="main-link"><?php echo $lang['h-project'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="project-area">
    <div class="container">
        <div class="projects-main d-flex justify-content-between flex-wrap">
            <div class="row">
                <?php
                foreach ($projects as $project) {
                    $title = $project['title'];
                    $image = $project['images'][0];
                    $link = $project['link'];
                    $status = $project['project_complete'];
                ?>

                    <div class="col-md-4 col-6">
                        <div class="project-image position-relative">
                            <a href="<?php echo $link; ?>" class="d-block w-100 h-100">
                                <img src="<?php echo BASE_URL; ?>assets/img/project-images/<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-fluid w-100">
                            </a>
                            <div class="project-info position-absolute bottom-0 start-0 w-100">
                                <a href="<?php echo BASE_URL.$link; ?>" class="title"><?php echo $title; ?></a>
                                <p><?php echo $status; ?></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
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

</body>

</html>