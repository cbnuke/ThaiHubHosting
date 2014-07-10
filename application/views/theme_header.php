<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords"
              content="thaihubhosting, hosting, host, high perfomance">
        <meta name="description"
              content="เว็บโฮสติ้งคุณภาพสูง ที่ได้รับการออกแบบติดตั้งและผู้แลจากผู้เชี่ยวชาญตลอด 24 ชั่วโมง">
        <meta name="author" content="CBNUKE">

        <title><?php echo $title; ?></title>
        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?= asset_url() ?>img/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="<?= asset_url() ?>img/favicon.ico">
        <!-- Bootstrap core CSS ans JS -->
        <?php echo css('bootstrap.css'); ?>
        <?php echo css('pace.css'); ?>
        <?php echo css('theme.css'); ?>
        <?php echo css('label.min.css'); ?>
        <?php echo css('font-awesome.css'); ?>
        <?php echo js('pace.min.js'); ?>
        <?php echo js('jquery.js'); ?>
        <?php echo js('bootstrap.js'); ?>
        <?php echo js('docs.min.js'); ?>
        <?php echo js('jquery.parallax-1.1.3.js'); ?>

        <script type="text/javascript">
            jQuery(window).load(function() {
                $('.content-wrap').fadeIn(1500);
                $('#intro').parallax("50%", 0.1);
            });
        </script>
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-fixed-top th-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                    </button>
                    <?php echo anchor('home', img('apple-touch-icon-144-precomposed.png', array('height' => '32px', 'style' => 'margin-top:-6px;')) . '<span class="thai">Thai</span><span class="hub">Hub</span><span class="hosting">Hosting</span>', array('class' => 'navbar-brand')); ?>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li
                        <?php
                        if ($this->router->class == 'home') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('home', '<i class="fa fa-home"></i> หน้าหลัก'); ?></li>
                        <li
                        <?php
                        if ($this->router->class == 'hosting') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('hosting', '<i class="fa fa-shopping-cart"></i> โฮสติ้งแพ็คเกจ'); ?></li>
                        <li
                        <?php
                        if ($this->router->class == 'features') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('features', '<i class="fa fa-briefcase"></i> คุณสมบัติของโฮสติ้ง'); ?></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><?php echo anchor('http://customer.thaihubhosting.com/clientarea.php', '<i class="fa fa-users"></i> ส่วนจัดการลูกค้า') ?></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <?= img('thai.png', array('width' => '18px')) ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><?= img('english_us.png', array('width' => '18px')) ?> USA</a></li>
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