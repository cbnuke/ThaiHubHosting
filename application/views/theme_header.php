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
        <?php echo js('pace.min.js'); ?>
        <?php echo js('jquery.js'); ?>
        <?php echo js('bootstrap.js'); ?>
        <?php echo js('docs.min.js'); ?>

        <script type="text/javascript">
            jQuery(window).load(function() {
                $('.content-wrap').fadeIn(1500);
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
                        ?>><?php echo anchor('home', '<span class="glyphicon glyphicon-home"></span> หน้าหลัก'); ?></li>
                        <li
                        <?php
                        if ($this->router->class == 'hosting') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('hosting', '<span class="glyphicon glyphicon-hdd"></span> โฮสติ้งแพ็คเกจ'); ?></li>
                        <li
                        <?php
                        if ($this->router->class == 'features') {
                            echo 'class="active"';
                        }
                        ?>><?php echo anchor('features', '<span class="glyphicon glyphicon-heart"></span> คุณสมบัติของโฮสติ้ง'); ?></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><?php echo anchor('http://customer.thaihubhosting.com/clientarea.php', '<span class="glyphicon glyphicon-user"></span> ส่วนจัดการลูกค้า') ?></li>
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