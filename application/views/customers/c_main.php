<h1>ลูกค้า</h1>
<?php echo $form;?>
<div class="control-group <?php if(form_error('name'))echo 'error'; ?>">
	<div class="input-prepend input-append">
		<span class="add-on">ค้นหาลูกค้า</span>
		<?php echo $input['name'];?>
		<button type="submit" class="btn">
			<i class="icon-search"></i>
		</button>
	</div>
	<?php echo $new_customer;?>
</div>
</form>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th style="text-align: center;">ลำดับ</th>
			<th style="text-align: center;">รูป</th>
			<th style="text-align: center;">ชื่อ - นามสกุล</th>
			<th style="text-align: center;">เบอร์โทร</th>
			<th style="text-align: center;">ทางเลือก</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if (isset ( $list )) {
			if ($list != NULL) {
				$count = 1;
				foreach ( $list as $row ) {
					echo '<tr>';
					echo '<td style="text-align: center; vertical-align: middle;">' . $count . '</td>';
					echo '<td style="text-align: center; vertical-align: middle;">' . img($row ['c_pic'],array('class'=>'img-polaroid','width'=>'100')) . '</td>';
					echo '<td style="vertical-align: middle;">' . $row ['c_name'] . '</td>';
					echo '<td style="vertical-align: middle;">' . $row ['c_tel'] . '</td>';
					echo '<td style="text-align: center; vertical-align: middle;">' . anchor('customers/detail/'.$row['c_id'],'<i class="icon-info-sign"></i> ข้อมูล',array('class'=>'btn btn-small'))  . anchor('customers/edit/'.$row['c_id'],'<i class="icon-pencil"></i> แก้ไข้ข้อมูล',array('class'=>'btn btn-small')) . '</td>';
					echo '</tr>';
					$count ++;
				}
			} else {
			echo '<tr><td colspan="5" style="text-align: center;">ไม่พบข้อมูลที่ต้องการค้นหา</td></tr>';
		}
		} else {
		echo '<tr><td colspan="5" style="text-align: center;">ยังไม่ได้ทำการค้นหา</td></tr>';
	}
	?>
	</tbody>
</table>
