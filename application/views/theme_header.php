<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords"
              content="thaihubhosting, hosting, host, high perfomance">
        <meta name="description"
              content="เว็บโฮสติ้งคุณภาพสูง ที่ได้รับการออกแบบติดตั้งและผู้แลจากผู้เชี่ยวชาญตลอด 24 ชั่วโมง">
        <meta name="author" content="CBNUKE">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="ThaiHubHosting เว็บโฮสติ้งคุณภาพสูง สำหรับคนไทย" />
        <meta property="og:description" content="เว็บโฮสติ้งคุณภาพสูง ที่ได้รับการออกแบบติดตั้งและผู้แลจากผู้เชี่ยวชาญตลอด 24 ชั่วโมง" />
        <meta property="og:url" content="https://www.thaihubhosting.com/" />
        <meta property="og:site_name" content="ThaiHubHosting" />
        <meta property="article:publisher" content="https://www.facebook.com/thaihubhosting" />
        <meta property="og:image" content="<?= img_url() . 'facebook_thumb.jpg' ?>" />


        <title><?php echo $title; ?></title>
        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?= asset_url() ?>img/apple-touch-icon-144-precomposed.png<?= '?v=' . $version ?>">
        <link rel="shortcut icon" href="<?= asset_url() ?>img/favicon.ico<?= '?v=' . $version ?>">
        <!-- Bootstrap core CSS ans JS -->
        <?php echo js('pace.min.js?v=' . $version); ?>
        <?php echo css('bootstrap.css?v=' . $version); ?>
        <?php echo css('pace.css?v=' . $version); ?>
        <?php echo css('theme.css?v=' . $version); ?>
        <?php echo css('label.min.css?v=' . $version); ?>
        <?php echo css('segment.min.css?v=' . $version); ?>
        <?php echo css('font-awesome.css?v=' . $version); ?>
        <?php echo css('animate.css?v=' . $version); ?>
        <?php echo js('jquery.js?v=' . $version); ?>
        <?php echo js('bootstrap.js?v=' . $version); ?>
        <?php echo js('docs.min.js?v=' . $version); ?>
        <?php echo js('jquery.parallax-1.1.3.js?v=' . $version); ?>

        <script type="text/javascript">
            jQuery(window).load(function() {
                $('#intro').parallax("50%", 0.1);
                $('#popoverMail').popover();
                $('#popoverFacebook').popover();
                $('#popoverMobile').popover();
            });
            $(window).scroll(function() {
                if ($(this).scrollTop() > 30) { //use `this`, not `document`
                    $('#top-nav').fadeOut();
                    $(".pace-progress").css("margin-top", "50px");
                } else {
                    $('#top-nav').fadeIn();
                    $(".pace-progress").css("margin-top", "74px");
                }
                if ($(this).scrollTop() > $(window).height() / 2) {
                    $('#scroll-top').removeClass('hidden');
                } else {
                    $('#scroll-top').addClass('hidden');
                }
            });
        </script>
        <?php echo google_analytics('UA-53490466-1'); ?>
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-fixed-top th-nav" role="navigation">
            <div id="top-nav" class="th-top-nav">
                <p class="color-white" style="font-weight: lighter;">ทะเบียนพานิชย์ 1369900182435</p>
                <p class="text-right" style="margin-top: -20px;">
                    <a id="popoverMail" href="#" data-content="ติดต่อกับผู้ให้บริการ ผ่าน support@thaihubhosting.com" rel="popover" data-placement="bottom" data-original-title="ติดต่อผ่านอีเมล์" data-trigger="hover"><i class="fa fa-envelope"></i> Support |</a>
                    <a id="popoverFacebook" class="hidden-xs" href="#" data-content="ติดต่อกับผู้ให้บริการ ผ่าน Facebookpage ThaiHubHosting" rel="popover" data-placement="bottom" data-original-title="ติดต่อผ่านเพจ" data-trigger="hover"> <i class="fa fa-facebook"></i> ThaiHubHosting |</a>
                    <a id="popoverMobile" href="#" data-content="ติดต่อกับผู้ให้บริการ ผ่านเบอร์ <?= lang('phone_number1') ?>" rel="popover" data-placement="bottom" data-original-title="ติดต่อผ่านสายตรง" data-trigger="hover"><i class="fa fa fa-mobile-phone"></i> <?= lang('phone_number1') ?></a>
                </p>
            </div>
            <div class="container-fluid">           
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                    </button>
                    <?php echo anchor('home', img('apple-touch-icon-144-precomposed.png?v=' . $version, array('height' => '32px', 'style' => 'margin-top:-6px;')) . '<span class="thai">Thai</span><span class="hub">Hub</span><span class="hosting">Hosting</span>', array('class' => 'navbar-brand')); ?>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li
                        <?php
                        if ($this->router->class == 'home') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('home', '<i class="fa fa-home"></i> ' . lang('menu_home')); ?></li>
                        <li
                        <?php
                        if ($this->router->class == 'hosting') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('hosting', '<i class="fa fa-shopping-cart"></i> ' . lang('menu_hosting')); ?></li>
                        <li
                        <?php
                        if ($this->router->class == 'features') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('features', '<i class="fa fa-briefcase"></i> ' . lang('menu_features')); ?></li>
                        <li
                        <?php
                        if ($this->router->class == 'contact') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('contact', '<i class="fa fa-comments"></i> ' . lang('menu_contact')); ?></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><?php echo anchor('https://www.thaihubhosting.com/customer', '<i class="fa fa-users"></i> ' . lang('menu_customer')) ?></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <?php
                                $site_lang = $this->session->userdata('site_lang');
                                if (!$site_lang) {
                                    $img_path = 'thai.png';
                                } else if ($site_lang == 'thai') {
                                    $img_path = 'thai.png';
                                } else if ($site_lang == 'english') {
                                    $img_path = 'english_us.png';
                                }
                                ?>
                                <?= img($img_path . '?v=' . $version, array('width' => '18px')) ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><?= anchor('lang/english/' . uri_string(), img('english_us.png?v=' . $version, array('width' => '18px')) . ' ' . lang('menu_english')) ?></li>
                                <li><?= anchor('lang/thai/' . uri_string(), img('thai.png?v=' . $version, array('width' => '18px')) . ' ' . lang('menu_thai')) ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <!-- container -->
        <div class="content-wrap">

            <?php
            if (isset($debug)) {
                echo '<div class="container">';
                print '<pre>';
                print_r($debug);
                print '</pre>';
                echo '</div>';
            }

            if (isset($alert)) {
                echo '<div class="container">';
                echo $alert;
                echo '</div>';
            }
            ?>