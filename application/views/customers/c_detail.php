<h1>ข้อมูลลูกค้า</h1>
<div class="well well-large">
	<div class="row-fluid">
		<div class="span12">
			<h3>ประวัติลูกค้า</h3>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#pic" data-toggle="tab">รูปภาพลูกค้า</a>
				</li>
				<li><a href="#tsp" data-toggle="tab">รูปภาพสำเนาบัตรประชาชน</a></li>
				<li><a href="#tshome" data-toggle="tab">รูปภาพสำเนาทะเบียนบ้าน</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="pic">
					<?php echo img($list ['c_pic'],array('class'=>'img-polaroid','width'=>'150'));?>
				</div>
				<div class="tab-pane" id="tsp">
					<?php echo img($list ['c_tsp'],array('class'=>'img-polaroid'));?>
				</div>
				<div class="tab-pane" id="tshome">
					<?php echo img($list ['c_tshome'],array('class'=>'img-polaroid'));?>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<div
				class="control-group <?php if(form_error('c_pid'))echo 'error'; ?>">
				<div class="input-prepend">
					<span class="add-on">รหัสบัตรประชาชน</span><input
						class="input-medium" name="c_name" type="text"
						value="<?php echo $list['c_pid'];?>" disabled="disabled">
				</div>
			</div>
		</div>
		<div class="span6">
			<div
				class="control-group <?php if(form_error('c_name'))echo 'error'; ?>">
				<div class="input-prepend">
					<span class="add-on">ชื่อ - นามสกุล</span><input
						class="input-large" name="c_name" type="text"
						value="<?php echo $list['c_name'];?>" disabled="disabled">
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
					<textarea class="input-large" name="c_name" cols="40" rows="2" disabled="disabled"><?php echo $list['c_addr'];?></textarea>
				</div>
			</div>
		</div>
		<div class="span6">
			<div
				class="control-group <?php if(form_error('c_job'))echo 'error'; ?>">
				<div class="input-prepend">
					<span class="add-on">อาชีพ</span>
					<textarea class="input-large" name="c_name" cols="40" rows="2" disabled="disabled"><?php echo $list['c_job'];?></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<div
				class="control-group <?php if(form_error('c_tel'))echo 'error'; ?>">
				<div class="input-prepend">
					<span class="add-on">เบอร์โทรศัพท์</span><input
						class="input-medium" name="c_name" type="text"
						value="<?php echo $list['c_tel'];?>" disabled="disabled">
				</div>
			</div>
		</div>
		<div class="span6">
			<div
				class="control-group <?php if(form_error('c_birth'))echo 'error'; ?>">
				<div class="input-prepend">
					<span class="add-on">วันเกิด</span><input class="input-medium"
						name="c_name" type="text" value="<?php echo $list['c_birth'];?>"
						disabled="disabled">
				</div>
			</div>
		</div>
	</div>
</div>
