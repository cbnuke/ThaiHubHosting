<script>
    jQuery(document).ready(function($) {
        $('.carousel').carousel({interval: 4000});
        $("#btn_packet").click(function() {
            $('html, body').animate({scrollTop: $("#packet").offset().top - 50}, 1000);
        });
    });
</script>
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <?= img('slide/slide1.jpg') ?>
            <div class="container">
                <div class="carousel-caption">
                    <?= img('thaihubhosting.png', array('class' => 'img-responsive')) ?>
                    <h1>ยินดีต้อนรับสู่ ThaiHubHosting</h1>
                    <p class="lead">ผู้ใช้บริการเว็บโฮสติ้งคุณภาพสูง สำหรับคนไทย พร้อมที่จะให้บริการ กับทุกองค์กร ทุกราชรัฐ หรือทุกท่าน</p>
                </div>
            </div>
        </div>
        <div class="item">
            <?= img('slide/slide2.jpg') ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>แพ็คเก็จที่จัดสรรตามขนาดขององค์หรือธุรกิจ</h1>
                    <p class="lead">เพื่อให้ง่ายต่อการเลือกใช้บริการของลูกค้า และตอบสนองต่อความต้องการอย่างถูกต้อง</p>
                    <p>
                        <a class="btn btn-lg btn-primary" id="btn_packet" href="#">แพ็คเก็จที่ให้บริการ</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <?= img('idc/idc005_XL.jpg') ?>
            <div class="container">
                <div class="carousel-caption">
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
<!-- /.carousel -->

<div class="container marketing">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">บริการโฮสติ้งคุณภาพสูง <span class="text-muted">ที่รองรับทุกรูปแบบการใช้งาน</span></h2>
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไทยฮับโฮสติ้ง เราได้จัดสรรแพ็คเก็จให้เหมาะสมตามการใช้งานของลูกค้า โดยทำการแบ่งแพ็คเก็จออกตามขนาดของธุรกิจหรือกิจการที่ลูกค้าต้องการ</p>
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยระบบชั้นนำ, อุปกรณ์เครื่องมือระบบโลก และการดูแลบริการหลังการขายที่ดี ทำให้เราพร้อมที่จะให้บริการทุกท่าน</p>
            <p><?= anchor('features', '<i class="fa fa-heart"></i> ความใส่ใจในรายละเอียดของเรา', array('class' => 'btn btn-lg btn-primary')) ?></p>
        </div>
        <div class="col-md-5">
            <?= img('tools.jpg', array('class' => 'featurette-image img-responsive')) ?>
        </div>
    </div>
    <hr class="featurette-divider">
</div>

<div class="container marketing">
    <h2 class="featurette-heading">บริการจดโดเมนกับผู้ให้บริการระดับโลก <span class="text-muted">ผ่าน Resellerclub</span></h2>
    <div class="row featurette">
        <div class="col-md-6">
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เราได้ให้บริการในการจดโมนหลายชนิด รองรับการจดโดเมนมาตรฐานทุกชนิด ไม่ว่าจะเป็น .com, .net, .org หรืออย่าง .io, .us, .me เป็นต้น</p>
        </div>
        <div class="col-md-6" style="padding-top: 30px;">
            <div class="input-group">
                <span class="input-group-addon">ตรวจสอบโดเมนว่าง</span>
                <input type="text" class="form-control" placeholder="เช่น thaihubhosting.com">
                <span class="input-group-btn">
                    <button class="btn btn-warning" type="button">ตรวจสอบ</button>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div>
    <hr class="featurette-divider">
</div>

<!--packet-->
<section class="container marketing" id="packet">
    <h2 class="featurette-heading">
        แพ็คเก็จโฮสติ้งที่เราให้บริการ <span class="text-muted">จัดสรรตามขนาดของธุรกิจ</span>
    </h2>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading"><h3 class="text-center">Mini Plan</h3></div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"> &nbsp;<strong> ฿650 / <?=lang('year')?> </strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?=lang('storage')?> 1GB</li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?=lang('bandwidth')?> 10GB / <?=lang('month')?></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?=lang('domain')?> 1</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?=lang('free_domain')?> -</li>
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
            <div class="panel panel-info">
                <div class="panel-heading"><h3 class="text-center">Small Plan</h3></div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>฿1,350 / <?=lang('year')?></strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?=lang('storage')?> 3GB</li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?=lang('bandwidth')?> 50GB / <?=lang('month')?></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?=lang('domain')?> 4</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?=lang('free_domain')?> 1 <?=lang('year')?></li>
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
            <div class="panel panel-info">
                <div class="panel-heading"><h3 class="text-center">Medium Plan</h3></div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>฿2,600 / <?=lang('year')?></strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?=lang('storage')?> 7GB</li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?=lang('bandwidth')?> 250GB / <?=lang('month')?></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?=lang('domain')?> 6</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?=lang('free_domain')?> 1 <?=lang('year')?></li>
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
                <div class="panel-heading"><h3 class="text-center">Large Plan</h3></div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>฿4,950 / <?=lang('year')?></strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <?=lang('storage')?> 12GB</li>
                    <li class="list-group-item"><i class="fa fa-cloud-download"></i> <?=lang('bandwidth')?> <?=lang('unlimited')?></li>
                    <li class="list-group-item"><i class="fa fa-cubes"></i> <?=lang('domain')?> 9</li>
                    <li class="list-group-item"><i class="fa fa-check"></i> <?=lang('free_domain')?> 1 <?=lang('year')?></li>
                    <li class="list-group-item"><i class="fa fa-database"></i> Mysql Database <?=lang('unlimited')?></li>
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
        <div class="col-md-7">
            <h2 class="featurette-heading">บริการหลังการขายใส่ใจตลอด 24 ชม. <span class="text-muted">ตลอดอายุการใช้งาน</span>
            </h2>
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากประสบการ์ณการทำงานด้านเว็บโฮสติ้งยาวนาน ทำให้เข้าใจถึงปัญหาของการบริการ ทำให้เราใส่ใจในการบริการหลังการขายเป็นอย่างมาก</p>
            <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รองรับ Uptime 99% และรองรับการแก้ไขปัญหา 24 ชม. เพื่อให้ลูกค้าได้ใช้งานเต็มประสิทธิภาพ</p>
        </div>
        <div class="col-md-5" style="padding-top: 40px;">
            <h2><span class="label label-info"><i class="fa fa-refresh fa-spin"></i> Uptime 99%</span></h2>
            <h2><span class="label label-success"><i class="fa fa-wrench"></i> Service 24/7</span></h2>
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
                </span>085-0247205
            </p>
        </div>
    </div>
    <hr class="featurette-divider">
</div>