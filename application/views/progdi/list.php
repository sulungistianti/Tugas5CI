<h3>DATA progdi</h3>
<?php echo anchor('progdi/add','ENTRY',
	array('class'=>'btn btn-danger btn-sm')); ?>
<table class="table table-bordered">
	<tr>
		<td>No</td>
		<td>NIP</td>
		<td>nama</td>
		<td>telp</td>
		<td>email</td>
		<td>alamat</td>
		<td colspan="2">ACTION</td>
	</tr>
<?php
$no=1;
foreach ($progdis as $progdi){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$progdi->NIP</td>
	<td>$progdi->nama</td>
	<td>$progdi->telp</td>
	<td>$progdi->email</td>
	<td>$progdi->alamat</td>
	<td width='20'>";
	echo anchor('progdi/edit/'.$progdi->id,'Edit',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	<td width='20'>";
	echo anchor('progdi/delete/'.$progdi->id,'Delete',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	</tr>";
	$no++;
}
?>
</table>
	