<?php
include('../layouts/_header.php');

$projectID = isset($_GET["project"]) ? $_GET["project"] : "";
$projectsData = file_get_contents('projects.json');
$projects = json_decode($projectsData, true);

if (isset($_GET["project"]) && $_GET["project"] >= 0 && $_GET["project"] < count($projects)) {
    $projectID = $_GET["project"];
    $project = $projects[$projectID];
    $projectURL = $project["id"];
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <section class="breadcrumb-area" data-background="<?php echo BASE_URL; ?>assets/img/bg/bread-crumb-bg.png">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="breadcrumb-title">
                            <h2 class="title text-white"><?php echo $project["title"]; ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="list-unstyled bread-crumb text-md-end">
                            <li><a href="<?php echo BASE_URL; ?>"><?php echo $lang['ab-top-title']; ?></a></li>
                            <li><a href="<?php echo BASE_URL; ?>project"><?php echo $lang['h-project']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-details-area">
        <div class="container">
            <div class="project-details-thumb-image">
                <img src="<?php echo BASE_URL; ?>assets/img/project-images/<?php echo $project["images"][1]; ?>" alt="<?php echo $project["title"]; ?>" class="img-fluid">
                <div class="project-information">
                    <h3 class="project-title"><?php echo $lang['pd-det']; ?></h3>
                    <div class="main-content">
                        <div class="info-main">
                            <div class="info-item">
                                <h6 class="info-subtitle"><?php echo $lang['pd-emp']; ?>:</h6>
                                <p><?php echo $project["employer"]; ?></p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle"><?php echo $lang['pd-loc']; ?>:</h6>
                                <p><?php echo $project["location"]; ?></p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle"><?php echo $lang['pd-ca']; ?>:</h6>
                                <p><?php echo $project["construction_area"]; ?></p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle"><?php echo $lang['pd-pc']; ?>:</h6>
                                <p><?php echo $project["project_complete"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details-information">
                <h2 class="project-details-title text-center"><?php echo $project["title"]; ?></h2>
                <div class="project-list-info">
                    <ul class="list-unstyled">
                        <?php foreach ($project["project_info"] as $info) : ?>
                            <li><i class="fas fa-check"></i>
                                <h6><?php echo $info; ?></h6>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="project-details-gallery">
                    <h3 class="project-details-gallery-title mx-auto"><?php echo $lang['pd-img']; ?></h3>
                    <a href="<?php echo BASE_URL; ?>assets/img/project-images/<?php echo $project["images"][0]; ?>" style="z-index: 2;" data-fancybox="group1">
                        <img class="img-fluid rounded" style="max-height: 400px;" src="<?php echo BASE_URL; ?>assets/img/project-images/<?php echo $project["images"][0]; ?>" alt="Resim 1">
                    </a>
                    <?php foreach ($project["images"] as $image) : ?>
                        <a href="<?php echo BASE_URL; ?>assets/img/project-images/<?php echo $image; ?>" style="z-index: 3;" data-fancybox="group1"></a>
                    <?php endforeach; ?>

                    <div class="gallery-name">
                        <span class="title"><?php echo $project["title"]; ?></span>
                        <small class="count"><?php echo count($project["images"]); ?> <?php echo $lang['pd-img']; ?></small>
                    </div>
                </div>

                <div class="pagination">
                    <ul class="list-unstyled">
                        <li class="prev">
                            <?php if ($projectID > 0) : ?>
                                <a href="project-details.php?project=<?php echo $projectID - 1; ?>">
                                    <i class="fas fa-long-arrow-alt-left"></i> <?php echo $lang['pd-prev-btn']; ?>
                                </a>
                            <?php endif; ?>
                        </li>
                        <li class="next">
                            <?php if ($projectID < count($projects) - 1) : ?>
                                <a href="project-details.php?project=<?php echo $projectID + 1; ?>">
                                    <?php echo $lang['pd-next-btn']; ?> <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<?php
} else {
    echo isset($lang['project-not-found']) ? $lang['project-not-found'] : 'Geçerli bir proje bulunamadı.';
}

include('../layouts/_footer.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script>
    $(document).ready(function() {
        $("[data-fancybox]").fancybox({
            buttons: [
                "slideShow",
                "fullScreen",
                "thumbs",
                "close",
                {
                    type: 'button',
                    options: {
                        text: (typeof lang !== 'undefined' && lang['download-button']) ? lang['download-button'] : 'İndir',
                        click: function(instance, current) {
                            var message = (typeof lang !== 'undefined' && lang['confirm-download']) ? lang['confirm-download'] : "Resmi indirmek istediğinizden emin misiniz?";
                            if (confirm(message)) {
                                var link = document.createElement('a');
                                link.href = current.src;
                                link.download = current.src.split('/').pop();
                                document.body.appendChild(link);
                                link.click();
                                document.body.removeChild(link);
                            }
                        }
                    }
                },
                "share"
            ],
            loop: true,
            animationEffect: "fade",
            transitionEffect: "slide",
            autoFocus: false,
            hideScrollbar: true,
            infobar: true,
            caption: function(instance, item) {
                return $(this.element).data('caption') || '';
            },
            beforeClose: function(instance, current) {
                var message = (typeof lang != 'undefined' && lang['confirm-download']) ? lang['confirm-download'] : "Resmi gerçekten indirmek istiyor musunuz?";
                if (current.opts.buttons.includes('download')) {
                    return confirm(message);
                }
                return true;
            }
        });
    });
</script>


</body>

</html>