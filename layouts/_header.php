<?php
include('config.php');

$pages = [
    'index' => [
        'title' => 'Anasayfa | Bauart Yapı Sistemleri ve Dış Ticaret A.Ş.',
        'description' => 'Bauart Yapı Sistemleri ve Dış Ticaret A.Ş., inşaat sektöründe 2005 yılından bu yana faaliyet göstermektedir.',
        'keywords' => 'Bauart, inşaat, yapı sistemleri, dış ticaret, İstanbul, konut, alışveriş merkezi, ofis binaları',
        'canonical' => BASE_URL . 'index.php'
    ],
    'about-us' => [
        'title' => 'Hakkımızda | Bauart Yapı Sistemleri ve Dış Ticaret A.Ş.',
        'description' => 'Bauart Yapı Sistemleri ve Dış Ticaret A.Ş., 2005 yılından bu yana inşaat sektöründe faaliyet göstermektedir. Misyonumuz, müşteri odaklı hizmet sunmak; vizyonumuz ise estetik, kalite ve teknolojiyi harmanlamaktır.',
        'keywords' => 'Bauart, inşaat, yapı sistemleri, dış ticaret, İstanbul, misyon, vizyon, müşteri odaklı, estetik, kalite, teknoloji',
        'canonical' => BASE_URL . 'about-us.php'
    ],
    'project' => [
        'title' => 'Projeler | Bauart Yapı Sistemleri ve Dış Ticaret A.Ş.',
        'description' => 'Bauart Yapı Sistemleri ve Dış Ticaret A.Ş., konut, alışveriş merkezi, ofis binaları gibi birçok alanda projeler gerçekleştirmektedir.',
        'keywords' => 'Bauart, projeler, inşaat, yapı sistemleri, konut, alışveriş merkezi, ofis binaları',
        'canonical' => BASE_URL . 'project.php'
    ],
    'contact' => [
        'title' => 'İletişim | Bauart Yapı Sistemleri ve Dış Ticaret A.Ş.',
        'description' => 'Bauart Yapı Sistemleri ve Dış Ticaret A.Ş. ile iletişime geçmek için telefon: +90 216 548 10 24 veya e-posta: info@bauart.com.tr.',
        'keywords' => 'Bauart, iletişim, inşaat, yapı sistemleri, dış ticaret, İstanbul, telefon, e-posta',
        'canonical' => BASE_URL . 'contact.php'
    ],
    'kvkk' => [
        'title' => 'KVKK | Bauart Yapı Sistemleri ve Dış Ticaret A.Ş.',
        'description' => 'Bauart Yapı Sistemleri ve Dış Ticaret A.Ş. Kişisel Verilerin Korunması Kanunu (KVKK) politikaları.',
        'keywords' => 'Bauart, KVKK, kişisel verilerin korunması, inşaat, yapı sistemleri, dış ticaret, İstanbul',
        'canonical' => BASE_URL . 'kvkk.php'
    ]
];

$page = basename($_SERVER['PHP_SELF'], ".php");
$pageTitle = isset($pages[$page]['title']) ? $pages[$page]['title'] : 'Bauart';
$pageDescription = isset($pages[$page]['description']) ? $pages[$page]['description'] : 'Bauart Yapı Sistemleri ve Dış Ticaret A.Ş., inşaat sektöründe faaliyet göstermektedir.';
$pageKeywords = isset($pages[$page]['keywords']) ? $pages[$page]['keywords'] : 'Bauart, inşaat, yapı sistemleri, dış ticaret, İstanbul';
$pageCanonical = isset($pages[$page]['canonical']) ? $pages[$page]['canonical'] : BASE_URL;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$current_url = $_SERVER['REQUEST_URI'];
$BASE_URL = 'http://localhost/bauart/';

function get_active_class($url, $current_url)
{
    return ($url == $current_url) ? 'active' : '';
}

?>

<!doctype html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $pageCanonical; ?>">
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $pageCanonical; ?>">
    <meta property="og:image" content="<?php echo BASE_URL; ?>assets/img/logo/bauart-logo-main.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:image" content="<?php echo BASE_URL; ?>assets/img/logo/bauart-logo-main.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/fontawsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/responsive.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YEC5LPZZNH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YEC5LPZZNH');
    </script>

    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src == r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97491978, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/97491978" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
</head>

<body>

    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>

    <div id="header-fixed-height"></div>
    <header class="header-area-one" id="sticky-header">
        <nav class="navbar navbar-expand-lg d-none d-lg-block">
            <div class="container-fluid">
                <a class="navbar-brand me-0" href="<?php echo BASE_URL; ?>">
                    <img src="<?php echo BASE_URL; ?>assets/img/logo/bauart-logo-main.png" width="190px" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item <?php echo get_active_class($BASE_URL, $current_url); ?>">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>">
                                <?php echo isset($lang['h-home']) ? $lang['h-home'] : 'Anasayfa'; ?>
                            </a>
                        </li>
                        <li class="nav-item <?php echo get_active_class($BASE_URL . 'about-us', $current_url); ?>">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>about-us">
                                <?php echo isset($lang['h-about']) ? $lang['h-about'] : 'Hakkımızda'; ?>
                            </a>
                        </li>
                        <li class="nav-item <?php echo get_active_class($BASE_URL . 'project', $current_url); ?>">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>project">
                                <?php echo isset($lang['h-project']) ? $lang['h-project'] : 'Projeler'; ?>
                            </a>
                        </li>
                        <li class="nav-item <?php echo get_active_class($BASE_URL . 'contact', $current_url); ?>">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>contact">
                                <?php echo isset($lang['h-contact']) ? $lang['h-contact'] : 'İletişim'; ?>
                            </a>
                        </li>
                        <li class="nav-item <?php echo get_active_class($BASE_URL . '#', $current_url); ?>">
                            <a class="nav-link" href="#">
                                <?php echo isset($lang['h-kvkk']) ? $lang['h-kvkk'] : 'KVKK'; ?>
                            </a>
                        </li>
                    </ul>
                    <div class="header-right-info d-flex align-items-center">
                        <div class="language-selector">
                            <ul class="list-unstyled d-flex">
                                <li class="nav-item"><a href="?lang=tr" class="nav-link">TR</a></li>
                                <li class="nav-item"><a href="?lang=en" class="nav-link">EN</a></li>
                            </ul>
                        </div>
                        <script>

                        </script>
                        <div class="help-number d-flex align-items-center">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info">
                                <p><?php echo $lang['h-r-contact'] ?></p>
                                <h6>
                                    <a href="tel:+902165481024">
                                        +90 (216) 548 10 24
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="mobile-menu-area d-block d-lg-none">
            <div class="mobile-topbar">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <img src="<?php echo BASE_URL; ?>assets/img/logo/bauart-logo-main.png" width="190px" alt="logo">
                        </div>
                        <div class="bars">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay"></div>
            <div class="mobile-menu-main">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/img/logo/bauart-logo-main.png" width="190px" alt="logo"></a>
                </div>
                <div class="close-mobile-menu"><i class="fas fa-times"></i></div>
                <div class="menu-body">
                    <div class="menu-list">
                        <ul class="list-unstyled">
                            <li class="sub-mobile-menu">
                                <a href="<?php echo BASE_URL; ?>"><?php echo $lang['h-home'] ?></a>
                            </li>
                            <li class="sub-mobile-menu">
                                <a href="<?php echo BASE_URL; ?>about-us"><?php echo $lang['h-about'] ?></a>
                            </li>
                            <li class="sub-mobile-menu">
                                <a href="<?php echo BASE_URL; ?>project"><?php echo $lang['h-project'] ?></a>
                            </li>
                            <li class="sub-mobile-menu">
                                <a href="<?php echo BASE_URL; ?>contact"><?php echo $lang['h-contact'] ?></a>
                            </li>
                            <li class="sub-mobile-menu">
                                <a href="<?php echo BASE_URL; ?>#"><?php echo $lang['h-kvkk'] ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>