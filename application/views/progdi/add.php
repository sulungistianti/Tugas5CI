<h3>Entry DATA CUTI</h3>
<?php echo form_open('progdi/add'); ?>

<table class="table table-bordered">
	<tr>
		<td>NIP</td>
		<td><?php echo form_input('NIP','',
			"placeholder='NIP' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><?php echo form_input('nama','',
			"placeholder='nama' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>telp</td>
		<td><?php echo form_input('telp','',
			"placeholder='telp' class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>email</td>
		<td><?php echo form_input('email','',
			"placeholder='email' class='form-control'"); ?></td>
	</tr>

	<tr>

		<td>alamat</td>
		<td><?php echo form_input('alamat','',
			"placeholder='alamat' class='form-control'"); ?></td>
	</tr>

	<tr>
		<td colspan="2">
		<?php echo form_submit('submit','simpan',"class='btn btn-danger btn-sm'") ?>
		</td>
	</tr>
</table>
</form>