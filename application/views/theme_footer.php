<ul class="nav pull-right scroll-top hidden" id="scroll-top">
    <li><a href="#" id="top"><i class="fa fa-arrow-circle-up fa-3x"></i></a></li>
</ul>
<footer class="th-footer hidden-print">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h4 style="margin-top: 0px;">Hosting</h4>
                <ul>
                    <li><?= anchor('hosting', 'Mini ฿650 / ปี') ?></li>
                    <li><?= anchor('hosting', 'Small ฿1,350 / ปี') ?></li>
                    <li><?= anchor('hosting', 'Medium ฿2,600 / ปี') ?></li>
                    <li><?= anchor('hosting', 'Large ฿4,950 / ปี') ?></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 style="margin-top: 0px;">Domain</h4>
                <ul>
                    <li>จดโดเมนเนมใหม่</li>
                    <li>ย้ายโดเมนเนม</li>
                    <li><?= anchor('customer/cart.php?gid=renewals', 'ต่ออายุโดเมนเนม') ?></li>
                    <li>ระบบจัดการโดเมนเนม</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 style="margin-top: 0px;">Features</h4>
                <ul>
                    <li><?= anchor('features#bestnetwork', lang('bestnetwork')) ?></li>
                    <li><?= anchor('features#bestserver', lang('bestserver')) ?></li>
                    <li><?= anchor('features#besttools', lang('besttools')) ?></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 style="margin-top: 0px;">Support</h4>
                <ul>
                    <li><?= anchor('terms', 'ข้อตกลงและเงื่อนไขการใช้บริการ') ?></li>
                    <li><?= anchor('contact', 'ติดต่อเรา') ?></li>
                    <li>ติดต่อผ่านระบบจัดการลูกค้า</li>
                    <ul>
                        <li><?= anchor('customer/submitticket.php?step=2&deptid=1', 'แจ้งการชำระเงิน') ?></li>
                        <li><?= anchor('customer/submitticket.php?step=2&deptid=2', 'ฝ่ายขาย') ?></li>
                        <li><?= anchor('customer/submitticket.php?step=2&deptid=3', 'ผ่ายบริการลูกค้า') ?></li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="th-footer-bottom">COPYRIGHT &copy; 2014 ThaiHubHosting.com เว็บโฮสติ้งคุณภาพสูง สำหรับคนไทย | Quality web hosting for Thailand</div>
</div>
<script>
    jQuery(document).ready(function($) {
        $('#top').click(function() {
            $("html, body").animate({scrollTop: 0}, 500);
        });
    });
</script>
</body>
</html>