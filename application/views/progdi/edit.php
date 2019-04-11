<h3>Edit DATA Progdi</h3>
<?php echo form_open('progdi/edit'); ?>
<?php echo form_hidden('id', $progdi[0]->id);?>
<table class="table table-bordered">
	<tr>
		<td>NIP</td>
		<td><?php echo form_input('Nip',$progdi[0]->NIP,
			"placeholder='NIP' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><?php echo form_input('Nama',$progdi[0]->nama,
			"placeholder='nama' class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>telp</td>
		<td><?php echo form_input('Telp',$progdi[0]->telp,
			"placeholder='telp'class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>email</td>
		<td><?php echo form_input('Email',$progdi[0]->email,
			"placeholder='email' class='form-control'"); ?></td>
	</tr>

	<tr>

		<td>alamat</td>
		<td><?php echo form_input('Alamat',$progdi[0]->alamat,
			"placeholder='alamat' class='form-control'"); ?></td>
	</tr>

	<tr>
		
		<td colspan="2">
		<?php echo form_submit('submit','simpan',"class='btn btn-danger btn-sm'")?>
		<?php echo anchor('progdi','Kembali',array('class'=>'btn btn-danger btn-sm'));?>
		</td>
	</tr>
</table>
</form>