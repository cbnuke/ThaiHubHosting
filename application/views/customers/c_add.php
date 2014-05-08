<script>
$(function() {$('#c_birth').datepicker({changeMonth: true,changeYear: true,yearRange: "-100:+0" });});
</script>
<h1>ข้อมูลลูกค้า</h1>
<?php echo $form;?>
<div class="row-fluid">
	<div class="span12">
		<h3>ประวัติลูกค้า</h3>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<div
			class="control-group <?php if(form_error('c_pid'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">รหัสบัตรประชาชน</span>
				<?php echo $input['c_pid'];?>
			</div>
		</div>
	</div>
	<div class="span6">
		<div
			class="control-group <?php if(form_error('c_name'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">ชื่อ - นามสกุล</span>
				<?php echo $input['c_name'];?>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<div
			class="control-group <?php if(form_error('c_addr'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">ที่อยู่</span>
				<?php echo $input['c_addr'];?>
			</div>
		</div>
	</div>
	<div class="span6">
		<div
			class="control-group <?php if(form_error('c_job'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">อาชีพ</span>
				<?php echo $input['c_job'];?>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<div
			class="control-group <?php if(form_error('c_tel'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">เบอร์โทรศัพท์</span>
				<?php echo $input['c_tel'];?>
			</div>
		</div>
	</div>
	<div class="span6">
		<div
			class="control-group <?php if(form_error('c_birth'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">วันเกิด</span>
				<?php echo $input['c_birth'];?>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div
			class="control-group <?php if(form_error('c_pic'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">รูปภาพลูกค้า</span>
				<?php echo $input['c_pic'];?>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div
			class="control-group <?php if(form_error('c_tsp'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">รูปภาพสำเนาบัตรประชาชน</span>
				<?php echo $input['c_tsp'];?>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div
			class="control-group <?php if(form_error('c_tshome'))echo 'error'; ?>">
			<div class="input-prepend">
				<span class="add-on">รูปภาพสำเนาทะเบียนบ้าน</span>
				<?php echo $input['c_tshome'];?>
			</div>
		</div>
	</div>
</div>
<div class="form-actions">
	<a href="#comfirmModal" role="button" class="btn btn-primary"
		data-toggle="modal">เพิ่มลูกค้า</a>
	<?php echo anchor('customers','ย้อนกลับ',array('class'=>'btn'));?>
</div>
<!-- Modal -->
<div id="comfirmModal" class="modal hide fade" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">×</button>
		<h3 id="myModalLabel">เพิ่มข้อมูลลูกค้า</h3>
	</div>
	<div class="modal-body">
		<p>ข้อมูลที่กรอกถูกต้องครบถ้วน ดำเนินการเพิ่มข้อมูล</p>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" type="submit">ยืนยัน</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">ยกเลิก</button>
	</div>
</div>
<?php echo form_close();?>
