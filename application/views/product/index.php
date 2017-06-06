<div class="container">
		<table class="table" border="5">
			<tr>
				<td>ลำดับ</td>
				<td>ชื่อ-นามสกลุ</td>
				<td>ชื่อผู้ใช้</td>
				<td>รหัสผ่าน</td>
				<td>Email</td>
				<td>เบอร์</td>
			</tr>
			
			<?php 
				$number = 0;
				foreach ($res as $key => $value) {
					$number++;
					echo "<tr>";
						echo "<td>{$number}</td>";
						echo "<td>{$value['name_surname']}</td>";
						echo "<td>{$value['user']}</td>";
						echo "<td>{$value['password']}</td>";
						echo "<td>{$value['Email']}</td>";
						echo "<td>{$value['phone']}</td>";
					
				}
			?>
			
		</table>
	</div>