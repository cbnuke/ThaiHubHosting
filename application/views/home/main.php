<script>
    jQuery(document).ready(function ($) {
        $('.carousel').carousel({interval: 4000});
        $("#btn_packet").click(function () {
            $('html, body').animate({scrollTop: $("#packet").offset().top - 50}, 1000);
        });

        $(".anim-slider").animateSlider(
                {
                    autoplay: true,
                    interval: 5500,
                    animations:
                            {
                                0: //Slide No1
                                        {
                                            li:
                                                    {
                                                        show: "fadeIn",
                                                        hide: "fadeOutLeftBig",
                                                        delayShow: "delay0.5s"
                                                    },
                                            "#looks":
                                                    {
                                                        show: "rotateInUpLeft",
                                                        delayShow: "delay1s"
                                                    },
                                            "#amazing":
                                                    {
                                                        show: "rotateInUpLeft",
                                                        delayShow: "delay1-5s"
                                                    },
                                            "#place":
                                                    {
                                                        show: "rotateInUpLeft",
                                                        delayShow: "delay2s"
                                                    },
                                            "#slide1_logo":
                                                    {
                                                        show: "bounceInDown",
                                                        delayShow: "delay1s"
                                                    },
                                            "#slide1_social":
                                                    {
                                                        show: "fadeIn",
                                                        delayShow: "delay1-5s"
                                                    }
                                        },
                                1: //Slide No2
                                        {
                                            li:
                                                    {
                                                        show: "fadeInLeft",
                                                        hide: "fadeOutLeftBig",
                                                        delayShow: "delay0-5s"
                                                    },
                                            "#img1":
                                                    {
                                                        show: "fadeInRight",
                                                        delayShow: "delay2s"
                                                    },
                                            "#img2":
                                                    {
                                                        show: "fadeInLeft",
                                                        delayShow: "delay3s"

                                                    },
                                            "#img3":
                                                    {
                                                        show: "fadeInRight",
                                                        hide: "fadeOutLeftBig",
                                                        delayShow: "delay4s"
                                                    }
                                        },
                                2:
                                        {
                                            li:
                                                    {
                                                        show: "fadeInUp",
                                                        hide: "fadeOutDownBig",
                                                        delayShow: "delay0-5s"
                                                    },
                                            "#T":
                                                    {
                                                        show: "slideInLeft",
                                                        delayShow: "delay1-5s"
                                                    },
                                            "#r":
                                                    {
                                                        show: "bounceInRight",
                                                        delayShow: "delay2s"
                                                    },
                                            "#y":
                                                    {
                                                        show: "fadeInRight",
                                                        delayShow: "delay2-5s"
                                                    },
                                            "#i":
                                                    {
                                                        show: "rollIn",
                                                        delayShow: "delay3s"
                                                    },
                                            "#t":
                                                    {
                                                        show: "rollIn",
                                                        delayShow: "delay3s"
                                                    },
                                            "#mark":
                                                    {
                                                        show: "rotateIn",
                                                        delayShow: "delay3-5s"
                                                    },
                                            "#txt_welcome":
                                                    {
                                                        show: "rotateIn",
                                                        delayShow: "delay3-5s"
                                                    }
                                        },
                                3: //Slide No4
                                        {
                                            "#entry3":
                                                    {
                                                        show: "fadeInUp",
                                                        delayShow: "delay1-2"
                                                    },
                                            "#entry4":
                                                    {
                                                        show: "fadeInDown",
                                                        delayShow: "delay2-4s"
                                                    }
                                        }
                            }
                });
    });
</script>
<div class="container-fluid" style="margin-bottom: 10px;">
    <div class="row">
        <ul class="anim-slider">

            <!-- Slide No1 -->
            <li class="anim-slide">
                <?= img('thaihubhosting.png?v=' . $version, array('id' => 'slide1_logo')) ?>
                <?= img('slide/social.png?v=' . $version, array('id' => 'slide1_social')) ?>
                <h1 id="looks">ผู้ให้บริการเว็บโฮสติ้งคุณภาพสูง</h1>
                <h1 id="amazing">สำหรับคนไทย</h1>
                <h1 id="place">พร้อมให้บริการทุกท่าน</h1>
            </li>


            <!-- Slide No2 -->
            <li class="anim-slide">
                <div id="img1"></div>
                <div id="img2"></div>
                <div id="img3"></div>
            </li>

            <!-- Slide No3 -->
            <li class="anim-slide">
                <h1 id="T">T</h1>
                <h1 id="r">r</h1>
                <h1 id="y">y</h1>
                <h1 id="i">i</h1>
                <h1 id="t">t</h1>
                <h1 id="mark">!</h1>
                <h1 id="txt_welcome"><span class="color-black">ยินดีต้อนรับสู่ Thai</span><span class="color-sky">Hub</span><span class="color-orange">Hosting</span></h1>
            </li>

            <!-- Slide No4 -->
            <li class="anim-slide">
                <?= img('slide/rev-entry-3.png', array('id' => 'entry3')) ?>
                <?= img('slide/rev-entry-4.png', array('id' => 'entry4')) ?>
            </li>

            <!-- Arrows -->
            <nav class="anim-arrows">
                <span class="anim-arrows-prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </span>
                <span class="anim-arrows-next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </span>
            </nav>
            <!-- Dynamically created dots -->

        </ul>
    </div>
</div>
<!--<div id="myCarousel" class="carousel slide animated bounceInDown">
     Indicators 
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
<?= img('slide/slide0.jpg?v=' . $version) ?>
            <div class="container">
                <div class="carousel-caption">
<?= img('thaihubhosting.png?v=' . $version, array('class' => 'img-responsive')) ?>
                    <h1><span class="color-black">ยินดีต้อนรับสู่ Thai</span><span class="color-sky">Hub</span><span class="color-orange">Hosting</span></h1>
                    <p class="lead ui green label" style="font-size:20px;">ผู้ใช้บริการเว็บโฮสติ้งคุณภาพสูง สำหรับคนไทย <span class="hidden-xs">พร้อมที่จะให้บริการ กับทุกองค์กร ทุกราชรัฐ หรือทุกท่าน</span></p>
                </div>
            </div>
        </div>
        <div class="item">
<?= img('slide/slide1.jpg?v=' . $version) ?>
            <div class="container">
                <div class="carousel-caption">
<?= img('thaihubhosting.png?v=' . $version, array('class' => 'img-responsive')) ?>
                    <h1>แพ็คเก็จที่จัดสรรตามขนาดขององค์หรือธุรกิจ</h1>
                    <p class="lead">เพื่อให้ง่ายต่อการเลือกใช้บริการของลูกค้า และตอบสนองต่อความต้องการอย่างถูกต้อง</p>
                    <p>
                        <a class="btn btn-lg btn-primary" id="btn_packet" href="#">แพ็คเก็จที่ให้บริการ</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
<?= img('idc/idc005_XL.jpg?v=' . $version) ?>
            <div class="container">
                <div class="carousel-caption">
<?= img('thaihubhosting.png?v=' . $version, array('class' => 'img-responsive')) ?>
                    <h1>ให้บริการด้วยเครือข่ายที่ดีที่สุดในประเทศไทย</h1>
                    <p class="lead">ไทยฮับโฮสติ้ง ได้คัดเลือกเครื่อข่ายที่ดีที่สุดสำหรับให้บริการแก่ลูกค้าของเรา</p>
                    <p>
<?= anchor('features', 'ความใส่ใจในรายละเอียดของเรา', array('class' => 'btn btn-lg btn-primary')) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a> <a
        class="right carousel-control" href="#myCarousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
 /.carousel -->

<div class="container marketing">
    <div class="row featurette">
        <div class="col-md-8 animated bounceInLeft">
            <div class="ui piled segment">
                <span class="ui right pointing basic blue ribbon label"><h2 style="margin: 0px;">ยินดีต้อนรับสู่ ไทยฮับโฮสติ้ง</h2></span>
                <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เราคือผู้ให้บริการโฮสติ้งคุณภาพดีได้มาตราฐาน ด้วยทีมงานที่มีประสิทธิภาพ หมดปัญหาเรื่องค่าใช้จ่ายสำหรับผู้ไม่มีเซิร์ฟเวอร์ นอกจากนี้เรายังมีแพ็คเกจที่หลากหลาย เพื่อตอบสนองความต้องการของลูกค้าได้อย่างลงตัว เพื่อการใช้งานได้อย่างเต็มประสิทธิภาพ</p>
                <p><?= anchor('features', '<i class="fa fa-heart"></i> ความใส่ใจในรายละเอียดของเรา', array('class' => 'btn btn-lg btn-primary')) ?></p>
            </div>     
        </div>
        <div class="col-md-4 animated bounceInRight">
            <div class="ui green segment">
                <div class="ui ribbon green label"><h3 style="margin:0px;">การรับรองความน่าเชื่อถือ</h3></div>
                <p>ไทยฮับโฮสติ้งได้จดทะเบียนพาณิชย์อิเล็กทรอนิกส์และเสียภาษีถูกต้องตามกฏหมาย</p>
                <div class="ui teal label">
                    <i class="mail icon"></i> เลขทะเบียนพานิชย์ <span style="font-weight: lighter;">1369900182435</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container marketing animated bounceInUp">
    <h2 class="featurette-heading">บริการจดโดเมนกับผู้ให้บริการระดับโลก <span class="text-muted">ผ่าน Resellerclub</span></h2>
    <div class="row featurette">
        <div class="col-md-6">
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เราได้ให้บริการในการจดโมนหลายชนิด รองรับการจดโดเมนมาตรฐานทุกชนิด ไม่ว่าจะเป็น .com, .net, .org หรืออย่าง .io, .us, .me </p>
        </div>
        <div class="col-md-6">
            <form action="https://www.thaihubhosting.com/customer/domainchecker.php" method="post">
                <div class="input-group">
                    <span class="input-group-addon">ตรวจสอบโดเมนว่าง</span>                
                    <input type="hidden" name="direct" value="true" />
                    <input type="text" name="domain" class="form-control" placeholder="เช่น thaihubhosting.com">
                    <span class="input-group-btn">
                        <button class="btn btn-warning" type="submit"><i class="fa fa-search fa-lg"></i></button>
                    </span>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-6 -->
    </div>
    <!-- Comment
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tabcom" role="tab" data-toggle="tab">.com</a></li>
        <li><a href="#tabnet" role="tab" data-toggle="tab">.net</a></li>
        <li><a href="#taborg" role="tab" data-toggle="tab">.org</a></li>
        <li><a href="#tabio" role="tab" data-toggle="tab">.io</a></li>
        <li><a href="#tabus" role="tab" data-toggle="tab">.us</a></li>
        <li><a href="#tabme" role="tab" data-toggle="tab">.me</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tabcom">1</div>
        <div class="tab-pane fade" id="tabnet">2</div>
        <div class="tab-pane fade" id="taborg">3</div>
        <div class="tab-pane fade" id="tabio">4</div>
        <div class="tab-pane fade" id="tabus">5</div>
        <div class="tab-pane fade" id="tabme">6</div>
    </div>
    -->
    <hr class="featurette-divider">
</div>

<!--packet-->
<section class="container marketing" id="packet">
    <h2 class="featurette-heading">
        แพ็คเก็จโฮสติ้งที่เราให้บริการ <span class="text-muted">จัดสรรตามขนาดของธุรกิจ</span>
        <span class="label label-warning">Power up without fee <span class="glyphicon glyphicon-thumbs-up"></span></span>
    </h2>    
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="ui teal ribbon label"><?= lang('label_value') ?></div>
                    <h3 class="text-center">Mini Plan</h3>
                </div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"> &nbsp;<strong> ฿650 / <?= lang('year') ?> </strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?= lang('storage') ?> <del>1GB</del> <strong>5GB</strong></li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?= lang('bandwidth') ?> <del>10GB</del> <strong>30GB / <?= lang('month') ?></strong></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?= lang('domain') ?> 1</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?= lang('free_domain') ?> -</li>
                    <li class="list-group-item"><i class="fa fa-database"></i> Mysql Database 2</li>
                </ul>
                <div class="panel-footer">
                    <table width="100%">
                        <tr>
                            <td style="padding: 0px 4px;">
                                <a class="btn btn-block btn-danger" href="https://www.thaihubhosting.com/customer/cart.php?a=add&pid=1"><i class="fa fa-shopping-cart"></i> สั่งซื้อ</a>
                            </td>
                            <td style="padding: 0px 4px;">
                                <?= anchor('hosting', '<i class="fa fa-info-circle"></i> เพิ่มเติม', array('class' => 'btn btn-block btn-danger')) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="ui orange ribbon label"><?= lang('label_best') ?></div>
                    <h3 class="text-center">Small Plan</h3>
                </div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>฿1,350 / <?= lang('year') ?></strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?= lang('storage') ?> <del>3GB</del> <strong>10GB</strong></li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?= lang('bandwidth') ?> <del>50GB</del> <strong>150GB / <?= lang('month') ?></strong></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?= lang('domain') ?> 3</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?= lang('free_domain') ?> 1 <?= lang('year') ?></li>
                    <li class="list-group-item"><i class="fa fa-database"></i> Mysql Database 4</li>
                </ul>
                <div class="panel-footer">
                    <table width="100%">
                        <tr>
                            <td style="padding: 0px 4px;">
                                <a class="btn btn-block btn-danger" href="https://www.thaihubhosting.com/customer/cart.php?a=add&pid=2"><i class="fa fa-shopping-cart"></i> สั่งซื้อ</a>
                            </td>
                            <td style="padding: 0px 4px;">
                                <?= anchor('hosting', '<i class="fa fa-info-circle"></i> เพิ่มเติม', array('class' => 'btn btn-block btn-danger')) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="ui red ribbon label"><?= lang('label_balance') ?></div>
                    <h3 class="text-center">Medium Plan</h3>
                </div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>฿2,600 / <?= lang('year') ?></strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?= lang('storage') ?> <del>7GB</del> <strong>20GB</strong></li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?= lang('bandwidth') ?> <del>250GB</del> <strong>750GB / <?= lang('month') ?></strong></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?= lang('domain') ?> 6</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?= lang('free_domain') ?> 1 <?= lang('year') ?></li>
                    <li class="list-group-item"><i class="fa fa-database"></i> Mysql Database ไม่จำกัด</li>
                </ul>
                <div class="panel-footer">
                    <table width="100%">
                        <tr>
                            <td style="padding: 0px 4px;">
                                <a class="btn btn-block btn-danger" href="https://www.thaihubhosting.com/customer/cart.php?a=add&pid=3"><i class="fa fa-shopping-cart"></i> สั่งซื้อ</a>
                            </td>
                            <td style="padding: 0px 4px;">
                                <?= anchor('hosting', '<i class="fa fa-info-circle"></i> เพิ่มเติม', array('class' => 'btn btn-block btn-danger')) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="ui blue ribbon label"><?= lang('label_enterprise') ?></div>
                    <h3 class="text-center">Large Plan</h3>
                </div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>฿4,950 / <?= lang('year') ?></strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?= lang('storage') ?> <del>12GB</del> <strong>40GB</strong></li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?= lang('bandwidth') ?> <?= lang('unlimited') ?></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?= lang('domain') ?> 9</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?= lang('free_domain') ?> 1 <?= lang('year') ?></li>
                    <li class="list-group-item"><i class="fa fa-database"></i> Mysql Database <?= lang('unlimited') ?></li>
                </ul>
                <div class="panel-footer">
                    <table width="100%">
                        <tr>
                            <td style="padding: 0px 4px;">
                                <a class="btn btn-block btn-danger" href="https://www.thaihubhosting.com/customer/cart.php?a=add&pid=4"><i class="fa fa-shopping-cart"></i> สั่งซื้อ</a>
                            </td>
                            <td style="padding: 0px 4px;">
                                <?= anchor('hosting', '<i class="fa fa-info-circle"></i> เพิ่มเติม', array('class' => 'btn btn-block btn-danger')) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
</section><!--/packet-->

<div class="container marketing">
    <!-- START THE FEATURETTES -->
    <div class="row featurette">
        <div class="col-md-8">
            <h2 class="featurette-heading">บริการหลังการขายใส่ใจตลอด 24 ชม. <span class="text-muted">ตลอดอายุการใช้งาน</span>
            </h2>
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากประสบการ์ณการทำงานด้านเว็บโฮสติ้งยาวนาน ทำให้เข้าใจถึงปัญหาของการบริการ หมดปัญหาการบริการหลังการขายที่ไม่ได้ประสิทธิภาพ ด้วยการดูแล 24 ชม. ตลอดอายุการใช้งาน</p>
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รองรับ Uptime 99% และรองรับการแก้ไขปัญหา 24 ชม. เพื่อให้ลูกค้าได้ใช้งานเต็มประสิทธิภาพ</p>
            <div style="display: inline-block;">
                <h2 style="float: left;"><span class="label label-info"><i class="fa fa-refresh fa-spin"></i> Uptime 99%</span></h2>
                <h2 style="float: left;"><span class="label label-success"><i class="fa fa-wrench"></i> Service 24/7</span></h2>
            </div>
            <p style="margin-top:20px; margin-bottom: 0px;">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x"></i>
                </span>support@thaihubhosting.com
            </p>
            <p style="margin: 0px;">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i>
                </span>ThaiHubHosting Page
            </p>
            <p style="margin: 0px;">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa fa-mobile fa-stack-1x"></i>
                </span><?= lang('phone_number1') ?>
            </p>
        </div>
        <div class="row col-md-4">

        </div>
    </div>
</div>