<!DOCTYPE html>
<html>
<head>
	<title>Daftar Email Masuk</title>
</head>
<body>
	<center><h1>Admin Page</h1></center>
    <!--<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>-->
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
		<?php
		$no = 1;
		foreach($users as $u){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
